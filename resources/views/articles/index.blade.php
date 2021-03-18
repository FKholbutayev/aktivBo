<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{route('article.index')}}">
                    {{ __('Articles') }}
                </a>
            </h2>
            <div class="bg-white">
                You're logged in!
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        @foreach($articles as $article)
        <div class="max-w-5xl p-1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                     <a href="{{ route('article.show', $article) }}" class="text-blue-800 text-xl">
                         {{ $article->title }}
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</x-app-layout>
