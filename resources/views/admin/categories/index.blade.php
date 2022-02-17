@extends('admin.layouts.main')

@section('content')
    <h4>Категории</h4>
    <div class="col-1">
        <a href="{{route('admin.categories.create')}}" type="button" class="btn btn-block btn-primary">Создать</a>
    </div>
@endsection
