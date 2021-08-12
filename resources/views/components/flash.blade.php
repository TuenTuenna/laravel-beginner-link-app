{{-- props 로 기본값을 줄 수 있다. --}}
@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-200 border-green-500',
        'error' => 'bg-red-200 border-red-500',
        'warning' => 'bg-yellow-200 border-yellow-500',
    ]
])
{{-- $attributes 를 넣음으로써 외부에서도 html 클래스 적용이 가능하도록 한다 --}}
<section {{ $attributes->merge(['class' => "{ $colors[$type] } border-b-4 p-4"]) }} >
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button>&times;</button>
    </div>
</section>
