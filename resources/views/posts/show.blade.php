<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('포스트') }}
        </h2>
    </x-slot>

{{--    @if(session('alert_message'))--}}
{{--        <x-alert></x-alert>--}}
{{--    @endif--}}

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('info'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Check the following errors :(
        </div>
        <x-alert :message="session('alert_message')" title="Warning Title" type="warning"></x-alert>
    @endif

    @if ($message = Session::get('success'))

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-5 bg-green-100 border border-green-100 bg-green-500 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline text-white">{{ $message }}</span>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">포스팅 상세</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        포스팅 상세정보를 보여줍니다.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="#" method="POST">
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                            <div class="grid grid-cols-3 gap-6">
                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="title" class="block text-sm font-medium text-gray-700">제목</label>
                                                    <div class="mt-2 bg-gray-20 px-4 py-2 border border-gray-300 rounded-lg">
                                                        <label for="title" class="block text-base font-medium text-gray-900">{{ $post->title ?? '제목 없음' }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="company-website" class="block text-sm font-medium text-gray-700">
                                                        링크
                                                    </label>
                                                    <div class="mt-2 bg-gray-20 px-4 py-2 border border-gray-300 rounded-lg">
                                                        <a href="{{ "http://" . $post->link ?? '링크 없음' }}" target="_blank" class="hover:underline hover:text-blue-500 block text-base font-medium text-gray-900">{{ $post->link ?? '링크 없음' }}</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="about" class="block text-sm font-medium text-gray-700">
                                                    설명
                                                </label>
                                                <div class="mt-2 bg-gray-20 px-4 py-2 border border-gray-300 rounded-lg">
                                                    <label for="title" class="block text-base font-medium text-gray-900">{{ $post->description ?? '설명 없음' }}</label>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                    공유하는 링크에 대한 상세설명을 작성해주세요!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="py-6 px-3 bg-gray-50 text-right  ">
                                            <a href="{{ route('posts.edit', $post) }}" class="py-2 px-4 mr-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">편집하기</a>
                                            <a href="#" class="py-2 px-4 mr-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">삭제하기</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
