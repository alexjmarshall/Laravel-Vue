@extends('layout')
@section('content')
    <h1 class="title">Edit Project</h1>
    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf

        <div>
            <label class="label" for="title">Title</label>
            <div>
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>
        <div>
            <label class="label" for="description">Description</label>
            <div>
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>
        <div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <div>
            <button type="submit" class="btn btn-secondary">Delete</button>
        </div>
    </form>
    
@endsection