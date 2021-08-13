<x-layout>

    <x-deactivate-modal></x-deactivate-modal>

{{--    <x-modal--}}
{{--        title="포스팅을 삭제하실 건가요?"--}}
{{--        submit-label="확인"--}}
{{--        type="warning"--}}
{{--    >--}}
{{--        <x-slot name="trigger">--}}
{{--            <button @click="on = true">Show Modal</button>--}}
{{--        </x-slot>--}}
{{--        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis deleniti dignissimos est et eveniet fuga hic illum ipsa maxime molestiae natus, non optio perspiciatis placeat porro saepe, sint veritatis.--}}
{{--    </x-modal>--}}

{{--    <br>--}}

{{--    <x-modal--}}
{{--        title="구독 해주세요!"--}}
{{--    >--}}
{{--        <x-slot name="trigger">--}}
{{--            <button @click="on = true">Click ME!</button>--}}
{{--        </x-slot>--}}
{{--        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque magnam non optio tempore vero. Aut blanditiis corporis eaque facilis laboriosam magni nisi, obcaecati perferendis quam qui ratione, repellat soluta vitae.--}}
{{--    </x-modal>--}}

   <x-flash type="warning">
       경고 입니다!
   </x-flash>
    <br>
    <x-flash class="mt-10">
        성공 입니다!
    </x-flash>
    <x-flash-message class="mt-6 mx-6">
        {{-- 트리거를 통해 blade 콤포넌트에 클릭 이벤트를 전달한다 --}}
{{--        <x-slot name="trigger">--}}
{{--            <a @click="on = false" class="py-2 px-4 mr-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">삭제</a>--}}
{{--        </x-slot>--}}
        성공 입니다!
    </x-flash-message>
</x-layout>
