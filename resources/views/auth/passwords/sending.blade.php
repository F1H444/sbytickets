@extends('layouts.app')

@section('content')
    <div class="min-h-screen pt-28 lg:pt-20 flex items-center justify-center bg-gray-50 px-4 pb-12">
        <div class="max-w-md w-full text-center space-y-8">
            <div
                class="w-24 h-24 bg-purple-100 rounded-full flex items-center justify-center mx-auto animate-bounce shadow-xl shadow-purple-200">
                <svg class="w-12 h-12 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </div>
            <div class="space-y-4">
                <h2 class="text-3xl font-black text-gray-900 tracking-tight">Memproses Email...</h2>
                <p class="text-gray-500 font-medium italic">Jangan tutup halaman ini. Kami sedang mengirimkan tautan
                    pemulihan ke kotak masuk Anda.</p>
            </div>
            <div class="flex justify-center">
                <div class="w-12 h-1 bg-gray-200 rounded-full overflow-hidden">
                    <div class="h-full bg-purple-700 animate-progress"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- EmailJS Integration -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init({
                publicKey: "{{ config('services.emailjs.public_key') }}",
            });
        })();

        document.addEventListener('DOMContentLoaded', function() {
            const templateParams = {
                to_name: "{{ $user->full_name }}",
                to_email: "{{ $user->email }}",
                reset_url: "{{ $reset_url }}",
                message: "Klik tombol di bawah ini untuk mengatur ulang kata sandi Anda. Tautan ini hanya berlaku dalam waktu terbatas."
            };

            emailjs.send("{{ config('services.emailjs.service_id') }}",
                    "{{ config('services.emailjs.template_id') }}", templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    window.location.href = "{{ route('login') }}?reset_sent=1";
                }, function(error) {
                    console.log('FAILED...', error);
                    window.location.href = "{{ route('password.request') }}?error=failed_to_send";
                });
        });
    </script>

    <style>
        @keyframes progress {
            0% {
                width: 0%;
            }

            100% {
                width: 100%;
            }
        }

        .animate-progress {
            animation: progress 2s ease-in-out infinite;
        }
    </style>
@endsection
