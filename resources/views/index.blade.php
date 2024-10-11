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
                    <td>
                        @if($task->is_completed == 0)
                        <a href="{{ route('done', $task->id) }}" class="btn btn-success">Mark as Completed</a>
                        @endif
                    </td>
                    <td><a href="{{ route('edit', $task->id) }}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('delete', $task->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type='submit' onclick="Are you sure you want to delete this task?" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
             @endforeach
        </table>
    </div>
@endsection