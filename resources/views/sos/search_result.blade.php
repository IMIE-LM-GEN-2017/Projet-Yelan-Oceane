@extends('templates.default')

@section('title', 'Résultat de la recherche')
@section('content')
    <h2>Liste des personnes les plus proches</h2>

    <h3>Par région : (<strong>{{$search['region']}}</strong>)</h3>
    @if(count($region) === 0)
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
            @foreach($region as $user)
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
    <h3>Par département : (<strong>{{$search['department']}}</strong>)</h3>
    @if(count($department) === 0)
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
            @foreach($department as $user)
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
    <h3>Par code postal : (<strong>{{$search['pc']}}</strong>)</h3>
    @if(count($pc) === 0)
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
            @foreach($pc as $user)
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
    <h3>Par ville : (<strong>{{$search['city']}}</strong>)</h3>
    @if(count($city) === 0)
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
            @foreach($city as $user)
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