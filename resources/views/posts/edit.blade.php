<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('포스트') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">기존 포스팅 수정</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        공유하시려는 포스팅을 수정해 주세요!
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
                                                    <input type="text" name="title" id="email-address" autocomplete="text"
                                                           placeholder="제목을 작성해주세요!"
                                                           value="{{ $post->title ?? '제목 없음' }}"
                                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="company-website" class="block text-sm font-medium text-gray-700">
                                                        링크
                                                    </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://
                  </span>
                                                        <input type="text" name="company-website" id="company-website"
                                                               class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                               placeholder="www.example.com"
                                                               value="{{ $post->link ?? '' }}"
                                                        >
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="about" class="block text-sm font-medium text-gray-700">
                                                    설명
                                                </label>
                                                <div class="mt-1">
                                                    <textarea id="about" name="about" rows="3"
                                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                              placeholder="링크에 대한 설명"
                                                    >{{ $post->description ?? '' }}</textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                    공유하는 링크에 대한 상세설명을 작성해주세요!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                수정완료
                                            </button>
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
