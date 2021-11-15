@props(['label' => 'Button'])
<button {{ $attributes->merge(["class" => "px-6 py-2 flex items-center justify-center"]) }}>
    {{ $slot }}
</button>