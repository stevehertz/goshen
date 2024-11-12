@extends('backend.layouts.app')

@section('title', 'Products | ' . config('app.name'))

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--  column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <!-- form start -->
                        <form
                            @isset($data) id="updateProductForm" @else id="newProductForm" @endisset>
                            <div class="card-body">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                @isset($data)
                                    @method('PUT')
                                @endisset
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">
                                                Name
                                            </label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="Product Title"
                                                value="@isset($data) {{ $data->title }} @endisset">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="sku">
                                                SKU
                                            </label>
                                            <input type="text" name="sku" class="form-control" id="sku"
                                                placeholder="SKU"
                                                value="@isset($data) {{ $data->sku }} @endisset">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="barcode">
                                                Barcode
                                            </label>
                                            <input type="text" name="barcode" class="form-control" id="barcode"
                                                placeholder="0123-45678"
                                                value="@isset($data) {{ $data->barcode }} @endisset">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">{{ __('form.description') }}</label>
                                            <textarea name="description" placeholder="Product Description" class="form-control" rows="3"
                                                placeholder="{{ __('form.description') }}">
@isset($data)
{{ $data->description }}
@endisset
</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label for="image">
                                                Product Image
                                            </label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input"
                                                        id="image">
                                                    <label class="custom-file-label"
                                                        for="image">{{ __('form.choose_file') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="quantity">
                                                Quantity
                                            </label>
                                            <input type="number" name="quantity" class="form-control" id="quantity"
                                                placeholder="Quantity"
                                                value="@isset($data) {{ $data->quantity }} @endisset">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="in_stock">
                                                In stock
                                            </label>
                                            <br>
                                            <input type="hidden" name="in_stock" value="0">
                                            <input type="checkbox" name="in_stock" value="1" checked
                                                data-bootstrap-switch data-off-color="danger" data-on-color="success">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="status">
                                                {{ __('form.status') }}
                                            </label>
                                            <select name="status" class="form-control select2" style="width: 100%;">
                                                <option selected="selected" disabled="disabled">{{ __('form.status') }}
                                                </option>
                                                @foreach (Status::toArray() as $key => $value)
                                                    <option value="{{ $key }}"
                                                        @isset($data)
                                                        @if ($data->status == $key)
                                                            selected="selected"
                                                        @endif
                                                    @endisset>
                                                        {{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="price">
                                                Price
                                            </label>
                                            <input type="number" name="price" class="form-control" id="price"
                                                placeholder="Price"
                                                value="@isset($data) {{ $data->price }} @endisset">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-success">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    @include('backend.products.scripts')
@endpush
