<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Daftar Artikel Saya
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
                <a href="{{ route('articles.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                    + Tulis Artikel Baru
                </a>

                <div class="space-y-3">
                    @foreach ($articles as $article)
                        <div class="flex justify-between items-center border border-pink-100 rounded-lg p-4">
                            <div class="flex items-center gap-4">
                                @if ($article->thumbnail)
                                    <img src="{{ Storage::url($article->thumbnail) }}"
                                         alt="{{ $article->title }}"
                                         class="w-16 h-16 object-cover rounded-lg">
                                @endif

                                <div>
                                    <p class="font-semibold text-gray-800">{{ $article->title }}</p>
                                    <p class="text-sm text-gray-500">
                                        {{ $article->category->name }} —
                                        <span class="{{ $article->status == 'published' ? 'text-green-600' : 'text-yellow-600' }}">
                                            {{ ucfirst($article->status) }}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-2 shrink-0">
                                <a href="{{ route('articles.edit', $article) }}"
                                   class="px-3 py-1 text-sm bg-pink-50 text-pink-700 rounded hover:bg-pink-100">
                                    Edit
                                </a>

                                <form action="{{ route('articles.destroy', $article) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Yakin mau hapus artikel ini?')"
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