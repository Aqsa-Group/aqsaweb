<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQSA SYSTEM | Login</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/aqsa.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            background: #ffffff;
        }

        .login-input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, .12);
        }
    </style>
</head>

<body>
    <main class="min-h-screen bg-white lg:grid lg:grid-cols-[minmax(420px,50vw)_1fr]">
        <section class="relative hidden min-h-screen overflow-hidden lg:block" aria-label="AQSA System logistics and ICT artwork">
            <img
                src="{{ asset('login.png') }}?v=3"
                alt="AQSA System"
                class="h-screen w-full "
            >
        </section>

        <section class="flex min-h-screen items-center justify-center px-5 py-10 sm:px-8">
            <div class="w-full max-w-[510px]">
                <h1 class="mb-10 text-center text-3xl font-bold tracking-[.24em] text-[#24356B] sm:text-4xl">
                    AQSA SYSTEM
                </h1>

                <div class="rounded-lg border border-gray-200 bg-white px-8 py-9 sm:px-10">
                    <h2 class="mb-7 text-center text-xl font-semibold text-gray-950">Login</h2>

                    <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
                        @csrf

                        <label class="relative block">
                            <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-[#1C274C]">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <circle cx="10" cy="6" r="3.25" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M3.75 17.083C3.75 13.631 6.548 10.833 10 10.833C13.452 10.833 16.25 13.631 16.25 17.083" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <input
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                type="text"
                                placeholder="User name..."
                                class="login-input h-11 w-full rounded-lg border border-gray-200 bg-white pl-12 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400"
                                required
                            >
                        </label>

                        <label class="relative block">
                            <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-[#1C274C]">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M7.5 9.167V6.25C7.5 4.179 8.619 2.5 10 2.5C11.381 2.5 12.5 4.179 12.5 6.25V9.167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    <rect x="3.75" y="8.333" width="12.5" height="8.75" rx="2.25" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M10 12.083V13.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="Password..."
                                class="login-input h-11 w-full rounded-lg border border-gray-200 bg-white pl-12 pr-4 text-sm text-gray-900 outline-none transition placeholder:text-gray-400"
                                required
                            >
                        </label>

                        <div class="flex justify-center pt-2">
                            <button
                                type="submit"
                                class="h-11 min-w-[112px] rounded-md bg-[#1E63B6] px-8 text-sm font-medium text-white transition hover:bg-[#174f94] focus:outline-none focus:ring-4 focus:ring-blue-100"
                            >
                                Login
                            </button>
                        </div>

                        @if($errors->any())
                            <p class="rounded-md bg-red-50 px-4 py-3 text-sm text-red-600">{{ $errors->first() }}</p>
                        @endif

                        @if(session('error'))
                            <p class="rounded-md bg-red-50 px-4 py-3 text-sm text-red-600">{{ session('error') }}</p>
                        @endif
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
