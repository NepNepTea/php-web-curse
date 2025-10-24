@extends('template')

@section('title')
    <title>Новый продукт</title>
@endsection

@section('content')
    <link rel="stylesheet" href="css/styleLogin.css">

    <form method="POST" action="/catalog-add">
        @csrf
        <h1>Добавить товар</h1>
        <label for="full-name">Название:</label>
        <input type="text" id="full-name" name="full-name" class="inputLine" required>

        <label for="shortName">Короткое название (для фото):</label>
        <input type="text" id="shortName" name="shortName" class="inputLine" required>

        <label for="price">Цена:</label>
        <input type="number" id="price" name="price" class="inputLine" required>

        <label for="type-select">Тип продукта:</label>
        <select name="type" id="type-select">
            <option value="filter">Фильтр</option>
            <option value="light">Освещение</option>
            <option value="fish-tank">Аквариум</option>
            <option value="light">Освещение</option>
            <option value="wood">Дерево</option>
            <option value="stones">Камни</option>
            <option value="Hideout">Укрытие</option>
        </select>

        <label for="brand-select">Бренд:</label>
        <select name="brand" id="brand-select">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>

        <label for="status-select">Статус:</label>
        <select name="status" id="status-select">
            <option value="В наличие">В наличие</option>
            <option value="Отсутствует">Отсутствует</option>
        </select>

        <label for="photo">Фото:</label>
        <input type="file" id="photo" name="photo">

        <input type="submit" value="Добавить" class="btn">
    </form>
@endsection
