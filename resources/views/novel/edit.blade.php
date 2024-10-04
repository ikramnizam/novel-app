<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>edit here</h1>
    <div>
        <form action="{{ route('novel.update', $novel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $novel->title }}" required>
            <input type="text" name="author" value="{{ $novel->author }}" required>
            <textarea name="sysnopsis">{{ $novel->sysnopsis }}</textarea>
            <input type="datetime-local" name="published_at" value="{{ $novel->published_at }}">
            <button type="submit">Update Novel</button>
        </form>
        
    </div>
</body>
</html>