<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $article->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-pink-50">

    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-pink-600">Blog Pribadi</h1>
            <a href="{{ route('login') }}" class="text-sm text-pink-600 hover:text-pink-800">Login</a>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-6 py-10">

        <a href="{{ route('home') }}" class="text-sm text-pink-600 hover:text-pink-800">
            &larr; Kembali ke Beranda
        </a>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden mt-4">

            @if ($article->thumbnail)
                <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}"
                     class="w-full h-64 object-cover">
            @endif

            <div class="p-6">
                <span class="inline-block text-xs text-pink-600 bg-pink-50 px-2 py-1 rounded-full mb-3">
                    {{ $article->category->name }}
                </span>

                <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $article->title }}</h1>

                <p class="text-sm text-gray-500 mb-6">
                    Oleh {{ $article->user->name }} — {{ $article->created_at->format('d M Y') }}
                </p>

                <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                    {{ $article->content }}
                </div>
                <div class="bg-white rounded-lg shadow-sm p-6 mt-6">
                    <h3 class="font-semibold text-gray-800 mb-4">
                        Komentar ({{ $article->comments->count() }})
                    </h3>

                    @if (session('success'))
                        <div class="mb-4 p-3 bg-pink-100 text-pink-800 rounded-lg text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 p-3 bg-red-50 text-red-700 rounded-lg text-sm">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('comments.store', $article) }}" method="POST" class="mb-6">
                        @csrf

                        <div class="mb-3">
                            <input type="text" name="name" placeholder="Nama kamu" value="{{ old('name') }}"
                                    class="max-w-md border-gray-300 focus:border-pink-400 focus:ring-pink-400">
                        </div>

                        <div class="mb-3">
                            <textarea name="comment" rows="3" placeholder="Tulis komentar..."
                                        class="w-full max-w-md border-gray-300 focus:border-pink-400 focus:ring-pink-400">{{ old('comment') }}</textarea>
                        </div>

                        <button type="submit" class="px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600 text-sm">
                            Kirim Komentar
                        </button>
                    </form>

                    <div class="space-y-4">
                        @forelse ($article->comments->sortByDesc('created_at') as $comment)
                            <div class="border-t border-pink-100 pt-4">
                                <p class="font-semibold text-sm text-gray-800">{{ $comment->name }}</p>
                                <p class="text-xs text-gray-400 mb-1">{{ $comment->created_at->diffForHumans() }}</p>
                                <p class="text-sm text-gray-600">{{ $comment->comment }}</p>
                            </div>
                        @empty
                            <p class="text-sm text-gray-400">Belum ada komentar. Jadilah yang pertama!</p>
                        @endforelse
                    </div>
                </div>    
            </div>
        </div>
    </div>

</body>
</html>