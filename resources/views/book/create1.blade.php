<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Title</label><br>
    <input type="text" name="title" id="">
    <label for="autor"></label><br>
    <input type="text" name="author" id=""><br>
    <label for="">image</label>
    <input type="file" name="image" id=""><br>
    <label for="">file</label>
    <input type="file" name="src" id=""><br>
    <label for=""Category></label><br>
    <select name="category_id" id="">
        @foreach($categories as $category)
            <option value="{{$category->id}}"></option>
        @endforeach
    </select>
    <input type="submit" value="save">
</form>
</body>
</html>
