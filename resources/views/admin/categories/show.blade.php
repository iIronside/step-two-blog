@extends('admin.layouts.main')

@section('content')
    <h4>Категория</h4>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$category->id}}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{$category->title}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
