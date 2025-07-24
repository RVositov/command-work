<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Онлайн-библиотека</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Онлайн-библиотека</h1>

        <form method="GET" action="/library" class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Категория:</label>
            <select name="category" id="category" onchange="this.form.submit()" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                <option value="">Все категории</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}" {{ $cat === $category ? 'selected' : '' }}>{{ $cat }}</option>
                @endforeach
            </select>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($books as $book)
                <div class="bg-white shadow-md rounded p-4">
                    @if($book->cover_image)
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Обложка" class="w-full h-64 object-cover mb-2 rounded">
                    @endif
                    <h2 class="text-xl font-semibold"><a href="/library/book/{{ $book->id }}">{{ $book->title }}</a></h2>
                    <p class="text-gray-600">Автор: {{ $book->author }}</p>
                    <p class="text-sm text-gray-500">Категория: {{ $book->category }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>