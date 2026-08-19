<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Candidate Dashboard | Operra OS</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-black text-white min-h-screen">


<nav class="border-b border-zinc-800 bg-zinc-950">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <div class="text-orange-500 font-bold text-xl">
            Operra OS
        </div>


        <div class="flex items-center gap-5">

            <span class="text-gray-400">
                {{ auth()->user()->name }}
            </span>


            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button class="text-gray-400 hover:text-orange-500">

                    Logout

                </button>

            </form>

        </div>

    </div>

</nav>


<main class="max-w-7xl mx-auto px-6 py-12">


    <div class="mb-10">

        <span class="text-orange-500 uppercase tracking-widest text-sm font-bold">

            Candidate Portal

        </span>


        <h1 class="text-4xl font-bold mt-3">

            Welcome, {{ auth()->user()->name }}

        </h1>


        <p class="text-gray-400 mt-2">

            Build your verified professional Capability Passport.

        </p>

    </div>


    <div class="grid md:grid-cols-3 gap-6">


        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6">

            <p class="text-gray-400 text-sm">

                Verification Status

            </p>

            <h3 class="text-2xl font-bold mt-2 text-orange-500">

                Draft

            </h3>

        </div>


        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6">

            <p class="text-gray-400 text-sm">

                Profile Completion

            </p>

            <h3 class="text-2xl font-bold mt-2">

                20%

            </h3>

        </div>


        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-6">

            <p class="text-gray-400 text-sm">

                Capability Passport

            </p>

            <h3 class="text-2xl font-bold mt-2">

                Not Ready

            </h3>

        </div>


    </div>


    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">


        <a
            href="{{ route('candidate.profile') }}"
            class="bg-zinc-950 border border-zinc-800 hover:border-orange-500 rounded-2xl p-7 transition"
        >

            <div class="text-orange-500 text-2xl mb-4">

                👤

            </div>

            <h3 class="text-xl font-bold">

                Professional Profile

            </h3>

            <p class="text-gray-400 mt-2">

                Add headline, summary, location and preferences.

            </p>

        </a>


        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7">

            <div class="text-orange-500 text-2xl mb-4">

                ⚡

            </div>

            <h3 class="text-xl font-bold">

                Skills

            </h3>

            <p class="text-gray-400 mt-2">

                Add professional skills and supporting evidence.

            </p>

        </div>


        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7">

            <div class="text-orange-500 text-2xl mb-4">

                💼

            </div>

            <h3 class="text-xl font-bold">

                Experience

            </h3>

            <p class="text-gray-400 mt-2">

                Add your professional employment history.

            </p>

        </div>


        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7">

            <div class="text-orange-500 text-2xl mb-4">

                🚀

            </div>

            <h3 class="text-xl font-bold">

                Projects

            </h3>

            <p class="text-gray-400 mt-2">

                Add projects that prove your capability.

            </p>

        </div>


        <div class="bg-zinc-950 border border-zinc-800 rounded-2xl p-7">

            <div class="text-orange-500 text-2xl mb-4">

                🏆

            </div>

            <h3 class="text-xl font-bold">

                Certificates

            </h3>

            <p class="text-gray-400 mt-2">

                Upload professional credentials.

            </p>

        </div>


        <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl p-7">

            <div class="text-2xl mb-4">

                ✓

            </div>

            <h3 class="text-xl font-bold">

                Capability Passport

            </h3>

            <p class="text-orange-100 mt-2">

                Your verified professional identity.

            </p>

        </div>


    </div>


</main>

</body>

</html>