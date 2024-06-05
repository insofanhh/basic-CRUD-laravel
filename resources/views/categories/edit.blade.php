<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cap nhat danh muc: {{ $category->name }}</title>
</head>
<body>
    <h1>Cap nhat danh muc: {{ $category->name }}</h1>

    @if(session('msg'))
            <h2>{{ session('msg') }}</h2>
        @endif

    <form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $category->name }}">

    <button type="submit">Save</button>
    </form>
</body>
</html>