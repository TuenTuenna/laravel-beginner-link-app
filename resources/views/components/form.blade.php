@props([
    'method' => 'POST',
    'action' => ''
])
{{-- method 를 이렇게 한 이유는 method 쪽에는 GET 이나 POST 만 들어가기 때문 Put, patch 는 인식 못한다 --}}
<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
      action="{{ $action }}" {{ $attributes }}
>
    @csrf
    {{-- 외부에서 들어오는 method 가 GET 이나 POST 가 아닐때만 적용 --}}
    @if (! in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
