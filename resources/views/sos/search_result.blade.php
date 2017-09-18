@extends('templates.default')

@section('title', 'Résultat de la recherche')
@section('content')
    <h2>Liste des personnes les plus proches</h2>
        <pre>{{var_dump($search)}}</pre>
    <h3>Par région : </h3>
    @if(count($results) === 0)
        <div>Aucun résultat</div>
    @else
        <table class="table">
            <thead>
            <tr>
                <td>Prénom</td>
                <td>Date de naissance</td>
                <td>Ville</td>
                <td>Départment</td>
                <td>Région</td>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $user)
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->birthdate}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->department}}</td>
                    <td>{{$user->region}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@endsection