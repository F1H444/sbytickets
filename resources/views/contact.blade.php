@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen pt-28 pb-20 lg:pt-40 lg:pb-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Centered Header -->
            <div class="max-w-3xl mx-auto text-center mb-20 lg:mb-32 space-y-8">
                <div
                    class="inline-flex items-center space-x-2 text-purple-700 font-bold uppercase tracking-widest text-[10px]">
                    <span class="w-6 h-px bg-purple-700"></span>
                    <span>Layanan Eksklusif</span>
                    <span class="w-6 h-px bg-purple-700"></span>
                </div>
                <h1 class="text-5xl md:text-7xl lg:text-9xl font-bold text-gray-900 tracking-tighter leading-[0.85]">
                    Hubungi <br> <span class="text-purple-700">Kami.</span>
                </h1>
                <p class="text-gray-500 text-lg lg:text-xl font-medium italic leading-relaxed">
                    "Kami dedikasikan seluruh sumber daya untuk memastikan setiap jengkal pengalaman Anda bersama SBYTickets
                    berjalan dalam kenyamanan dan kepastian."
                </p>
            </div>

            <!-- Contact Pills -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-20 lg:mb-32">
                <div
                    class="p-8 lg:p-10 bg-gray-50 rounded-3xl space-y-4 border-2 border-transparent hover:border-purple-100 transition-all group">
                    <div
                        class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-purple-700 shadow-sm border border-gray-100 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-black uppercase tracking-widest text-gray-400">Kantor Kami</h3>
                    <p class="font-bold text-gray-900 leading-tight">Jl. Pahlawan No. 1, Bubutan, Surabaya, 60174</p>
                </div>
                <div
                    class="p-8 lg:p-10 bg-gray-50 rounded-3xl space-y-4 border-2 border-transparent hover:border-purple-100 transition-all group">
                    <div
                        class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-purple-700 shadow-sm border border-gray-100 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-black uppercase tracking-widest text-gray-400">Email Utama</h3>
                    <p class="font-bold text-gray-900 leading-tight">support@sbytickets.com</p>
                </div>
                <div
                    class="p-8 lg:p-10 bg-gray-50 rounded-3xl space-y-4 border-2 border-transparent hover:border-purple-100 transition-all group">
                    <div
                        class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-purple-700 shadow-sm border border-gray-100 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-black uppercase tracking-widest text-gray-400">Hotline Digital</h3>
                    <p class="font-bold text-gray-900 leading-tight">+62 812 3456 7890</p>
                </div>
            </div>

            <!-- Form Section - Refined Box -->
            <div class="max-w-4xl mx-auto" x-data="{
                loading: false,
                sent: false,
                error: false,
                sendEmail() {
                    this.loading = true;
                    this.sent = false;
                    this.error = false;
            
                    const templateParams = {
                        from_name: document.getElementById('full_name').value,
                        from_email: document.getElementById('email').value,
                        message: document.getElementById('message').value
                    };
            
                    emailjs.send(
                        '{{ config('services.emailjs.service_id') }}',
                        '{{ config('services.emailjs.contact_template_id') }}',
                        templateParams
                    ).then((response) => {
                        console.log('SUCCESS!', response.status, response.text);
                        this.loading = false;
                        this.sent = true;
                        document.getElementById('contactForm').reset();
                    }, (err) => {
                        console.log('FAILED...', err);
                        this.loading = false;
                        this.error = true;
                    });
                }
            }">
                <div class="bg-white p-8 lg:p-16 rounded-[3rem] border-2 border-gray-100 shadow-2xl shadow-purple-900/5">
                    <form id="contactForm" @submit.prevent="sendEmail()"
                        class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                        <div class="md:col-span-2" x-show="sent" x-transition>
                            <div
                                class="p-5 bg-green-50 border-2 border-green-100 text-green-700 rounded-2xl font-bold flex items-center space-x-4">
                                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Terima kasih! Pesan Anda telah kami terima dan akan segera kami proses.</span>
                            </div>
                        </div>

                        <div class="md:col-span-2" x-show="error" x-transition>
                            <div
                                class="p-5 bg-red-50 border-2 border-red-100 text-red-700 rounded-2xl font-bold flex items-center space-x-4">
                                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                    </path>
                                </svg>
                                <span>Gagal mengirim pesan. Mohon periksa kembali koneksi Anda.</span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <label class="text-[10px] font-black text-gray-900 uppercase tracking-[0.2em] ml-1">Nama
                                Lengkap</label>
                            <input type="text" id="full_name" required placeholder="Siapa nama Anda?"
                                class="w-full px-6 py-5 bg-gray-50 border-2 border-gray-100 focus:bg-white focus:border-purple-700 rounded-2xl transition-all outline-none font-bold text-gray-900 shadow-sm">
                        </div>

                        <div class="space-y-4">
                            <label class="text-[10px] font-black text-gray-900 uppercase tracking-[0.2em] ml-1">Alamat
                                Email</label>
                            <input type="email" id="email" required placeholder="email@anda.com"
                                class="w-full px-6 py-5 bg-gray-50 border-2 border-gray-100 focus:bg-white focus:border-purple-700 rounded-2xl transition-all outline-none font-bold text-gray-900 shadow-sm">
                        </div>

                        <div class="md:col-span-2 space-y-4">
                            <label class="text-[10px] font-black text-gray-900 uppercase tracking-[0.2em] ml-1">Pesan
                                Eksklusif</label>
                            <textarea id="message" required placeholder="Tuliskan apa yang bisa kami bantu..." rows="6"
                                class="w-full px-6 py-5 bg-gray-50 border-2 border-gray-100 focus:bg-white focus:border-purple-700 rounded-2xl transition-all outline-none font-bold text-gray-900 shadow-sm resize-none"></textarea>
                        </div>

                        <div class="md:col-span-2 pt-4">
                            <button type="submit" :disabled="loading"
                                class="w-full group relative inline-flex items-center justify-center space-x-6 bg-gray-900 text-white px-12 py-6 rounded-2xl font-black uppercase tracking-widest text-sm overflow-hidden transition-all hover:bg-purple-700 active:scale-95 shadow-xl disabled:opacity-50">
                                <span class="relative z-10"
                                    x-text="loading ? 'Memproses...' : 'Kirim Pesan Sekarang'"></span>
                                <svg x-show="!loading"
                                    class="w-5 h-5 relative z-10 group-hover:translate-x-2 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                                <svg x-show="loading" class="animate-spin h-5 w-5 text-white relative z-10"
                                    viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- EmailJS Integration -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("{{ config('services.emailjs.public_key') }}");
        })();
    </script>
@endsection
