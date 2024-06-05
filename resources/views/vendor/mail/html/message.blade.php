@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset
<p>
    Cordialmente,<br>
    Seus amigos da  {{ config('app.name') }}.
</p>
{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ config('app.name') }}. @lang('Todos os direitos reservados.') {{ date('Y') }}
@endcomponent
@endslot
@endcomponent
