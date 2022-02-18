@extends('admin.layouts.main')

@section('content')
    <h4>Создание тэга</h4>

    <form action="{{route('admin.tag.update', $tag->id)}}" method="POST" class="w-25">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Название</label>
            <input type="text" name="title" value="{{$tag->title}}" class="form-control" placeholder="Название тэга">
            @error('title')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>

@endsection
