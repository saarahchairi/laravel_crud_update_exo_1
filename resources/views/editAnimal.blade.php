@extends('layout.index')

@section('content')
    <form action="/editAnimal/{{ $id_show->id }}/update" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <th>Espèce de l'animal</th>
                <th>Âge de l'animal</th>
            </tr>
            <tr>
                <td><input type="text" name="espece" value="{{ $id_show->espece }}"></td>
                <td><input type="number" name="age" value="{{ $id_show->age }}"></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
@endsection
