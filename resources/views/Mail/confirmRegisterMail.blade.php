@component('mail::message')
    <h1 style="display: flex; justify-content: center;margin-bottom: 20px;">Confirme sua conta</h1>
    <h3>{{ $title }}</h3>
    <h3>Nome: {{ $name }}</h3>
    <h3>Email: {{ $email }}</h3>
    <br>
    <br>
    <h3 style='color:#000;display: flex; justify-content: center;'>Codigo de confirmação</h3>
    @component('mail::button', ['url' => '', 'color' => 'success'])
        {{ $verification_code }}
    @endcomponent
@endcomponent
