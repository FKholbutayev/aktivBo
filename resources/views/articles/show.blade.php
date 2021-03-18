<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{route('article.index')}}">
                    {{ __('Articles') }}
                </a>
            </h2>
            <div class="bg-white">
                Your article
            </div>
        </div>
    </x-slot>

    <div class="py-12">
            <div class="max-w-5xl p-1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                            {{ $article->title }}
                    </div>
                </div>
            </div>
            <div class="max-w-5xl p-1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $article->body }}
                    </div>
                </div>
            </div>
    </div>

</x-app-layout>
