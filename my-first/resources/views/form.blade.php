<!-- resources/views/create_form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Form</title>
</head>
<body>
    <h1>Create Form</h1>
    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <button type="submit">Submit</button>
    </form>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
