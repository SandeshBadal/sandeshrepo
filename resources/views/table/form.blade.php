<h2>User Registration Form
</h2>
@if (session('sucess'))
    <h2>{{ session('sucess') }}</h2>
@endif
<button>
    <a href="{{ route('table.index') }}">Tabel</a></button>
<link rel="stylesheet" href="{{ asset('lisst/for.css') }}">
@if (isset($tables))
    <form action="{{ route('table.update', $tables->id) }}" method="POST"T>
        @method('PUT')
    @else
        <form action="{{ route('table.store') }}" method="POST">
@endif
@csrf
<form>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="name" value={{ $tables->name ?? null }}><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value={{ $tables->email ?? null }}><br><br>



    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" value={{ $tables->address ?? null }}><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="number" id="phone" name="phone" value={{ $tables->phone ?? null }}><br><br>

    <label for="gender">Gender:</label><br>
    <select id="gender" name="gender">
        <option value="male" {{ $tables ?? false ? ($tables->gender == 'male' ? 'selected' : '') : '' }}>Male
        </option>
        <option value="female"{{ $tables ?? false ? ($tables->gender == 'female' ? 'selected' : '') : '' }}>Female
        </option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>

</body>
