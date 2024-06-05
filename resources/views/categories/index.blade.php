<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List danh mục</title>
</head>
<body>
    <h1>List danh mục</h1>
    <a href="{{ route('categories.create') }}">Thêm mới</a>

        @if(session('msg'))
            <h2>{{ session('msg') }}</h2>
        @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Cr_at</th>
            <th>Ud_at</th>
            <th>Action</th>
        </tr>

        @foreach ($data as $item)
        
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>
    <a href="{{ route('categories.show', $item) }}">Show</a>
    <a href="{{ route('categories.edit', $item) }}">Edit</a>
    <form action="{{ route('categories.destroy', $item) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Chac chan xoa khong?')">Delete</button>
    </form>
    
                
            </td>
        </tr>
        @endforeach
    </table>
    {{ $data->links() }}
</body>
</html>