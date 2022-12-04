@extends('templates/master')

@section('title')
    {{ $message }}
@endsection

@section('content')

    <h2>{{ $message }}</h2>

    <p>Hello and welcome! This is the boilerplate splash page for my application built with <a
            href='https://github.com/susanBuck/e2framework'>e2framework</a>.</p>

@endsection
