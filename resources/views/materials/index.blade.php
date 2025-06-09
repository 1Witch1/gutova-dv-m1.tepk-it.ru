@extends('layouts.layout')

@section('title', 'Список материалов')

@section('content')
    <div>
        <a class="btn" href="{{ route('materials.create') }}">Добавить материал</a>
        <div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="cards">
                @foreach($materials as $material)
                    <div class="card">
                        <div class="d-flex justify-content-between ">
                            <div>
                                <div class="bigF">{{ $material->materialType->name }} | {{ $material->name }}</div>
                                <div>Минимальное количество: {{ $material->min_quantity }}</div>
                                <div>Количество на складе: {{ $material->quantity_stock }}</div>
                                <div>Цена:  {{ $material->price }} {{ $material->unit->name }} | {{ $material->quantity_package }}</div>
                            </div>
                            <div class="bigF"> {{ $sumMaterialProducts[$material->id] }}</div>
                        </div>
                        <a  class="btn marg" href="{{ route('materials.edit', $material->id) }}">Редактировать</a>
                        <a  class="btn" href="{{ route('materials.show', $material->id) }}">Просмотр</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
