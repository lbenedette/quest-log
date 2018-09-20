@extends('base')

@section('content')
    <div class="row">
        @foreach($tasks as $task)
            <div class="col-sm-6 col-md-4">
                @include('tasks.task')
            </div>
        @endforeach
    </div>
@endsection