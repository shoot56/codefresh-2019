<span class="bg-clip-text text-transparent bg-gradient-to-r {{ $from ? 'from-' . $from : 'from-green-light' }} {{ $to ? 'to-' . $to : 'to-blue' }}">
    {!! $slot ?? $text !!}
</span>
