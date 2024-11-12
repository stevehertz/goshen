@extends('backend.layouts.app')

@section('title', 'Products | ' . config('app.name'))


@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-plus"></i> New Product
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Product</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>In Stock</th>
                                            <th>QTY</th>
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" data-id="{{ $product->id }}"
                                                        class="viewProductBtn">
                                                        {{ $product->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ Str::limit($product->description, 100, '...') }}
                                                </td>
                                                <td>
                                                    @if (!$product->categories->isEmpty())
                                                        @foreach ($product->categories as $category)
                                                            <span>
                                                                {{ $category->title }}
                                                            </span>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="in_stock" data-bootstrap-switch
                                                        data-off-color="danger" data-on-color="success"
                                                        {{ $product->in_stock ? 'checked' : '' }}
                                                        data-product-id="{{ $product->id }}">
                                                </td>
                                                <td>
                                                    {{ $product->quantity }}
                                                </td>
                                                <td>
                                                    @if (!$product->deleted_at)
                                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm deleteProductBtn"
                                                            data-id="{{ $product->id }}">
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
    @include('backend.products.scripts')
@endpush
