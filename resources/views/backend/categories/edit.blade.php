@extends('backend.layouts.app')

@section('title', 'Categories | ' . config('app.name'))

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
                            @isset($data) id="updateCategoryForm" @else id="newCategoryForm" @endisset>
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
                                                {{ __('form.title') }}
                                            </label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="{{ __('form.title') }}"
                                                value="@isset($data) {{ $data->title }} @endisset">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">{{ __('form.attachment') }}</label>
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
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">{{ __('form.description') }}</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="{{ __('form.description') }}">@isset($data) {{ $data->description }} @endisset </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>{{ __('form.status') }}</label>
                                            <select name="status" class="form-control select2" style="width: 100%;">
                                                <option selected="selected" disabled="disabled">
                                                    {{ __('form.status') }}
                                                </option>
                                                @foreach (Status::toArray() as $key => $value)
                                                    <option value="{{ $key }}" @isset($data) @if ($data->status == $key) selected="selected" @endif @endisset>
                                                        {{ $value }}
                                                    </option>
                                                @endforeach
                                            </select>
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
    @include('backend.categories.scripts')
@endpush
