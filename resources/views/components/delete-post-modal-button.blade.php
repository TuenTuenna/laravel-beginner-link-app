{{-- props 로 기본값을 줄 수 있다. --}}
{{-- 버튼 타입 2개 rounded / default --}}
@props([
    'postId' => '',
    'modalTitle' => '해당 포스팅을 삭제하실 건가요?',
    'title' => '포스트 타이틀 없음',
    'link' => '포스트 링크 없음',
    'description' => '포스트 설명 없음',
    'buttonStyle' => 'default',
    'styles' => [
        'rounded' => 'py-2 px-4 mr-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500',
        'default' => 'text-red-400 hover:text-red-600 cursor-pointer',
    ],
])

<x-delete-post-modal
    postId="{{ $postId }}"
    title="{{ $modalTitle }}"
    submit-label="확인"
    type="warning"
>
    {{-- 트리거를 통해 blade 콤포넌트에 클릭 이벤트를 전달한다 --}}
    <x-slot name="trigger">
        <a @click="on = true" {{ $attributes->merge(['class' => "{ $styles[$buttonStyle] }"]) }}>삭제</a>
    </x-slot>
    <ul class="list-disc mt-6 mx-6">
        <li class="text-left text-gray-500 text-base">제목:<span class="ml-3 text-sm">{{ $title }}</span></li>
        <li class="text-left text-gray-500 text-base">
            <div class="flex flex-row">
                <span>링크:</span>
                <a href="{{ "http://" . $link ?? '링크 없음' }}" target="_blank" class="ml-3 hover:underline hover:text-blue-500 block text-sm font-medium text-gray-500">{{ $link ?? '링크 없음' }}</a>
            </div>
        </li>
        <li class="text-left text-gray-500 text-base">설명:<span class="ml-3 text-sm">{{ $description }}</span></li>
    </ul>


</x-delete-post-modal>
