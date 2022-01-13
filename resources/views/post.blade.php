<!doctype html>
<html lang="en">
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>

        <article>
            <h1>{{ $post->title }}</h1>
            {{-- <h1>{!! $post->title !!}</h1> --}}
            <div>
                {{-- <?= $post->body; ?> --}}
                {!! $post->body !!}
            </div>
        </article>

        <a href="/">Go back</a>

    </body>
</html>
