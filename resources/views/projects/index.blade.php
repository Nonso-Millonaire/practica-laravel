<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Project Portfolio') }}
            </h2>
            <a href="{{ route('projects.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow transition flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                {{ __('Create Project') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded shadow-sm flex justify-between items-center">
                    <div>
                        <p class="font-bold">{{ __('Success') }}</p>
                        <p>{{ $message }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-green-700 font-bold">×</button>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <a href="{{ route('projects.create') }}" class="group block border-2 border-dashed border-gray-300 rounded-2xl p-6 flex flex-col items-center justify-center text-center hover:border-indigo-500 hover:bg-indigo-50 transition-all duration-300 min-h-[300px]">
                    <div class="bg-indigo-100 text-indigo-600 rounded-full p-4 mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-indigo-700">{{ __('Create Project') }}</h3>
                    <p class="text-gray-500 text-sm mt-2">Añade un nuevo proyecto a tu colección</p>
                </a>

                @foreach ($projects as $project)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">

                        <div class="h-32 bg-gradient-to-r from-blue-500 to-indigo-600 relative flex items-center justify-center group-hover:from-indigo-600 group-hover:to-purple-600 transition duration-500">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full backdrop-blur-sm">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            </div>
                            <div class="absolute top-4 right-4 bg-black bg-opacity-20 text-white text-xs px-2 py-1 rounded">
                                {{ $project->created_at->format('d M Y') }}
                            </div>
                        </div>

                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition">
                                {{ $project->title }}
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                                {{ $project->description }}
                            </p>
                        </div>

                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                            <a href="{{ route('projects.edit', $project) }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-900 text-sm font-semibold transition">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                {{ __('Edit') }}
                            </a>

                            <form action="{{ route('projects.destroy', $project) }}" method="POST" class="form-delete">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="inline-flex items-center text-red-500 hover:text-red-700 text-sm font-semibold btn-delete transition">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(event) {
                const form = this.closest('form');
                Swal.fire({
                    title: "{{ __('Are you sure?') }}",
                    text: "{{ __('You wont be able to revert this!') }}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: "{{ __('Yes, delete it!') }}",
                    cancelButtonText: "{{ __('Cancel') }}"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });
        });
    </script>
</x-app-layout>
