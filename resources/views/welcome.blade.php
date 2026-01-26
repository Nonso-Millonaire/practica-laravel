<x-app-layout>
    @guest
        <div class="bg-white">
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
                </div>

                <div class="mx-auto max-w-2xl py-12 sm:py-20 lg:py-24">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                            {{ __('Academic Management Simplified') }}
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            {{ __('Manage students, projects, and resources efficiently. Designed for speed, security, and ease of use.') }}
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all transform hover:scale-105">
                                {{ __('Log in') }}
                            </a>
                            <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600 transition">
                                {{ __('Register') }} <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mx-auto max-w-7xl px-6 lg:px-8 pb-24">
                    <div class="mx-auto grid max-w-lg grid-cols-1 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>
                            </div>
                            <dt class="text-base font-semibold leading-7 text-gray-900">{{ __('Student CRUD') }}</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ __('Complete control over student records with instant updates.') }}</dd>
                        </div>
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" /></svg>
                            </div>
                            <dt class="text-base font-semibold leading-7 text-gray-900">{{ __('Project Management') }}</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ __('Visualize and track academic projects effortlessly.') }}</dd>
                        </div>
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S12 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S12 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.546-3.119 1.517-4.283" /></svg>
                            </div>
                            <dt class="text-base font-semibold leading-7 text-gray-900">{{ __('Multi-language') }}</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ __('Fully translated interface for international accessibility.') }}</dd>
                        </div>
                    </div>
                </div>

                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"></div>
                </div>
            </div>
        </div>
    @endguest

    @auth
        <div class="py-12 bg-gray-50 min-h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8 border-l-4 border-indigo-500">
                    <div class="p-6 text-gray-900 flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">{{ __('Welcome back') }}, <span class="text-indigo-600">{{ Auth::user()->name }}</span>!</h2>
                            <p class="text-gray-500 mt-1">{{ __('Here is an overview of your academic management panel.') }}</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm text-red-500 hover:text-red-700 font-medium border border-red-200 px-4 py-2 rounded hover:bg-red-50 transition">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                            <svg class="w-24 h-24 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                        </div>
                        <div class="relative z-10">
                        <span class="inline-flex items-center justify-center p-3 bg-blue-100 rounded-lg shadow-sm">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </span>
                            <h3 class="mt-4 text-xl font-bold text-gray-900">{{ __('Manage Students') }}</h3>
                            <p class="mt-2 text-gray-500 text-sm">
                                {{ __('Access the full database of students. Add, edit, or remove records with validation and security.') }}
                            </p>
                            <div class="mt-6">
                                <a href="{{ route('students.index') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800">
                                    {{ __('Go to Students') }}
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition">
                            <svg class="w-24 h-24 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                        </div>
                        <div class="relative z-10">
                        <span class="inline-flex items-center justify-center p-3 bg-green-100 rounded-lg shadow-sm">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        </span>
                            <h3 class="mt-4 text-xl font-bold text-gray-900">{{ __('View Projects') }}</h3>
                            <p class="mt-2 text-gray-500 text-sm">
                                {{ __('Review current academic projects, status, and related documentation.') }}
                            </p>
                            <div class="mt-6">
                                <a href="{{ route('projects.index') }}" class="inline-flex items-center text-green-600 font-semibold hover:text-green-800">
                                    {{ __('Go to Projects') }}
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endauth
</x-app-layout>
