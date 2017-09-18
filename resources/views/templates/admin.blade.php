<html>
<head>
    <title>SOSgalR - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.css"/>

    <!-- Add the CSRF token in a meta tag to have it easily in JS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<div class="container">


    @component('element.admin-menu')
    @endcomponent

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(Session::has('message'))
        <div class="message">
            <div class="message-header">Information</div>
            <div class="message-body">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <h1>@yield('title')</h1>

    <!-- Erreurs de validation -->
    @if($errors->any())
        <div class="message is-danger">
            <div class="message-header">Erreur de formulaire</div>
            <div class="message-body">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @yield('content')
</div>
</body>
</html>