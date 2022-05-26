$(document).ready(function() {
    var listOrders = $(".bill-contain").children(".bill-ordering").children(".ordering-detail").children(".ordering-list").children(".ordering-item");
    var quanItems = listOrders.length;
    $(".portion-food, .order-right-total-number").text(quanItems);

    // ------------------------- function to delete --------------------------- //
    $("#bill-delete").click(function() {
        // alert('alo');
        var removeItem = $(this).parent().children(".ordering-item");
        removeItem.remove();
        var listOrders = $(".bill-contain").children(".bill-ordering").children(".ordering-detail").children(".ordering-list").children(".ordering-item");
        var quanItems = listOrders.length;
        $(".portion-food, .order-right-total-number").text(quanItems);
        $(".total-order-bill, .total-bill").text(0);
        $(".total-bill").val(0);
    });
    // ------------------------------------------------------------------- //

    // ------------- function to update price ----------------------- //
    update_total();

    function update_total() {
        var sum = $(".total-order").text();
        $(".total-order-bill, .total-bill").text(sum);
        $(".total-bill").val(sum);
    }

    // var btnPlus = $(".plus");
    // var btnMinus = $(".minus");

    // var quanIncrease = btnPlus.click(function() {
    //     var num = $(this).parent(".ordering-edit").find(".ordering-quantity");
    //     num.val(Number(num.val()) + 1);
    //     update_total();
    // });
    // //console.log(btnPlus);
    // var quanDecrease = btnMinus.click(function() {
    //     var num = $(this).parent(".ordering-edit").find(".ordering-quantity");
    //     var quanVal = Number(num.val());
    //     if (quanVal > 0) {
    //         num.val(quanVal - 1);
    //     }
    //     // $(".order-right-item-number").text(num.val());
    //     // $(".quantity-food").val(num.val());
    //     update_total();
    // });
    // -------------------------------------------------------------- //
});