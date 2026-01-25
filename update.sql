-- File: update.sql
-- Description: Update database to match website logic and remove unused tables/data

-- A. USER DATA CLEANUP
-- 1. Delete user-related data to start fresh
SET FOREIGN_KEY_CHECKS = 0;
DELETE FROM `tickets`;
DELETE FROM `orders`;
DELETE FROM `users`;

-- B. STRUCTURAL CHANGES (CONSISTENCY WITH WEBSITE)
-- 1. Rename table 'destinations' to 'wisata'
RENAME TABLE `destinations` TO `wisata`;

-- 2. Rename 'dest_id' to 'wisata_id' in 'wisata' table
ALTER TABLE `wisata` CHANGE `dest_id` `wisata_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT;

-- 3. Update 'tickets' table structure
ALTER TABLE `tickets` DROP FOREIGN KEY `tickets_dest_id_foreign`;
ALTER TABLE `tickets` CHANGE `dest_id` `wisata_id` BIGINT UNSIGNED NOT NULL;
ALTER TABLE `tickets` ADD CONSTRAINT `tickets_wisata_id_foreign` 
    FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`wisata_id`);

-- 4. Update 'users' table structure (Remove role_id, add is_admin)
ALTER TABLE `users` DROP FOREIGN KEY `users_role_id_foreign`;
ALTER TABLE `users` DROP COLUMN `role_id`;
ALTER TABLE `users` ADD `is_admin` TINYINT(1) NOT NULL DEFAULT '0' AFTER `email`;

-- 5. Update 'orders' table structure (Remove promo_id)
ALTER TABLE `orders` DROP FOREIGN KEY `orders_promo_id_foreign`;
ALTER TABLE `orders` DROP COLUMN `promo_id`;

-- 6. Drop unused tables (Roles and Promos)
DROP TABLE IF EXISTS `promos`;
DROP TABLE IF EXISTS `roles`;

SET FOREIGN_KEY_CHECKS = 1;

-- C. MIGRATION METADATA CLEANUP
UPDATE `migrations` SET `migration` = '2026_01_20_155810_create_wisata_table' WHERE `migration` = '2026_01_20_155810_create_destinations_table';
UPDATE `migrations` SET `migration` = '2026_01_21_023129_add_slug_to_wisata_table' WHERE `migration` = '2026_01_21_023129_add_slug_to_destinations_table';
DELETE FROM `migrations` WHERE `migration` IN ('0000_01_01_000000_create_roles_table', '2026_01_20_155809_create_promos_table');
