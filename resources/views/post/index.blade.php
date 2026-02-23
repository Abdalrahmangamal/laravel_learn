<x-layout :title="$title">
  @foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <h2>{{ $post->id }}</h2>
    <p>{{ $post->body }}</p>

  @endforeach
{{$posts->links()}}
</x-layout>
