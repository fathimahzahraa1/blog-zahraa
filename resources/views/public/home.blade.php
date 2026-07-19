<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Pribadi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-pink-50">

    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-pink-600">Blog Pribadi</h1>
            <a href="{{ route('login') }}" class="text-sm text-pink-600 hover:text-pink-800">Login</a>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 py-10">

        <form action="{{ route('home') }}" method="GET" class="mb-8 flex flex-col sm:flex-row gap-3">
            <input type="text" name="search" placeholder="Cari judul artikel..." value="{{ request('search') }}"
                   class="flex-1 rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">

            <select name="category" class="rounded-lg border-gray-300 focus:border-pink-400 focus:ring-pink-400">
                <option value="">-- Semua Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="px-5 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                Cari
            </button>
        </form>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($articles as $article)
                <a href="{{ route('public.articles.show', $article) }}"
                   class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">

                    @if ($article->thumbnail)
                        <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}"
                             class="w-full h-40 object-cover">
                    @else
                        <div class="w-full h-40 bg-pink-100"></div>
                    @endif

                    <div class="p-4">
                        <span class="inline-block text-xs text-pink-600 bg-pink-50 px-2 py-1 rounded-full mb-2">
                            {{ $article->category->name }}
                        </span>

                        <h2 class="font-semibold text-gray-800 mb-1">{{ $article->title }}</h2>

                        <p class="text-xs text-gray-500">
                            Oleh {{ $article->user->name }} — {{ $article->created_at->format('d M Y') }}
                        </p>
                    </div>
                </a>
            @empty
                <p class="text-gray-500 col-span-full text-center py-10">Belum ada artikel yang ditemukan.</p>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $articles->links() }}
        </div>
    </div>

</body>
</html>