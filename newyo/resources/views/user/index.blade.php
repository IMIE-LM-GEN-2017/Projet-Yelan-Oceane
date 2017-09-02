@extends('templates.default')

@section('title', 'Liste des utilisateurs')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Action</th>
            <th>Id</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Birthdate</th>
            <th>Email</th>
            <th>password</th>
            <th>Description</th>
            <th>No and name of street</th>
            <th>Postal code</th>
            <th>City</th>
            <th>Department</th>
            <th>Region</th>
            <th>Date of account's creation</th>
            <th>Last modification</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <div class="fiels has-addons">
                        <p class="control">
                            <a href="{{ route('ViewUser', ['id'=>$user->id]) }}" class="button is-small is-primary">Show</a>
                        </p>
                    </div>
                </td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->birthdate }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->description }}</td>
                <td>{{ $user->addressname }}</td>
                <td>{{ $user->pc }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->department }}</td>
                <td>{{ $user->region }}</td>
                <td>{{ $user->create_at }}</td>
                <td>{{ $user->update_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
