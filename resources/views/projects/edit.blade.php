<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-lg mt-10">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">{{ __('Edit') }} {{ __('Project') }}</h2>

        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">{{ __('Title') }}</label>
                <input type="text" name="title" value="{{ $project->title }}" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500" required>
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">{{ __('Description') }}</label>
                <textarea name="description" rows="4" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500" required>{{ $project->description }}</textarea>
            </div>

            <div class="flex justify-between items-center mt-8">
                <a href="{{ route('projects.index') }}" class="text-gray-500 hover:text-gray-700 font-semibold">{{ __('Cancel') }}</a>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg shadow">{{ __('Update') }}</button>
            </div>
        </form>
    </div>
</x-app-layout>
