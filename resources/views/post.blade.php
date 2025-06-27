<x-layout :title="$title">


    @foreach ($posts as $post)
        <div class="mp-6">
            <article class="p-6 border-b-2 border-grey-10 transition-shadow duration-300">
                {{-- judul artikel --}}
                <h2 class="text-2xl font-bold text-gray-800 mb-3 hover:text-blue-600 transition-colors">
                    {{ $post['title'] }}</h2>
                {{-- metadata --}}
                <div class="text-sm text-gray-500 mb-4">
                    <p> {{ $post['author'] }} | 8 Agustus 2025</p>
                </div>
                {{-- isi artikel --}}
                <p class=" mb-4">
                    {{ Str::limit($post['body']), 10 }}
                </p>
                <a href="" class="font-medium text-blue-600 hover:underline">read
                    more >></a>
            </article>
        </div>
    @endforeach

</x-layout>
