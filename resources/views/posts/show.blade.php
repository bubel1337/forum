<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }} выложил {{$post->user->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 justify-content-center">
                   {{$post->body}}

                   @if($post->user == Auth::user())
                   <p class="mt-5">
                    <a href="{{route('posts.edit', $post)}}">Изменить</a> <br>

                      <form action="{{route('posts.destroy', $post)}}" method="POST">
                        @csrf @method('DELETE')

                        <x-button class="mt-4 btn btn-danger">
                           Удалить
                        </x-button>
                      </form>
                   </p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


