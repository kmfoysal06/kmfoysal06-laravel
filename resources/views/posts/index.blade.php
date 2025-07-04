@include('utilities.header')
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="flex flex-col w-full gap-2">
                    @foreach($posts as $post)
                        <div style="border:1px solid #000;display:block;width:100%;
                        height:100%;" class="p-2"> 
                            <a style="display:block;width:100%;
                        height:100%;" href="{{route('posts.show', $post->id) }}">{{$post->id}} : {{$post->title}}</a>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
@include('utilities.footer')