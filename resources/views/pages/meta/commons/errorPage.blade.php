@extends('layouts.sidebar')

@section('content-sidebar')
    <section style="height: calc(100vh - 100px) ;" class="p-4 grid place-content-center">
        <div id="alert-additional-content-2"
            class="p-4 mb-4 max-w-max mx-auto text-red-800 border border-red-300 rounded-lg bg-red-50 :bg-gray-800 :text-red-400 :border-red-800"
            role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <h3 class="text-2xl font-medium">{{ $titulo }}</h3>
            </div>
            <div class="mt-2 mb-4 text-base max-w-[500px]">
                {{ $descripcion }}
            </div>
            <div class="flex">
                <button type="button"
                    class="text-white bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center :bg-red-600 :hover:bg-red-700 :focus:ring-red-800">
                    <svg class="-ml-0.5 mr-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 14">
                        <path
                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    View more
                </button>

            </div>
        </div>
    </section>
@endsection
