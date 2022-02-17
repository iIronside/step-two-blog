@extends('admin.layouts.main')

@section('content')
    <h4>Создание категории</h4>

    <form action="{{route('admin.categories.store')}}" method="POST" class="w-25">
        @csrf
        <div class="form-group">
            <label>Название</label>
            <input type="text" name="title" class="form-control" placeholder="Название категории">
            @error('title')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>

@endsection
