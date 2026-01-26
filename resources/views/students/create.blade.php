<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow mt-10">
        <h2 class="text-xl mb-4">{{ __('Create Student') }}</h2>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block">{{ __('Name') }}</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block">{{ __('Email') }}</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('students.index') }}" class="text-gray-500 hover:underline">{{ __('Cancel') }}</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</x-app-layout>
