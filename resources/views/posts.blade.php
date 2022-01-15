<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>
                <a href="/post/{{$post->slug }}">
                    <!-- ways to call elements from a collection -->
                {{-- <?= $post->title; ?> --}}  
                {{ $post->title }}
                </a>
            </h1>

            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>