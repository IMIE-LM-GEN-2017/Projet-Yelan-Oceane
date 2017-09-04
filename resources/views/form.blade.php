@extends('templates.default')

@section('content')
    {!! Form::open(['url' => 'users']) !!}
    <h2>Identity</h2>
    <p>
        {!! Form::label('firstname', 'First name : ') !!}
        {!! Form::text('firstname') !!}
        <br/>
        {!! Form::label('lastname', 'Last name : ') !!}
        {!! Form::text('lastname') !!}
        <br/>
        {!! Form::label('birthdate', 'Birthdate : ') !!}
        {!! Form::text('birthdate') !!}
    </p>
    <h2>Your account</h2>
    <p>
        {!! Form::label('email', 'email : ') !!}
        {!! Form::text('email') !!}
        <br/>
        {!! Form::label('password', 'password : ') !!}
        {!! Form::text('password') !!}
        <br/>
        {!! Form::label('passwordverif', 'password verify : ') !!}
        {!! Form::text('passwordverif') !!}
    </p>
    <h2>About you</h2>
    <p>
        {!! Form::label('description', 'Description about you : ') !!}
        {!! Form::text('description') !!}
    </p>
    <h2>Address</h2>
    <p>
        {!! Form::label('addressname', 'AddressNumber and name of street : ') !!}
        {!! Form::text('addressname') !!}
        <br/>
        {!! Form::label('pc', 'Postal code : ') !!}
        {!! Form::text('pc') !!}
        <br/>
            {!! Form::label('city', 'City : ') !!}
            {!! Form::text('city') !!}
            <br/>
        {!! Form::label('department', 'Department : ') !!}
        {!! Form::text('department') !!}
        <br/>
        {!! Form::label('region', 'Region : ') !!}
        {!! Form::text('region') !!}
    </p>

    {!! Form::submit('Submit') !!}

    {!! Form::close() !!}
@endsection