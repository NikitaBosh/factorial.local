<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>

    <!-- Вывод результата -->
    <p>
        <b>Результат</b>: {{ $factorial ?? '' }}
    </p>
    <!-- Форма для передачи данных -->
    <form action="{{ route('factorial') }}" method="post">
        @csrf
        <label for="number">Factorial</label>
        <input type="text" name="number" id="number" value="{{ $number ?? old('number') }}">
        <button type="submit">Вычислить</button>
    </form>
    <!-- Ошибки -->
</body>
</html>
