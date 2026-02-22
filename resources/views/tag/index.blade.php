<x-layout :title="$title">
  @foreach($tags as $tag)
    <h2>{{ $tag->title }}</h2>
    <h2>{{ $tag->id }}</h2>
    <p>{{ $tag->body }}</p>

  @endforeach

</x-layout>
