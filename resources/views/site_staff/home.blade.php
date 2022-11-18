<h1>{{ Auth::user()->role }}</h1>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <input type="submit" value="Logout">
</form>
