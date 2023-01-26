<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">&larr;Go Back</a>
</x-layout>
