<!doctype html>
<html lang="en">
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        @foreach ($posts as $post)
        @dd($loop)
            <article class="{{ $loop->even ? 'foobar' : '' }}">
                <h1>
                    <a href="/post/{{$post->slug }}">
                        <!-- ways to call elements from a collection -->
                    {{-- <?= $post->title; ?> --}}  
                    {{ $post->title }}
                    </a>
                </h1>
                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach
    </body>
</html>
