<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Daftar Kategori
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-pink-100 text-pink-800 rounded-lg border border-pink-300">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-md rounded-lg p-6">
                <a href="{{ route('categories.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                    + Tambah Kategori
                </a>

                <div class="space-y-3">
                    @foreach ($categories as $category)
                        <div class="flex justify-between items-center border border-pink-100 rounded-lg p-4">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $category->name }}</p>
                                <p class="text-sm text-gray-500">{{ $category->description }}</p>
                            </div>

                            <div class="flex gap-2">
                                <a href="{{ route('categories.edit', $category) }}"
                                   class="px-3 py-1 text-sm bg-pink-50 text-pink-700 rounded hover:bg-pink-100">
                                    Edit
                                </a>

                                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Yakin mau hapus kategori ini?')"
                                            class="px-3 py-1 text-sm bg-red-50 text-red-600 rounded hover:bg-red-100">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>