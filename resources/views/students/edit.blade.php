<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-lg mt-10">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">{{ __('Edit') }} {{ __('Student') }}</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>
                <input type="text" name="name" value="{{ old('name', $student->name) }}"
                       class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500" required>
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email') }}</label>
                <input type="email" name="email" value="{{ old('email', $student->email) }}"
                       class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500" required>
            </div>

            <div class="flex justify-between items-center mt-8">
                <a href="{{ route('students.index') }}" class="text-gray-500 hover:text-gray-700 font-semibold transition">
                    {{ __('Cancel') }}
                </a>

                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg shadow transition transform hover:scale-105">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
