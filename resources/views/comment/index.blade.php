<x-layout :title="$title">
  @foreach($comments as $comment)
    <h2>{{ $comment->author }}</h2>
    <h2>{{ $comment->id }}</h2>
    <p>{{ $comment->content }}</p>
    <p>{{ $comment->post }}</p>
  @endforeach
</x-layout>
