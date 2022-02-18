@extends('admin.layouts.main')

@section('content')
    <h4>Категории</h4>
    <div class="col-1 mb-3">
        <a href="{{route('admin.categories.create')}}" type="button" class="btn btn-block btn-primary">Создать</a>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th colspan="3" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td><a href="{{route('admin.categories.show', $category->id)}}"><i
                                            class="far fa-eye"></i></a></td>
                                <td><a href="{{route('admin.categories.edit', $category->id)}}" class="text-success"><i
                                            class="fa fa-pen"></i></a></td>
                                <td>
                                    <form action="{{route('admin.categories.delete', $category->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i class="fas fa-trash text-danger" role="button"></i>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
