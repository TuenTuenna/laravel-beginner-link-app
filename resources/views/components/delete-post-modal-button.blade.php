<x-modal
    title="포스팅을 삭제하실 건가요?"
    submit-label="확인"
    type="warning"
>
    <x-slot name="trigger">
        <a @click="on = true" class="py-2 px-4 mr-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">삭제</a>
    </x-slot>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis deleniti dignissimos est et eveniet fuga hic illum ipsa maxime molestiae natus, non optio perspiciatis placeat porro saepe, sint veritatis.
</x-modal>
