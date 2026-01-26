<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold">{{ __('Students List') }}</h2>
            <a href="{{ route('students.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('Add Student') }}</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        <table class="w-full bg-white shadow-md rounded">
            <thead>
            <tr class="bg-gray-200">
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">{{ __('Name') }}</th>
                <th class="p-3 text-left">{{ __('Email') }}</th>
                <th class="p-3 text-left">{{ __('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr class="border-b">
                    <td class="p-3">{{ $student->id }}</td>
                    <td class="p-3">{{ $student->name }}</td>
                    <td class="p-3">{{ $student->email }}</td>
                    <td class="p-3 flex space-x-2">
                        <a href="{{ route('students.edit', $student->id) }}" class="text-yellow-500">{{ __('Edit') }}</a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="text-red-500 btn-delete">{{ __('Delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $students->links() }}
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
