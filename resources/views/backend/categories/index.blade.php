@extends('backend.layouts.app')

@section('title', 'Categories | ' . config('app.name'))


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('category.create') }}" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-plus"></i> New Category
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Category</th>
                                            <th>Total Products</th>
                                            <th>Total Earnings</th>
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" data-id="{{ $category->id }}" class="viewCategoryBtn">
                                                        {{ $category->title }}
                                                    </a>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    @if (!$category->deleted_at)
                                                        <a href="#"
                                                            class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-danger btn-sm deleteCategoryBtn"
                                                            data-id="{{ $category->id }}">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        @include('backend.categories.modal')
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    @include('backend.categories.scripts')
@endpush
