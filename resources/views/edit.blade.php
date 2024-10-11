@extends('layouts.app')

@section('title', 'Update Tasks')

@section('content')

<div class="container">
        <form action="{{ route('updateTask',$tasks->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label><br>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter task title" value="{{$tasks->title}}" required>

            </div>

            <div class="form-group">
                <label for="description">Description</label><br>
                <textarea name="description" id="description" cols="30" rows="10"  required>{{$tasks->description}}</textarea>

            </div>

            <div class="form-group">
                <label for="due_date">Due Date</label><br>
                <input type="date" class="form-control" id="due_date" name="due_date" required>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
@endsection
