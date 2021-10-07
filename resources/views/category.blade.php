@extends("layouts.main")

@section("container")
<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p> {{ $post->excerpt }}</p>
    <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more</a>
</article>
@endforeach

@endsection
