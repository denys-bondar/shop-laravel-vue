@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit category {{ $category->title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Category</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form class="col-5" action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="{{ $category->title }}" placeholder="name category">
                </div>

                <div class="form-group">
                    <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" placeholder="slug category">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edit category" />
                </div>
            </form>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
