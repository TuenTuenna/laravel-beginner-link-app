<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('포스트') }}
        </h2>
    </x-slot>

{{--    <div x-data="{ open: false }">--}}
{{--        <button x-on:click="open = ! open, Session::flash('show-alert', 'alert-danger'); ">Toggle Dropdown</button>--}}

{{--        <div :class="open ? '' : 'hidden'">--}}
{{--            Dropdown Contents...--}}
{{--        </div>--}}
{{--        <x-alert title="타이틀" message="open" type="warning"></x-alert>--}}
{{--    </div>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    <a type="button"
                            href="{{ route('posts.create') }}"
                            class="inline-block mb-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        새 포스팅
                    </a>
                    @if (count($posts) < 1)
                        <p>포스팅이 없습니다.</p>
                    @else
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    제목
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    설명
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wide">
                                                    링크
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wide">
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wide">
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wide">
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($posts as $post)

                                                <tr>
                                                    <td class="px-2 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    {{ $post->title }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-500">
                                                            {{ $post->description }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <a href="{{ "http://" . $post->link ?? '링크 없음' }}" target="_blank" class="hover:underline hover:text-blue-500 block text-sm font-medium text-gray-500">{{ $post->link ?? '링크 없음' }}</a>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="{{ route('posts.show', $post) }}" class="text-gray-400 hover:text-gray-600">상세보기</a>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="{{ route('posts.edit', $post) }}" class="text-indigo-400 hover:text-indigo-600">편집</a>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
{{--                                                        <a href="#" class="text-red-400 hover:text-red-600">삭제</a>--}}
                                                        {{-- 삭제 호출 --}}
                                                        <x-delete-post-modal-button
{{--                                                            class="text-yellow-400 hover:text-yellow-600"--}}
                                                            postId="{{ $post->id }}"
                                                            title="{{ $post->title }}"
                                                            link="{{ $post->link }}"
                                                            description="{{ $post->description }}">
                                                        </x-delete-post-modal-button>
                                                    </td>

                                                </tr>
                                                <!-- More people... -->
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="p-4">{!! $posts->links() !!}</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
