@extends('backend.layouts.app')

@section('title', $data->title . ' | ' . config('app.name'))

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-12">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset($data->image) }}"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $data->title }}</h3>

                            <p class="text-muted text-center">
                                {{ $data->description }}
                            </p>
                            <a href="javascript:void(0)" data-id="{{ $data->id }}"
                                class="btn btn-primary btn-block addExtraImagesBtn">
                                <b>Add Extra Images</b>
                            </a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div><!-- /.col -->
                <div class="col-md-9 col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Slug</th>
                                            <td>{{ $data->slug }}</td>
                                        </tr>
                                        <tr>
                                            <th>SKU</th>
                                            <td>{{ $data->sku }}</td>
                                        </tr>
                                        <tr>
                                            <th>Barcode</th>
                                            <td>{{ $data->barcode }}</td>
                                        </tr>
                                        <tr>
                                            <th>Quantity</th>
                                            <td>{{ $data->quantity }}</td>
                                        </tr>
                                        <tr>
                                            <th>In Stock</th>
                                            <td>{{ \InStock::getName($data->in_stock) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $data->price }}</td>
                                        </tr>
                                        <tr>
                                            <th>Minimum Purchase</th>
                                            <td>{{ $data->minimum_purchase }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!--/.row -->

            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        @php
                                            $extraImages = json_decode($data->extra_images, true) ?: [];
                                        @endphp
                                        @foreach ($extraImages as $image)
                                            <div class="col-md-3 col-12">
                                                <img class="img-fluid mb-3" src="{{ asset($image) }}" alt="Photo">
                                            </div><!-- /.col -->
                                        @endforeach
                                    </div>
                                    <!-- /.row -->
                                </div><!-- /.col -->
                            </div><!--/.row -->
                        </div>
                    </div>
                </div><!--/.col -->
            </div><!--/.row -->
        </div><!-- /.container-fluid -->
        @include('backend.products.modal')
    </section>
    <!-- /.content -->

@endsection

@push('scripts')
    @include('backend.products.scripts')
@endpush
