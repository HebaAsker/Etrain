@props(['messagess'])

@if ($messagess)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messagess as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
