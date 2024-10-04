<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create novel here</h1>
    <div>
        <form action="{{ route('novel.store') }}" method="POST">
            @csrf
            @method('post')
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <textarea name="sysnopsis" placeholder="Synopsis"></textarea>
            <input type="datetime-local" name="published_at">
            <button type="submit">Add Novel</button>
        </form>
    </div>
</body>
</html>