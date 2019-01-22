@extends('layout')
@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">{{  $project->description}}</div>
    <p><a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a></p>
@endsection