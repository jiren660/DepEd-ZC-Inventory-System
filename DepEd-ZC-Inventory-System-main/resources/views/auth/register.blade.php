<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | DepEd Zamboanga City</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="flex flex-col items-center justify-center p-4" x-data="{ submitted: false }">

    <div class="flex flex-col items-center w-full max-w-2xl">
        
        <div class="flex flex-col items-center mb-6 text-center -ml-8 animate-fade-up">
            <div class="flex items-center gap-4 mb-2">
                <img src="{{ asset('images/deped_logo.png') }}" alt="DepEd Logo" class="h-12 md:h-14 w-auto object-contain">
                <img src="{{ asset('images/deped_zc_logo.png') }}" alt="DepEd ZC Logo" class="h-12 md:h-14 w-auto object-contain">
                <h1 class="text-2xl md:text-3xl font-extrabold tracking-tight text-black">
                    DepEd Zamboanga City
                </h1>
            </div>
            <p class="text-slate-400 font-bold tracking-[0.2em] text-[10px] ml-8 uppercase">Inventory Management System</p>
        </div>

        <div class="w-full max-w-md bg-white rounded-[2rem] shadow-2xl shadow-slate-200 border border-slate-100 overflow-hidden animate-fade-up" style="animation-delay: 0.1s;">
            
            <div class="h-1.5 bg-deped-red w-full"></div>

            <div class="p-8 md:p-10">
                
                <div x-show="!submitted">
                    <div class="mb-6 text-center">
                        <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Create Account</h2>
                        <p class="text-slate-500 text-sm mt-1">Register your email to request access.</p>
                    </div>

                    <form action="{{ route('register.post') }}" method="POST" class="space-y-5" @submit.prevent="submitted = true">
                        @csrf
                        
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest ml-1">Email Address</label>
                            <input type="email" name="email" required 
                                   class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus-ring-red transition-all duration-200 text-sm"
                                   placeholder="username@deped.gov.ph">
                        </div>

                        <button type="submit" 
                                class="btn-hover-effect w-full bg-deped-red text-white py-4 rounded-2xl font-bold text-lg shadow-lg active:scale-[0.98]">
                            Register Now
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-slate-500">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="text-[#c00000] font-bold hover:underline transition-colors">Sign in here</a>
                        </p>
                    </div>
                </div>

                <div x-show="submitted" x-transition.duration.500ms class="text-center py-4" x-cloak>
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 text-green-600 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-800 tracking-tight mb-2">Registration Successful!</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">
                        Your request has been sent. Please wait for the <span class="font-bold text-black">Administrator's approval</span> before you can access the system.
                    </p>
                    <a href="{{ route('login') }}" class="inline-block text-sm font-bold text-deped-red hover:underline uppercase tracking-widest">
                        Back to Login
                    </a>
                </div>

            </div>

            <div class="bg-slate-50/80 px-10 py-4 border-t border-slate-100 text-center">
                <p class="text-[9px] text-slate-400 font-bold tracking-widest uppercase">
                   Region IX Division of Zamboanga City • Inventory 
                </p>
            </div>
        </div>
    </div>

</body>
</html>