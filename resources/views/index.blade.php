@extends('layouts.app')

@section('title', 'Create Task')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Due Date</th>
            <th colspan="2">Action</th>
             @foreach($tasks as $task)
                <tr>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>@if($task->is_completed == 1 )
                    <span class="badge badge-success">Completed</span>
                    @else
                    <span class="badge badge-warning">Pending</span>
                    @endif
                    </td>
                    <td>{{ $task->due_date }}</td>
                </tr>
             @endforeach
        </table>
    </div>
@endsection