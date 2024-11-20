<script>
    $(document).ready(function() {

        $(document).on('click', '.addToWishListBtn', function(e) {
            e.preventDefault();
            let product_id = $(this).data('product');
            let token = '{{ csrf_token() }}';
            let path = '{{ route('shop.wishlist.store') }}';
            $.ajax({
                type: "POST",
                url: path,
                data: {
                    product_id: product_id,
                    _token: token
                },
                dataType: "json",
                success: function(data) {
                    if (data['status']) {
                        setTimeout(() => {
                            window.location.href = '{{ route('shop.wishlist') }}'
                        }, 500);
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 401) {
                        // Redirect to login if not authenticated
                        window.location.href = '{{ route('login') }}';
                    } else {
                        alert(xhr.responseJSON.message || 'An error occurred.');
                    }
                }
            });
        });

        $(document).on('click', '.removeProductBtn', function(e) {

            let wishlist_id = $(this).data('id');
            let token = '{{ csrf_token() }}';
            let path = '{{ route('shop.wishlist.delete', ':id') }}';
            path = path.replace(':id', wishlist_id);
            $.ajax({
                type: "DELETE",
                url: path,
                data: {
                    _token: token
                },
                dataType: "json",
                success: function(data) {
                    if (data['status']) {
                        setTimeout(() => {
                            location.reload();
                        }, 500);
                    }
                }
            });

        });

        $(document).on('click', '.addToCartBtn', function(e) {
            e.preventDefault();

            let product_id = $(this).data('id');
            let qty = $('#quantity').val();
            let token = '{{ csrf_token() }}'; // Ensure this is present
            let path = '{{ route('shop.cart.store') }}';

            $.ajax({
                type: "POST",
                url: path,
                data: {
                    product_id: product_id,
                    quantity: qty,
                    _token: token
                },
                dataType: "json",
                success: function(data) {
                    if (data['status']) {
                        setTimeout(() => {
                            window.location.href = '{{ route('shop.cart.index') }}';
                        }, 500);
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 401) {
                        // Redirect to login if not authenticated
                        window.location.href = '{{ route('login') }}';
                    } else {
                        alert(xhr.responseJSON.message || 'An error occurred.');
                    }
                }
            });
        });

        $(document).on('input', '.quantity-input', function () {
            e.preventDefault();
            let cartId = $(this).data('cart-id');
            let productPrice = $(this).data('product-price');
            let newQuantity = $(this).val();
            let token = '{{ csrf_token() }}';
            let path = '{{ route('shop.cart.update', ':cart') }}';
            path = path.replace(':cart', cartId);
            $.ajax({
                type: "POST",
                url: path,
                data: {
                    quantity: newQuantity,
                    _token: token
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        // Update the product total
                        $(`input[data-cart-id="${cartId}"]`)
                            .closest('tr')
                            .find('.shoping__cart__total')
                            .text(`Kshs${response.updated_total_price}`);

                        // Update the grand total
                        $('#grand-total').text(response.grand_total);
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr) {
                    alert('An error occurred while updating the cart.');
                }
            });
        });

    });
</script>
