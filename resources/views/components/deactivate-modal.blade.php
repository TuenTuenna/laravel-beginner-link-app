<x-modal
    title="포스팅을 삭제하실 건가요?"
    submit-label="확인"
    type="warning"
>
    <x-slot name="trigger">
        <button @click="on = true" class="text-red-400 hover:text-red-600">삭제</button>
    </x-slot>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis deleniti dignissimos est et eveniet fuga hic illum ipsa maxime molestiae natus, non optio perspiciatis placeat porro saepe, sint veritatis.
</x-modal>
