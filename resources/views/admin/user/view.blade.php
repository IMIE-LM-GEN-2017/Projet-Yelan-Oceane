@extends('templates.admin')

@section('title', $user->name)

@section('content')
    <dl>
        <dt>Id</dt>
        <dd>{{ $user->id }}</dd>
        <dt>Lastname</dt>
        <dd>{{ $user->lastname }}</dd>
        <dt>Firstname</dt>
        <dd>{{ $user->firstname }}</dd>
        <dt>Birthdate</dt>
        <dd>{{ $user->birthdate }}</dd>
        <dt>Email address</dt>
        <dd>{{ $user->email }}</dd>
        <dt>Password</dt>
        <dd>{{ $user->password }}</dd>
        <dt>Description</dt>
        <dd>{{ $user->description }}</dd>
        <dt>Number and name of street</dt>
        <dd>{{ $user->addressname }}</dd>
        <dt>Postal code</dt>
        <dd>{{ $user->pc }}</dd>
        <dt>City</dt>
        <dd>{{ $user->city }}</dd>
        <dt>Department</dt>
        <dd>{{ $user->department }}</dd>
        <dt>Region</dt>
        <dd> {{ $user->region }}</dd>
        <dt>Date of acccount's creation</dt>
        <dd>{{ $user->created_at }}</dd>
        <dt>Last modification</dt>
        <dd>{{ $user->updated_at }}</dd>
    </dl>
@endsection