@extends('backend.layouts.app')

@section('title', 'Users | ' . config('app.name'))

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-success">
                                    <i class="fas fa-plus"></i> New User
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Full Names</th>
                                            <th>Profile</th>
                                            <th>Phone Number</th>
                                            <th>Email Address</th>
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $user->first_name }} {{ $user->last_name  }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset($user->profile) }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                </td>
                                                <td>
                                                    {{ $user->phone }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    @if (!$user->deleted_at)
                                                        <button type="button"
                                                            class="btn btn-danger btn-sm deleteUserBtn"
                                                            data-id="{{ $user->id }}">
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
    </section>
    <!-- /.content -->

@endsection

@push('scripts')
    @include('backend.users.scripts')
@endpush
