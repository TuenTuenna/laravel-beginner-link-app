@props([
'method' => 'POST',
'action' => ''
])

<x-form method="{{ $method }}" action="{{ $action }}" >

  <div class="mb-6">
      <button type="submit" {{ $attributes }}>
          {{ $slot }}
      </button>
  </div>
</x-form>
