@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => 'https://www.facebook.com/buenpastorcc'])
            <img src="https://i.ibb.co/bdNhqRF/LOGO-PEQUE-O002.png" alt="Colegio de Ciencias el Buen Pastor">
        @endcomponent
    @endslot
    {{-- Body --}}
    # Solicitud para Cambiar de contraseña

    Tengo un Buen día, {{ $user->nombres }} {{ $user->apellido_paterno }} {{ $user->apellido_materno }} con el correo {{ $user->email }} y cuyo DNI es  {{ $user->dni }}, ha solicitado una petición de cambio de contraseña, en este caso presione en el boton para cambiar su contraseña.
@component('mail::button', ['url' => 'http://127.0.0.1:8000/recuperar?token='.$token, 'color' => 'primary'])
Recuperar contraseña
@endcomponent

    {{-- Footer --}}
    @slot('footer')
    
        @component('mail::footer')
        Gracias, Soporte Tecnico
            © {{ date('Y') }} Colegio de Ciencias el Buen Pastor. Todos los derechos reservados.
        @endcomponent
    @endslot

@endcomponent