@extends('layout.index')

@section('content')
    <table>
        <tr>
            <th>Espèce de l'animal</th>
            <th>Âge de l'animal</th>
        </tr>
        @foreach ($allAnimaux as $item)
            <tr>
                <td>{{ $item->espece }}</td>
                <td>{{ $item->age }}</td>
                <td>
                    <a href="/editAnimal/{{$item->id}}">
                        <button type="submit">Edit</button>
                    </a>
                </td>
                <td>
                    <form action="/animal/{{$item->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
