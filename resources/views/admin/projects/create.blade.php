@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Inserisci un nuovo progetto</h1>


        <form action="{{ route('admin.projects.store') }}" method="POST">

        <button class="btn btn-success mb-3" type="submit">Salva</button>


            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Descrizione</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Data di inizio</label>
                <input type="text" class="form-control" id="start_date" name="start_date">
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Data di fine</label>
                <input type="text" class="form-control" id="end_date" name="end_date">
            </div>

            <div>
                <label for="type" class="form-label">Tipologia</label>
                <select class="form-select" id="type" name="type_id">
                    <option value="">Seleziona</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
            </div>




        </form>
    </div>
@endsection
