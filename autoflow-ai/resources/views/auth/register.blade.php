<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Operra OS</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-black text-white flex items-center justify-center px-4 py-10">

    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="text-orange-500 text-sm font-bold tracking-[0.25em] uppercase">
                Operra OS
            </div>

            <h1 class="text-4xl font-bold mt-3">
                Create your account
            </h1>

            <p class="text-gray-400 mt-3">
                Join as a candidate or employer.
            </p>
        </div>

        <div class="bg-zinc-950 border border-zinc-800 rounded-3xl p-8 shadow-2xl">

            @if ($errors->any())
                <div class="mb-6 rounded-xl border border-red-500/30 bg-red-500/10 p-4">
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-300">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Full name
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 py-3 outline-none focus:border-orange-500"
                        placeholder="Your full name"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 py-3 outline-none focus:border-orange-500"
                        placeholder="you@example.com"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-3">
                        Register as
                    </label>

                    <div class="grid grid-cols-2 gap-3">

                        <label class="cursor-pointer">
                            <input
                                type="radio"
                                name="role"
                                value="candidate"
                                class="peer hidden"
                                {{ old('role') === 'candidate' ? 'checked' : '' }}
                                required
                            >

                            <div class="rounded-2xl border border-zinc-700 bg-zinc-900 p-4 text-center transition peer-checked:border-orange-500 peer-checked:bg-orange-500/10">
                                <div class="text-2xl mb-2">👤</div>
                                <div class="font-semibold">Candidate</div>
                                <div class="text-xs text-gray-400 mt-1">
                                    Build your profile
                                </div>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input
                                type="radio"
                                name="role"
                                value="employer"
                                class="peer hidden"
                                {{ old('role') === 'employer' ? 'checked' : '' }}
                            >

                            <div class="rounded-2xl border border-zinc-700 bg-zinc-900 p-4 text-center transition peer-checked:border-orange-500 peer-checked:bg-orange-500/10">
                                <div class="text-2xl mb-2">🏢</div>
                                <div class="font-semibold">Employer</div>
                                <div class="text-xs text-gray-400 mt-1">
                                    Find verified talent
                                </div>
                            </div>
                        </label>

                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 py-3 outline-none focus:border-orange-500"
                        placeholder="Minimum 8 characters"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Confirm password
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        required
                        class="w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 py-3 outline-none focus:border-orange-500"
                        placeholder="Confirm your password"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-orange-500 py-3.5 font-bold text-white transition hover:bg-orange-400"
                >
                    Create Account
                </button>
            </form>

            <p class="text-center text-sm text-gray-400 mt-6">
                Already have an account?
                <a href="{{ route('login') }}" class="text-orange-500 font-semibold hover:text-orange-400">
                    Sign in
                </a>
            </p>

        </div>
    </div>

</body>
</html>