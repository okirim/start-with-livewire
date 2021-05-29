@extends('layouts.app')

@section('content')
    {{--    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">--}}
    {{--        <div class="absolute top-0 right-0 mt-4 mr-4">--}}
    {{--            @if (Route::has('login'))--}}
    {{--                <div class="space-x-4">--}}
    {{--                    @auth--}}
    {{--                        <a--}}
    {{--                            href="{{ route('logout') }}"--}}
    {{--                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"--}}
    {{--                            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"--}}
    {{--                        >--}}
    {{--                            Log out--}}
    {{--                        </a>--}}

    {{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--                            @csrf--}}
    {{--                        </form>--}}
    {{--                    @else--}}
    {{--                        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>--}}

    {{--                        @if (Route::has('register'))--}}
    {{--                            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>--}}
    {{--                        @endif--}}
    {{--                    @endauth--}}
    {{--                </div>--}}
    {{--            @endif--}}
    {{--        </div>--}}
    {{--       --}}
    {{--    </div>--}}

{{--   <livewire:dropdown-search/>--}}
{{--   <livewire:form/>--}}
{{--    <livewire:data-table />--}}

{{--    <livewire:poll />--}}
    {{--    handle comment--}}
{{--    <div class="block mx-auto my-y-12 px-8 py-4 bg-pink-200">--}}
{{--        <h2>{{$post->title}}</h2>--}}
{{--        <p>{{$post->body}}</p>--}}
{{--        <span>{{$post->created_at}}</span>--}}
{{--    </div>--}}
{{--    <livewire:comment-section :post="$post" />--}}

{{--    handle comment--}}
<livewire:files-upload />
@endsection

@section('alpine')
    <script type="module" src="//unpkg.com/@grafikart/drop-files-element"></script>
@endsection

