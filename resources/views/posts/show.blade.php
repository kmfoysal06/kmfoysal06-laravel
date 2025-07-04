@include('utilities.header')
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="flex flex-col gap-3">
                    @if($post && $post['title'])
                        <h3 class="text-2xl"> {{ $post['title'] }} </h3>
                        <article class="prose dark:prose-invert prose-headings:text-white prose-p:text-gray-300 prose-a:text-blue-500 prose-a:underline prose-a:decoration-2 prose-a:decoration-blue-500">
                            {!! $post['content'] !!}
                        </article>
                        <p class="text-gray-400 text-sm">Posted on: {{ $post['created_at'] }}</p>
                        <form action="{{route('posts.destroy', $post['id'])}}" method="POST" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('posts.edit', $post['id'])}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">Edit Post</a>
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-colors cursor-pointer">Delete Post</button>
                    @else
                        <h3 class="text-2xl">Post not found</h3>
                        <p class="text-gray-300">The post you are looking for does not exist or has been removed.</p>
                    @endif
                </div>
            </main>
        </div>
@include('utilities.footer')