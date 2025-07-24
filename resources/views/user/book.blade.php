<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $book->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded p-6">
        <a href="/library" class="text-blue-500 hover:underline mb-4 inline-block">← Назад</a>

        @if($book->cover_image)
            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Обложка" class="w-full h-96 object-cover mb-4 rounded">
        @endif

        <h1 class="text-3xl font-bold">{{ $book->title }}</h1>
        <p class="text-lg text-gray-700">Автор: {{ $book->author }}</p>
        <p class="mt-4 text-gray-600">{{ $book->description }}</p>
    </div>
</body>
</html>