@extends('layouts.app')
@section('title', 'Home')
    
@section('content')
@dump($dresses)

@foreach ($dresses as $key => $value)
    @php
        echo ($value);
    @endphp
@endforeach


@endsection