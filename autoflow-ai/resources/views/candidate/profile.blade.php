<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Candidate Profile | Operra OS</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white min-h-screen">

    <nav class="border-b border-zinc-800 bg-zinc-950">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <div>
                <span class="text-orange-500 font-bold text-xl">
                    Operra OS
                </span>
            </div>

            <div class="flex gap-5 items-center">

                <a
                    href="{{ route('candidate.dashboard') }}"
                    class="text-gray-400 hover:text-white"
                >
                    Dashboard
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="text-gray-400 hover:text-orange-500">
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </nav>


    <main class="max-w-5xl mx-auto px-6 py-12">

        <div class="mb-10">

            <span class="text-orange-500 font-bold uppercase tracking-widest text-sm">
                Capability Passport
            </span>

            <h1 class="text-4xl font-bold mt-3">
                Build Your Professional Profile
            </h1>

            <p class="text-gray-400 mt-3">
                Add your professional information, preferences and supporting evidence.
            </p>

        </div>


        @if(session('success'))

            <div class="mb-6 bg-green-500/10 border border-green-500/30 text-green-300 rounded-xl p-4">
                {{ session('success') }}
            </div>

        @endif


        @if($errors->any())

            <div class="mb-6 bg-red-500/10 border border-red-500/30 rounded-xl p-4">

                @foreach($errors->all() as $error)

                    <p class="text-red-300">
                        {{ $error }}
                    </p>

                @endforeach

            </div>

        @endif


        <form
            method="POST"
            action="{{ route('candidate.profile.update') }}"
            enctype="multipart/form-data"
            class="space-y-8"
        >

            @csrf
            @method('PUT')


            <div class="bg-zinc-950 border border-zinc-800 rounded-3xl p-8">

                <h2 class="text-xl font-bold mb-6">
                    Professional Information
                </h2>

                <div class="grid md:grid-cols-2 gap-6">

                    <div class="md:col-span-2">

                        <label class="block text-sm mb-2">
                            Professional Headline
                        </label>

                        <input
                            type="text"
                            name="headline"
                            value="{{ old('headline', $profile->headline) }}"
                            placeholder="e.g. Senior Laravel Developer"
                            class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3 focus:border-orange-500 outline-none"
                        >

                    </div>


                    <div class="md:col-span-2">

                        <label class="block text-sm mb-2">
                            Professional Summary
                        </label>

                        <textarea
                            name="bio"
                            rows="5"
                            placeholder="Tell employers about your professional experience..."
                            class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3 focus:border-orange-500 outline-none"
                        >{{ old('bio', $profile->bio) }}</textarea>

                    </div>


                    <div>

                        <label class="block text-sm mb-2">
                            Location
                        </label>

                        <input
                            type="text"
                            name="location"
                            value="{{ old('location', $profile->location) }}"
                            placeholder="e.g. London, UK"
                            class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3"
                        >

                    </div>


                    <div>

                        <label class="block text-sm mb-2">
                            Work Preference
                        </label>

                        <select
                            name="work_preference"
                            class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3"
                        >

                            <option value="">Select preference</option>

                            <option
                                value="remote"
                                {{ old('work_preference', $profile->work_preference) === 'remote' ? 'selected' : '' }}
                            >
                                Remote
                            </option>

                            <option
                                value="hybrid"
                                {{ old('work_preference', $profile->work_preference) === 'hybrid' ? 'selected' : '' }}
                            >
                                Hybrid
                            </option>

                            <option
                                value="onsite"
                                {{ old('work_preference', $profile->work_preference) === 'onsite' ? 'selected' : '' }}
                            >
                                Onsite
                            </option>

                        </select>

                    </div>


                    <div>

                        <label class="block text-sm mb-2">
                            Availability
                        </label>

                        <input
                            type="text"
                            name="availability"
                            value="{{ old('availability', $profile->availability) }}"
                            placeholder="e.g. Available within 30 days"
                            class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3"
                        >

                    </div>


                    <div>

                        <label class="block text-sm mb-2">
                            Expected Salary
                        </label>

                        <input
                            type="number"
                            name="expected_salary"
                            value="{{ old('expected_salary', $profile->expected_salary) }}"
                            placeholder="e.g. 50000"
                            class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3"
                        >

                    </div>

                </div>

            </div>


            <div class="bg-zinc-950 border border-zinc-800 rounded-3xl p-8">

                <h2 class="text-xl font-bold mb-6">
                    Professional Links
                </h2>

                <div class="space-y-5">

                    <input
                        type="url"
                        name="linkedin_url"
                        value="{{ old('linkedin_url', $profile->linkedin_url) }}"
                        placeholder="LinkedIn URL"
                        class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3"
                    >

                    <input
                        type="url"
                        name="github_url"
                        value="{{ old('github_url', $profile->github_url) }}"
                        placeholder="GitHub URL"
                        class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3"
                    >

                    <input
                        type="url"
                        name="portfolio_url"
                        value="{{ old('portfolio_url', $profile->portfolio_url) }}"
                        placeholder="Portfolio URL"
                        class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3"
                    >

                </div>

            </div>


            <div class="bg-zinc-950 border border-zinc-800 rounded-3xl p-8">

                <h2 class="text-xl font-bold">
                    CV / Resume
                </h2>

                <p class="text-gray-400 text-sm mt-2 mb-5">
                    Upload PDF, DOC or DOCX. Maximum 5 MB.
                </p>

                <input
                    type="file"
                    name="cv"
                    accept=".pdf,.doc,.docx"
                    class="block w-full text-gray-400"
                >

                @if($profile->cv_path)

                    <p class="mt-4 text-green-400 text-sm">
                        ✓ CV uploaded
                    </p>

                @endif

            </div>


            <div class="flex justify-end">

                <button
                    type="submit"
                    class="bg-orange-500 hover:bg-orange-400 text-white font-bold px-8 py-3 rounded-xl"
                >
                    Save Profile
                </button>

            </div>

        </form>

    </main>

</body>
</html>