@extends('layouts.admin');

@section('content')

    <h2>{{$project->title}}</h2>
    <p><strong>Descrizione:</strong> {{$project->content}}</p>
    <p><strong>Data inizio:</strong> {{$project->start_date}}</p>
    <p><strong>Data fine:</strong> {{$project->end_date}}</p>
    <strong>Tipologia: </strong>
    <span style="background-color: {{$project->type?->color}}; padding: 5px;">{{$project->type?->name}}</span>

    <hr>
    
    <div>
        <a class="btn btn-primary"  href="{{route('admin.projects.index')}}">Indietro</a>
    </div>

@endsection