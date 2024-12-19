<!-- resources/views/form_data.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <h1>Stored Form Data</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
        @foreach($formData as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->created_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
