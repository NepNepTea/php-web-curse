@extends('template')

@section('title')
    <title>Бренды админ</title>
@endsection

@section('content')
    <link rel="stylesheet" href="css/styleTech.css">

    <div class="catalog">
        <div class="category">
            <h1 class="catalogHeader">БРЕНДЫ</h1>

            @foreach ($brands as $brand)
                            <div class="card">
                        <div><img src="images/brands/{{ $brand->name }}.svg" alt="{{ $brand->name }}" width="200" class="product"></div>
                        <div class="secondBlock">
                            <div class="information">
                                <p>Название: {{ $brand->name }} Л.</p>
                            </div>
                        </div>
                        <div class="thirdBlock">
                            <div>
                                <form method="POST" action="{{route('delete-brand', $brand->id)}}">
                                    @csrf @method('DELETE')
                                    <input type="submit" value="Удалить">
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
