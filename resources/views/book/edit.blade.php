{{$book}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/png" href="{{ asset('li.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

</body><div class="container mt-5">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Book</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('book.update',$book) }}" method="POST" >
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title" class="form-label">📚 Title</label>
                    <input type="text" value={{$book->title}} id="title" class="form-control" placeholder="book title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">📝 Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter description...">{{$book->description}}</textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    💾 Save
                </button>
            </form>
        </div>
    </div>
</div>
</html>
