@extends('backend.layouts.app')

@section('title', 'Roles | ' . config('app.name'))

@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="card card-primary">
                        <form id="newRoleForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">
                                                Role Name
                                            </label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Role Name" required>
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
    @include('backend.roles.scripts')
@endpush
