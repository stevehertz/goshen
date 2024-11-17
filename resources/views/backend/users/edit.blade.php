@extends('backend.layouts.app')

@section('title', 'New User | ' . config('app.name'))

@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="card card-primary">
                        <form id="newUserForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">
                                                First Name
                                            </label>
                                            <input type="text" name="first_name" class="form-control" id="first_name"
                                                placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">
                                                Last Name
                                            </label>
                                            <input type="text" name="last_name" class="form-control" id="last_name"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="phone">
                                                Phone Number
                                            </label>
                                            <input type="text" name="phone" class="form-control" id="phone"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="email">
                                                Email Address
                                            </label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div><!--/.card -->
                </div><!--/.col-md-6 -->
            </div><!--/.row -->
        </div><!--/.container-fluid -->
    </section><!--/.content -->
@endsection

@push('scripts')
    @include('backend.users.scripts')
@endpush
