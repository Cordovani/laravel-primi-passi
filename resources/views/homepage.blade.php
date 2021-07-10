
<header>
    <a href="{{ route('homepage') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('private') }}">Private</a>
</header>

<h1>Home, sweet Home</h1>
<h1>Hello, world!</h1>

<ul>
    <li>{{$name}}</li>
    <li>{{$surname}}</li>
    <li>made with love with {{$awesome}}</li>
</ul>