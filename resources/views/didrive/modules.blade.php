@extends('didrive.app.app')


@section('menu_modules')
    @foreach ($module as $name => $dops)

        {{-- <pre> --}}
        {{-- {{ print_r($name)}} --}}
        {{-- {{ print_r($dops)}} --}}
        {{-- </pre> --}}

        <a href="{{ route('modules.index', ['module_name' => $name]) }}">{{ $dops['name'] }}</a>
        <br />

    @endforeach
@endsection



@section('content')

    {{-- {{ $now_module }} --}}
    {{-- <item-block></item-block> --}}

    <router-view></router-view>

@endsection


