<h2>Login</h2>

@if(session('error'))
{{ session('error') }}
@endif

<form action="{{ route('login') }}" method="POST">
@csrf

<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>

<button>Login</button>
</form>

<a href="/register">Register</a>