@extends('templates.default')

@section('title', 'La communauté')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>pseudo</td>
            <td>date de naissance</td>
            <td>descrition</td>
            <td>region</td>
            <td>departement</td>
            <td>ville</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <!-- <a href=""> -->
                      <!--  Afficher |-->
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                </td>
                <td>{{$user->id}}</td>
                <td>{{$user->pseudo}}</td>
                <td>{{$user->birthdate}}</td>
                <td>{{$user->description}}</td>
                <td>{{$user->region}}</td>
                <td>{{$user->department}}</td>
                <td>{{$user->city}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection