@extends('layout.index')

@section('content')
    <form action="newAnimal/create" method="POST">
        @csrf
        <input type="text" name="espece" placeholder="L'espèce de l'animal">
        <input type="number" name="age" placeholder="L'âge de l'animal">
        <input type="submit">
    </form>
@endsection
