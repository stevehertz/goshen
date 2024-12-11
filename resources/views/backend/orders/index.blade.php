@extends('backend.layouts.app')

@section('title', 'Orders | ' . config('app.name'))

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Order #</th>
                                            <th>Customer</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <a href="{{ route('orders.view', $order->id) }}">
                                                        {{ $order->id }}
                                                    </a>
                                                </td>

                                                <td>
                                                    {{ $order->user->first_name }} {{ $order->user->last_name }}
                                                </td>

                                                <td>{{ $order->total_amount }}</td>
                                                <td>{{ \OrderStatus::getName($order->status) }}</td>
                                                <td></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">No orders found!</td>
                                            </tr>
                                        @endforelse
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
    </section>
    <!-- /.content -->

@endsection
