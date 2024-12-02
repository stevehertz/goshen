@extends('backend.layouts.app')

@section('title', 'Order # ' . $data->id . ' | ' . config('app.name'))

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    {{-- <i class="fas fa-globe"></i> AdminLTE, Inc. --}}
                                    <small class="float-right">Date: {{ $data->order_date }}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Customer Details
                                <address>
                                    <strong>{{ $data->user->first_name }} {{ $data->user->last_name }}</strong><br>
                                    {{ $data->user->address }} {{ $data->user->apartment }}<br>
                                    {{ $data->user->country }}<br>
                                    Phone: {{ $data->user->phone }}<br>
                                    Email: {{ $data->user->email }}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                &nbsp;
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>&nbsp;</b><br>
                                <br>
                                <b>Order ID:</b> {{ $data->id }}<br>
                                <b>Status:</b> {{ \OrderStatus::getName($data->status) }}
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Product</th>
                                            <th>Description</th>
                                            <th>Subtotal</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->items as $item)
                                            <tr>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->product->title }}</td>
                                                <td>{{ Str::limit($item->product->description, 100, '...') }}</td>
                                                <td>Kshs.{{ $item->price }}</td>
                                                <td>Kshs.{{ $item->total_price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                &nbsp;
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>Kshs.{{ $data->total_amount }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>Kshs.{{ $data->total_amount }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        {{-- <div class="row no-print">
                            <div class="col-12">
                                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                        class="fas fa-print"></i> Print</a>
                                <button type="button" class="btn btn-success float-right"><i
                                        class="far fa-credit-card"></i> Submit
                                    Payment
                                </button>
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Generate PDF
                                </button>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
