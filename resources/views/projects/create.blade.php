@extends('layout')
@section('content')
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        @csrf
        
        <div><input type="text" name="title" placeholder="Project title" value={{old('title')}}></div>
        <div><textarea name="description" placeholder="Project description" value={{old('description')}}></textarea></div>
        <div><button type="submit" class="btn btn-primary">Create Project</button></div>
        
        @include ('errors')
    </form>
@endsection
