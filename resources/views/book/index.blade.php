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
  <table  class="table" border="1">

      <tr>
         <th>#          </th>
         <th>Title      </th>
         <th>Description</th>
         <th>edit      </th>
         <th>show     </th>
         <th>delete     </th>
      </tr>

      @foreach($books as $book)
<tr>
    <td>
        <td>{{$loop->iteration}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>


            <td>
        <a href="{{route('book.show',$book )}}">show</a>
            </td>

            <td>
        <a href="{{route('book.edit',$book )}}">Edit</a>
            </td>



            <td>
              <form action="{{route('book.destroy',$book)}}" method="post">
                  @csrf
                  @method('delete')
            <input type="submit" value="delete">
              </form>
            </td>


</tr>
      @endforeach


  </table>
</body>
</html>
