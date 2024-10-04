<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>show novel</h1>
    <div>
        <h1>{{ $novel->title }}</h1>
        <p>{{ $novel->author }}</p>
        <p>{{ $novel->sysnopsis }}</p>
        <a href="{{ route('novel.edit',$novel->id) }}">Edit</a>
        <form action="{{ route('novel.destroy',$novel->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
</body>

</html>
