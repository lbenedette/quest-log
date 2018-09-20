@extends('base')

@section('content')
    <h2>{{ $task->title }}</h2>

    {{ $task->body }}
@endsection