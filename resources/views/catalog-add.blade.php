@extends('template')

@section('head')
    <title>Новый продукт</title>
    <link rel="stylesheet" href="css/styleLogin.css">
@endsection

@section('content')
    <form method="POST" action="{{route('catalog-add')}}">
        @csrf
        <h1>Добавить товар</h1>
        <label for="full_name">Название:</label>
        <input type="text" id="full_name" name="full_name" class="inputLine" required>

        <label for="shortName">Короткое название (для фото):</label>
        <input type="text" id="shortName" name="shortName" class="inputLine" required>

        <label for="price">Цена:</label>
        <input type="number" id="price" name="price" class="inputLine" required>

        <label for="max_value">Максимальный объем аквариума:</label>
        <input type="number" id="max_value" name="max_value" class="inputLine" required>

        <label for="type-select">Тип продукта:</label>
        <select name="type" id="type-select">
            <option value="filter">Фильтр</option>
            <option value="light">Освещение</option>
            <option value="fish-tank">Аквариум</option>
            <option value="wood">Дерево</option>
            <option value="stones">Камни</option>
            <option value="Hideout">Укрытие</option>
            <option value="soil">Грунт</option>
        </select>

        <label for="brand-select">Бренд:</label>
        <select name="brand" id="brand-select">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>

        <label for="status">Количество:</label>
        <input type="number" id="status" name="status" class="inputLine">

        <label for="photo">Фото:</label>
        <input type="file" id="photo" name="photo">

        <input type="submit" value="Добавить" class="btn">
    </form>
@endsection
