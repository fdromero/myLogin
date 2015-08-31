@extends("layout")
@section("contenido")
    {{--dice si estoy logueada:true--}}
    {{--if true: logout--}}
    {{--else login--}}
{{--{{dd(Auth::check())}}--}}

    Hola {{Auth::user()->name}} <br>
    Esta va a ser mi home

@endsection

