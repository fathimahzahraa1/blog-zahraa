<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Tambah Kategori Baru
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-50 text-red-700 rounded-lg border border-red-200">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Kategori</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                               class="w-full rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                        <textarea name="description" id="description" rows="4"
                                  class="w-full rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">{{ old('description') }}</textarea>
                    </div>

                    <button type="submit"
                            class="px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>