<script>
    $(document).ready(function() {
        const assetBaseUrl = '{{ asset('') }}';

        @if (Route::is('products.index'))

            $(document).on('click', '.deleteProductBtn', function(e) {
                e.preventDefault();
                let product_id = $(this).data('id');
                let path = '{{ route('products.delete', ':product') }}';
                path = path.replace(":product", product_id);
                let token = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You want to remove this product',
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

            // Handle change event
            $('input[name="in_stock"]').on('switchChange.bootstrapSwitch', function(event, state) {
                const productId = $(this).data('product-id');
                const inStock = state ? 1 : 0; // state is true if checked, false otherwise

                // Send AJAX request to update the database
                let path = '{{ route('products.update.stock', ':product') }}';
                path = path.replace(':product', productId);
                $.ajax({
                    url: path, // Define the route
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // Include CSRF token
                        in_stock: inStock
                    },
                    success: function(data) {
                        if (data['status']) {
                            toastr.success(data['message']);
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        console.log('Error updating product availability.');
                    }
                });
            });
        @endif

        @if (Route::is('products.create'))
            $('#newProductForm').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                let formData = new FormData(form[0]);
                let path = '{{ route('products.store') }}';
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
                                    '{{ route('products.index') }}'
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


        @if (Route::is('products.edit'))
            $('#updateProductForm').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                let formData = new FormData(form[0]);
                let product_id = '{{ $data->id }}';
                let path = '{{ route('products.update', ':product') }}';
                path = path.replace(':product', product_id);
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
                                    '{{ route('products.index') }}'
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
