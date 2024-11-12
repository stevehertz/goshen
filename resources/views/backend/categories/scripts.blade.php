<script>
    $(document).ready(function() {
        const assetBaseUrl = '{{ asset('') }}';
        @if (Route::is('category.index'))

            $(document).on('click', '.deleteCategoryBtn', function(e) {
                e.preventDefault();
                let category_id = $(this).data('id');
                let path = '{{ route('category.delete', ':category') }}';
                path = path.replace(":category", category_id);
                let token = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You want to remove this post',
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "DELETE",
                            url: path,
                            data: {
                                _token: token
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data['status']) {
                                    toastr.success(data['message']);
                                    setTimeout(() => {
                                        location.reload();
                                    }, 500);
                                }
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                });
            });

            $(document).on('click', '.viewCategoryBtn', function(e) {
                e.preventDefault();
                let category_id = $(this).data('id');
                let path = '{{ route('category.show', ':id') }}';
                path = path.replace(':id', category_id);
                $.ajax({
                    type: "GET",
                    url: path,
                    dataType: "json",
                    success: function(data) {
                        if (data['status']) {
                            $('#viewCategoryModal').modal('show');
                            console.log(assetBaseUrl);
                            $('#viewCategoryImage').html(
                                '<img class="attachment-img" src="' + assetBaseUrl +
                                data['data']['image'] +
                                '" alt="Attachment Image" style="width:100%;">');
                            $('#viewCategoryName').html(data['data']['title']);
                            $('#viewCategorySlug').html(data['data']['slug']);
                            $('#viewCategoryDescription').html(data['data']['description']);
                            $('#viewCategoryStatus').html(data['status']);
                        }
                    }
                });
            });
        @endif

        @if (Route::is('category.create'))
            $('#newCategoryForm').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                let formData = new FormData(form[0]);
                let path = '{{ route('category.store') }}';
                $.ajax({
                    type: "POST",
                    url: path,
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        form.find('button[type=submit]').html(
                            '<i class="fa fa-spinner fa-spin"></i>'
                        );
                        form.find('button[type=submit]').attr('disabled', true);
                    },
                    complete: function() {
                        form.find('button[type=submit]').html(
                            'Submit'
                        );
                        form.find('button[type=submit]').attr('disabled', false);
                    },
                    success: function(data) {
                        if (data['status']) {
                            toastr.success(data['message']);
                            setTimeout(() => {
                                window.location.href =
                                    '{{ route('category.index') }}'
                            }, 1000);
                        }
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        var errorsHtml = '<ul>';
                        $.each(errors['errors'], function(key, value) {
                            errorsHtml += '<li>' + value + '</li>';
                        });
                        errorsHtml += '</ul>';
                        toastr.error(errorsHtml);
                    }
                });
            });
        @endif

        @if (Route::is('category.edit'))
            $('#updateCategoryForm').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                let formData = new FormData(form[0]);
                let category_id = '{{ $data->id }}';
                let path = '{{ route('category.update', ':category') }}';
                path = path.replace(':category', category_id);
                $.ajax({
                    type: "POST",
                    url: path,
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        form.find('button[type=submit]').html(
                            '<i class="fa fa-spinner fa-spin"></i>'
                        );
                        form.find('button[type=submit]').attr('disabled', true);
                    },
                    complete: function() {
                        form.find('button[type=submit]').html(
                            'Submit'
                        );
                        form.find('button[type=submit]').attr('disabled', false);
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data['status']) {
                            toastr.success(data['message']);
                            setTimeout(() => {
                                window.location.href =
                                    '{{ route('category.index') }}'
                            }, 1000);
                        }
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        var errorsHtml = '<ul>';
                        $.each(errors['errors'], function(key, value) {
                            errorsHtml += '<li>' + value + '</li>';
                        });
                        errorsHtml += '</ul>';
                        toastr.error(errorsHtml);
                    }
                });
            });
        @endif

    });
</script>
