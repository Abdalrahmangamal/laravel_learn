<x-layout :title="$title">
    <h2>{{ $post->title }}</h2>
    <h2>{{ $post->id }}</h2>
    <p>{{ $post->body }}</p>
        @foreach($post->comments as $comment)
      <h2>{{ $comment->author }}</h2>
      <h2>{{ $comment->id }}</h2>
      <p>{{ $comment->content }}</p>
  @endforeach
</x-layout>
