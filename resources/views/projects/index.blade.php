<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Project Portfolio') }}
            </h2>
            <span class="px-3 py-1 text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full">
                {{ $projects->count() }} {{ __('Projects') }}
            </span>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if($projects->isEmpty())
                <div class="text-center py-10">
                    <p class="text-gray-500 text-lg">{{ __('No projects found.') }}</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    @foreach ($projects as $project)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">

                            <div class="h-32 bg-gradient-to-r from-blue-500 to-indigo-600 relative flex items-center justify-center group-hover:from-indigo-600 group-hover:to-purple-600 transition duration-500">
                                <div class="bg-white bg-opacity-20 p-4 rounded-full backdrop-blur-sm">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-bold text-indigo-600 uppercase tracking-wide">
                                        Laravel
                                    </span>
                                    <span class="text-xs text-gray-400">
                                        {{ $project->created_at->format('d M, Y') }}
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition">
                                    {{ $project->title }}
                                </h3>

                                <p class="text-gray-600 text-sm line-clamp-3 leading-relaxed mb-6">
                                    {{ $project->description }}
                                </p>

                                <div class="border-t border-gray-100 pt-4 flex justify-between items-center">
                                    <div class="flex -space-x-2 overflow-hidden">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=Dev+One&background=random" alt=""/>
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=Dev+Two&background=random" alt=""/>
                                    </div>

                                    <button class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 flex items-center">
                                        {{ __('View Details') }}
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
        </div>
    </div>
</x-app-layout>
