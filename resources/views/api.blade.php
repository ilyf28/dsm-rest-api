@extends('layout')

@section('content')
<h1>REST API</h1>
<h3>Message: {{ $message }}</h3>
<h4>API Connection</h4>
<p>
    <ul>
        <li>[POST] /ApiConnection/Login</li>
    </ul>
    <form method="POST" action="{{ url('/api/ApiConnection/Login') }}">
        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
        <span>Logs into the API</span>
        <button type="submit">Login</button>
    </form>
</p>
<br />
<p>
    <ul>
        <li>[POST] /ApiConnection/Logout</li>
    </ul>
    <form method="POST" action="{{ url('/api/ApiConnection/Logout') }}">
        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
        <span>Logs off the API</span>
        <button type="submit">Logout</button>
    </form>
</p>
<br />
<p>
    <ul>
        <li>[GET] /ApiConnection/ApiConnection</li>
    </ul>
    <form method="GET" action="{{ url('/api/ApiConnection/ApiConnection') }}">
        <span>Gets the singleton ApiConnection object</span>
        <button type="submit">ApiConnection</button>
    </form>
</p>
@endsection