<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Edit Artikel
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

            <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}""
                               class="w-full rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">
                    </div>

                <div class="mb-4">
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                        <select name="category_id" id="category_id"
                                class="w-full rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $article->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                </div>

                <div class="mb-4">
                    <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-1">Thumbnail</label>

                    @if ($article->thumbnail)
                        <div class="mb-2">
                            <img src="{{ Storage::url($article->thumbnail) }}" alt="Thumbnail saat ini"
                                class="w-15 h-15 object-cover rounded-lg">
                            <p class="text-xs text-gray-500 mt-1">Thumbnail saat ini (upload file baru untuk mengganti)</p>
                        </div>
                    @endif

                    <input type="file" name="thumbnail" id="thumbnail" accept="image/*"
                            class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100">
                </div>

                <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Konten</label>
                        <textarea name="content" id="content" rows="10"
                                  class="w-full rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">{{ old('content', $article->content) }}</textarea>
                </div>

                <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status" id="status"
                                class="w-full rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">
                            <option value="draft" {{ $article->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ $article->status == 'published' ? 'selected' : '' }}>Publikasikan</option>
                        </select>
                </div>

                    <button type="submit"
                            class="px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                        Simpan
                    </button>
            </form>
        </div>
    </div>
</x-app-layout>