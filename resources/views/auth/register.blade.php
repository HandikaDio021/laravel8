<h2>Register</h2>

@if(session('success'))
{{ session('success') }}
@endif

<form method="POST" action="/register">
@csrf

<input type="text" name="name" placeholder="Nama"><br><br>
<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>

<button>Register</button>
</form>

<a href="/login">Login</a>