<script>
    $(document).ready(function () {

        $(document).on('click', '.addToWishListBtn', function(e){
            e.preventDefault();
            let product_id = $(this).data('product');
            let token = '{{ csrf_token() }}';
            let path = '{{ route('shop.wishlist.store') }}';
            $.ajax({
                type: "POST",
                url: path,
                data: {
                    product_id:product_id,
                    _token:token
                },
                dataType: "json",
                success: function (data) {
                    if(data['status'])
                    {
                        setTimeout(() => {
                            window.location.href = '{{ route('shop.wishlist') }}'
                        }, 500);
                    }
                }
            });
        });

        $(document).on('click', '.removeProductBtn', function(e){

            let wishlist_id = $(this).data('id');
            let token = '{{ csrf_token() }}';
            let path = '{{ route('shop.wishlist.delete', ':id') }}';
            path = path.replace(':id', wishlist_id);
            $.ajax({
                type: "DELETE",
                url: path,
                data: {
                    _token:token
                },
                dataType: "json",
                success: function (data) {
                    if(data['status'])
                    {
                        setTimeout(() => {
                            location.reload();
                        }, 500);
                    }
                }
            });

        });

    });
</script>
