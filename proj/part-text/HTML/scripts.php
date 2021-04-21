<script src="<?= WEB_ROOT ?>/bs&jq/jquery-3.6.0.js"></script>
<script src="<?= WEB_ROOT ?>/bs&jq/bootstrap.bundle.js"></script>

<script>
    function showCartCount(cart) {
        let total = 0;
        for (let i in cart) {
            total += cart[i].quantity;
        }
        $('.cart-count').text(total);

    }

    $.get('cart-api.php', function(data) {

        showCartCount(data);
    }, 'json');
</script>