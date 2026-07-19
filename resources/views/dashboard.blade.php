<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md rounded-lg p-6">

                <p class="text-gray-700 mb-6">{{ __("You're logged in!") }}</p>

                <h3 class="font-semibold text-pink-800 mb-3">Menu Cepat</h3>

                <div class="flex flex-col gap-3">
                    <a href="{{ route('articles.index') }}"
                        class="px-4 py-3 bg-pink-50 text-pink-700 rounded-lg hover:bg-pink-100 text-left">
                        Kelola Artikel Saya
                    </a>

                    <a href="{{ route('categories.index') }}"
                        class="px-4 py-3 bg-pink-50 text-pink-700 rounded-lg hover:bg-pink-100 text-left">
                        Kelola Kategori Saya
                    </a>

                    <a href="{{ route('home') }}"
                        class="px-4 py-3 bg-pink-50 text-pink-700 rounded-lg hover:bg-pink-100 text-left">
                        Lihat Halaman Publik
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>