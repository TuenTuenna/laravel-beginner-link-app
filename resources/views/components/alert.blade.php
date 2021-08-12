{{--@props(['active'])--}}

<div class="fixed inset-0 z-50 bg-black bg-opacity-40 flex items-center justify-center p-8"
     x-data="{active: true}"
     x-show="active">
    <div class="bg-yellow-400 w-full md:w-1/2 rounded-xl p-8">
        <h3 class="text-3xl">{{ $type ?? '' }}</h3>
        <h3 class="text-3xl">{{ $title }}</h3>
        <div class="mt-4">
            {{ $message }}
        </div>
        <button class="mt-8 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md
        font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900
        focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled: opacity-25 transition ease-in-out duration-150"
                x-on:click="active=false">
            닫기
        </button>
    </div>
</div>


{{--<div class="fixed inset-0 z-50 bg-black bg-opacity-40 flex items-center justify-center p-8"--}}
{{--     x-data="{active: true}"--}}
{{--     x-show="active">--}}
{{--    <div class="bg-yellow-400 w-full md:w-1/2 rounded-xl p-8">--}}
{{--        <h3 class="text-3xl">{{ $type ?? '' }}</h3>--}}
{{--        <h3 class="text-3xl">{{ $title }}</h3>--}}
{{--        <div class="mt-4">--}}
{{--            {{ $message }}--}}
{{--        </div>--}}
{{--        <button class="mt-8 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md--}}
{{--        font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900--}}
{{--        focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled: opacity-25 transition ease-in-out duration-150"--}}
{{--                x-on:click="active=false">--}}
{{--            닫기--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}
