@extends('template')
@section('content')
    <ol class="list-group list-group-numbered">
        @forelse($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{$task['title']}}</div>
                {{$task['description']}}
            </div>
            <a href="{{route('done', ['id'=>$task['id']])}}" class="badge bg-primary roundel-pill">Done</a>
        </li>
        @empty
            <h1>No Tasks</h1>
            @endforelse
    </ol>
@endsection
