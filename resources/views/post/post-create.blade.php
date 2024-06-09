@extends('layout.plantilla2')

@section('contenido')
Formulario para post.</br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, officia nesciunt? Animi, odio ut sit tempore laudantium minus fugit libero hic ullam? Laboriosam alias blanditiis amet rem dolorum! Fuga, adipisci!
@endsection

@push('js')
    <script>
        alert("Mensaje 1")
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="style.css">
@endpush

@push('js')
    <script>
        log.console("Mensaje 1")
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="style2.css">
@endpush