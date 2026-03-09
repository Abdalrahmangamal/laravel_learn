<x-layout :title="$title">
    <a href="/blog/create"
        class=" bg-indigo-600 text-white px-4 py-2 rounded-md text-sm mb-[20px] font-semibold shadow hover:bg-indigo-500 transition">
        Create
    </a>
    @if (session('success'))
        <div class="text-green-500  px-4 py-2 rounded-md text-sm mb-[20px] font-semibold shadow">
            {{ session('success') }}

        </div>
    @endif
    <div class="mt-[20px] ">
        @foreach ($posts as $post)
            <div class="flex items-center justify-between mb-[20px]">

                <div>

                    <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
                    <h2>{{ $post->id }}</h2>
                </div>
                <div class="flex items-center space-x-4"> <a href="/blog/{{ $post->id }}/edit"
                        class=" bg-indigo-600 text-white px-4 py-2 rounded-md text-sm mb-[20px] font-semibold shadow hover:bg-indigo-500 transition">
                        Edit
                    </a>
                    <form method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')"
                        action="/blog/{{ $post->id }}">
                        @csrf
                        @method('DELETE')
                        <button href="/blog/create"
                            class=" bg-red-600 text-white px-4 py-2 rounded-md text-sm mb-[20px] font-semibold shadow hover:bg-indigo-500 transition">
                            Delete
                        </button>

                    </form>
                </div>
            </div>
            <hr class="border-t border-gray-300 my-[20px]" />
        @endforeach

    </div>
    {{ $posts->links() }}
</x-layout>
