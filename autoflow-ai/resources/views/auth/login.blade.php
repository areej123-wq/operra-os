<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Operra OS</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-black text-white flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <div class="text-center mb-8">
            <div class="text-orange-500 text-sm font-bold tracking-[0.25em] uppercase">
                Operra OS
            </div>

            <h1 class="text-4xl font-bold mt-3">
                Welcome back
            </h1>

            <p class="text-gray-400 mt-3">
                Sign in to your account.
            </p>
        </div>

        <div class="bg-zinc-950 border border-zinc-800 rounded-3xl p-8">

            @if ($errors->any())
                <div class="mb-6 rounded-xl bg-red-500/10 border border-red-500/30 p-4">
                    @foreach ($errors->all() as $error)
                        <p class="text-red-300 text-sm">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
                @csrf

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
                    <label class="block text-sm font-semibold mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 py-3 outline-none focus:border-orange-500"
                        placeholder="Your password"
                    >
                </div>

                <label class="flex items-center gap-2 text-sm text-gray-400">
                    <input type="checkbox" name="remember">
                    Remember me
                </label>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-orange-500 py-3.5 font-bold hover:bg-orange-400"
                >
                    Sign In
                </button>
            </form>

            <p class="text-center text-sm text-gray-400 mt-6">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-orange-500 font-semibold">
                    Register
                </a>
            </p>

        </div>

    </div>

</body>
</html>