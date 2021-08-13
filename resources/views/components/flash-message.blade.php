{{-- props 로 기본값을 줄 수 있다. --}}
@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-100 border-green-300 bg-green-500',
        'error' => 'bg-red-100 border-red-300 bg-red-500',
        'warning' => 'bg-yellow-100 border-yellow-300 bg-yellow-500',
    ]
])
{{-- $attributes 를 넣음으로써 외부에서도 html 클래스 적용이 가능하도록 한다 --}}
<div x-data="{ on: true }">
{{--    {{ $trigger }}--}}
    <section
        x-show="on"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        {{ $attributes->merge(['class' => "{ $colors[$type] } px-4 py-3 rounded relative shadow "]) }} >
        <div class="flex justify-between justify-center flex-wrap content-center">
            <p class="p-2 align-text-bottom text-white text-base">
                {{ $slot }}
            </p>
            <button
                @click="on = false"
                class="text-white text-2xl"
            >
                &times;
            </button>
        </div>
    </section>
</div>
