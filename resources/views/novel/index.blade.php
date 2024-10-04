<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($novels as $novel)
    <h2>title{{ $novel->title }}</h2>
    <p>author{{ $novel->author }}</p>
    <a href="{{ route('novel.show',$novel->id) }}">View Details</a>
    <form action="{{ route('novel.destroy', $novel->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
<a href="{{ route('novel.create') }}">Add New Novel</a>
</body>
</html>