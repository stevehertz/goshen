<script>
    $(document).ready(function() {

        @if (Route::is('shop.cart.index'))
            /*-------------------
		    Quantity change --------------------- */
            // var proQty = $('.pro-qty');

            // proQty.prepend('<span class="dec qtybtn">-</span>');
            // proQty.append('<span class="inc qtybtn">+</span>');

            // proQty.on('click', '.qtybtn', function() {
            //     var $button = $(this);
            //     var $input = $button.parent().find('input');
            //     var oldValue = $button.parent().find('input').val();
            //     var cartId = $input.data('cart-id'); // Cart ID from input's data attribute
            //     var token = '{{ csrf_token() }}'; // CSRF token
            //     var path = '{{ route('shop.cart.update', ':cart') }}'; // Update route
            //     path = path.replace(':cart', cartId); // Replace placeholder with cart ID
            //     var newVal;

            //     if ($button.hasClass('inc')) {
            //         newVal = parseFloat(oldValue) + 1;
            //     } else {
            //         // Don't allow decrementing below zero
            //         if (oldValue > 24) {
            //             newVal = parseFloat(oldValue) - 1;
            //         } else {
            //             newVal = 24;
            //         }
            //     }

            //     // Update input value
            //     $input.val(newVal);

            //     // Send AJAX request to update quantity in database
            //     $.ajax({
            //         type: 'POST',
            //         url: path,
            //         data: {
            //             quantity: newVal,
            //             _token: token
            //         },
            //         dataType: 'json',
            //         success: function(response) {
            //             if (response.status) {
            //                 // Update the product total in the UI
            //                 $button.parent()
            //                     .closest('tr')
            //                     .find('.shoping__cart__total')
            //                     .text(`Kshs${response.updated_total_price}`);

            //                 // Update the grand total in the UI
            //                 $('#grand-total').text(response.grand_total);
            //                 setTimeout(() => {
            //                     location.reload();
            //                 }, 500);
            //             } else {
            //                 alert(response.message);
            //             }
            //         },
            //         error: function(xhr) {
            //             alert('An error occurred while updating the cart.');
            //         }
            //     });
            // });
        @endif




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
                            window.location.href =
                                '{{ route('shop.cart.index') }}';
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

        $(document).on('click', '.removeCartBtn', function(e) {
            let cart_id = $(this).data('id');
            let token = '{{ csrf_token() }}';
            let path = '{{ route('shop.cart.delete', ':id') }}';
            path = path.replace(':id', cart_id);
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

        $(document).on('click', '.proceedToCheckoutBtn', function(e) {
            e.preventDefault();
            let token = '{{ csrf_token() }}'; // CSRF Token
            let path = '{{ route('shop.checkout.checkout') }}';
            $.ajax({
                type: "POST",
                url: path,
                data: {
                    _token: token
                },
                dataType: "json",
                success: function(response) {
                    if(response['status'])
                    {
                        let url = '{{ route('shop.checkout.index', ':order') }}';
                        url = url.replace(':order', response['order']);
                        setTimeout(() => {
                            window.location.href = url;
                        }, 500);
                    }
                }
            });
        });

    });
</script>
