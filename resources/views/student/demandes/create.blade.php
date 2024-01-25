@extends('layouts.mainLayout')

@section('content')


<form action="{{ route('demandes.store') }}" method="post" class="form-container">
    @csrf
    <div class="form-group">
        <label for="contenu">Contenu:</label>
        <textarea name="contenu" id="contenu" class="textarea" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="type_demande">Type de Demande:</label>
        <select name="type_demande" id="type_demande" class="select">
            <option value="rendez-vous">Rendez-vous</option>
            <option value="Justifier une absence">Justifier une absence</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    
    <button type="submit" class="button">Créer Demande</button>
</form>

@if(session('success'))
<div class="text-success">
    {{ session('success') }}
</div>
@endif

@endsection
