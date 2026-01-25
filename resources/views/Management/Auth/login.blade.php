<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود به پنل مدیریت اقصی گروپ</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/aqsa.jpg') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Vazirmatn', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
        }

        .login-container {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .form-container {
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        }

        .brand-gradient {
            background: linear-gradient(to right, #c62828, #d32f2f, #b71c1c);
        }

        .input-focus:focus {
            border-color: #d32f2f;
            box-shadow: 0 0 0 3px rgba(211, 47, 47, 0.1);
        }

        .brand-text {
            color: #b71c1c;
        }

        .login-image {
            filter: brightness(0.95);
            border-left: 6px solid #d32f2f;
        }

        .error-message {
            background-color: #ffebee;
            border-right: 4px solid #d32f2f;
        }

        .success-message {
            background-color: #e8f5e9;
            border-right: 4px solid #43a047;
        }

        .btn-hover {
            transition: all 0.3s ease;
        }

        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(183, 28, 28, 0.2);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4">
    <div
        class="login-container w-full max-w-6xl bg-white rounded-3xl overflow-hidden flex flex-col md:flex-row-reverse">

        <!-- Image Section -->
        <div class="md:w-1/2 w-full relative overflow-hidden">
            <div class="relative h-full">
                <img src="{{ asset('images/aqsa.jpg') }}" alt="ورود به پنل اقصی گروپ"
                    class="login-image w-full h-full object-cover"
                    onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80';">

                <!-- Brand overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent flex items-end p-8">
                    <div>
                        <h2 class="text-white text-3xl font-bold mb-2">شرکت اقصی گروپ</h2>
                        <p class="text-white/90 text-lg">سیستم مدیریت </p>
                    </div>
                </div>

                <!-- Logo badge -->
                <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm rounded-full p-3 shadow-lg">
                    <div class="w-16 h-16 rounded-full bg-[#5287a6] flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">اق</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="md:w-1/2 w-full p-6 md:p-12 form-container">
            <div class="max-w-md mx-auto">
                <!-- Header -->
                <div class="text-center mb-10">
                 
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">ورود به پنل مدیریت</h1>
                    <h2 class="text-2xl font-bold brand-text mb-1">شرکت اقصی گروپ</h2>
                    <p class="text-gray-600 mt-2">برای دسترسی به سیستم، لطفا وارد شوید</p>
                </div>

                <!-- Login Form -->
                <form action="{{ route('management.login') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Username Field -->
                    <div class="space-y-2">
                        <label for="username" class="block text-gray-700 font-medium">نام کاربری</label>
                        <div class="relative">
                            <input id="username" name="username" value="{{ old('username') }}" type="text"
                                placeholder="نام کاربری خود را وارد نمایید"
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 pr-12 input-focus transition duration-200 focus:outline-none"
                                required>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                        </div>
                        @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <label for="password" class="block text-gray-700 font-medium">رمز عبور</label>
                        <div class="relative">
                            <input id="password" name="password" type="password"
                                placeholder="رمز عبور خود را وارد نمایید"
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 pr-12 input-focus transition duration-200 focus:outline-none"
                                required>
                            <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                        </div>
                        @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-[#5287a6] text-white py-3 rounded-xl font-semibold btn-hover shadow-lg">
                        <i class="fas fa-sign-in-alt ml-2"></i>
                        ورود به سیستم
                    </button>

                    <!-- Messages -->
                    @if($errors->any())
                    <div class="error-message rounded-xl p-4 mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-circle text-red-500 ml-2"></i>
                            <p class="text-red-700 font-medium">{{ $errors->first() }}</p>
                        </div>
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="error-message rounded-xl p-4 mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-exclamation-triangle text-red-500 ml-2"></i>
                            <p class="text-red-700 font-medium">{{ session('error') }}</p>
                        </div>
                    </div>
                    @endif

                    @if(session('success'))
                    <div class="success-message rounded-xl p-4 mt-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 ml-2"></i>
                            <p class="text-green-700 font-medium">{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif
                </form>

            </div>
        </div>
    </div>

    <script>
        // Simple form validation enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            
            form.addEventListener('submit', function(e) {
                const username = document.getElementById('username').value.trim();
                const password = document.getElementById('password').value.trim();
                
                if (!username || !password) {
                    e.preventDefault();
                    
                    if (!username) {
                        alert('لطفاً نام کاربری خود را وارد کنید.');
                        document.getElementById('username').focus();
                    } else if (!password) {
                        alert('لطفاً رمز عبور خود را وارد کنید.');
                        document.getElementById('password').focus();
                    }
                }
            });
            
            // Add visual feedback on focus
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-red-100');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-red-100');
                });
            });
        });
    </script>
</body>

</html>