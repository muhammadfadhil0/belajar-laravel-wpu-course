<x-layout :title="$title">


    <div class="mp-6">
        <article class="p-6">
            {{-- judul artikel --}}
            <h2 class="text-2xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition-colors">
                {{ $post['title'] }}</h2>
            </h2>
            {{-- metadata --}}
            <div class="text-sm text-gray-500 mb-4">
                <p> {{ $post['author'] }} | 8 Agustus 2025</p>
            </div>
            {{-- isi artikel --}}
            <p class=" mb-4">
                {{ $post['body'] }}
            </p>
            <a href="/posts" class="font-medium text-blue-600 hover:underline">kembali</a>
        </article>
    </div>

</x-layout>
