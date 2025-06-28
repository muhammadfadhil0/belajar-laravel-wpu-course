<x-layout :title="$title">


    <div class="mp-6">
        <article class="p-6 border-b-2">
            {{-- judul artikel --}}
            <h2 class="text-2xl font-bold text-gray-800 mb-3">
                {{ $post['title'] }}</h2>
            {{-- metadata --}}
            <div class="text-sm text-gray-500 mb-4">
                <p> {{ $post['author'] }} | 8 Agustus 2025</p>
            </div>
            {{-- isi artikel --}}
            <p class=" mb-4">
                {{ $post['body'] }}
            </p>
            <a href="/posts" class="font-medium"><- Kembali</a>
        </article>
    </div>

</x-layout>
