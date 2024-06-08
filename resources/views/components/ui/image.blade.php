@props(['src', 'alt'])

<img {!! $attributes->merge(['class' => 'mx-auto w-auto object-center object-fit']) !!} src="{{ $src }}" alt="{{ $alt }}" />
