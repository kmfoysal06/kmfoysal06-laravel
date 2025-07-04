@include('utilities.header')
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <form action="{{ route('posts.update', $post['id']  ) }}" method="post" class="flex flex-col gap-4 w-full lg:w-1/2 m-auto">
                    @csrf
                    @method('PUT')
                    <input type="text" class="text-black border-solid border-black border-2 p-2" name="title" id="title" placeholder="Title" value="{{ $post['title'] }}" required>
                    <textarea class="text-black border-solid border-black border-2 p-2" name="content" id="content" placeholder="Content">{{$post['content']}}</textarea>
                    <button type="submit" class="bg-[#0a0a0a] border-solid border-white text-white px-4 py-2 rounded-lg cursor-pointer">Create Post</button>
                </form>
            </main>
        </div>
@include('utilities.footer')