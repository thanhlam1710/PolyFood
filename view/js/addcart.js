$(document).ready(function() {
    load_cart();

    function load_cart() {
        $.ajax({
            url: "http://localhost/project1/product/loadcart",
            method: "POST",
            success: function(data) {
                $(".ordering-list").html(data);
            }
        });
        $.ajax({
            url: "http://localhost/project1/product/loadbill",
            method: "POST",
            success: function(data) {
                $(".order-right-list").html(data);
            }
        });
    }
    $(".addbutton > #addbutton-icon").click(function() {
        var idFood = [];
        idFood.push($(this).data("id"));
        var nameFood = [];
        nameFood.push($(".addbutton-input-name_" + idFood).val());
        var priceFood = [];
        priceFood.push($(".addbutton-input-price_" + idFood).val());
        var idStore = [];
        idStore.push($(".addbutton-input-store_" + idFood).val());
        // alert(idStore)
        if (idFood.length > 0) {
            $.ajax({
                url: "http://localhost/project1/product/addcart",
                method: "POST",
                data: {
                    idFood: idFood,
                    nameFood: nameFood,
                    priceFood: priceFood,
                    idStore: idStore
                },
                success: function(data) {
                    load_cart();
                }
            });
        }

    });
    
    // $("#bill-delete").click(function() {
    //     $.ajax({
    //         url: "http://localhost/project1/product/deleteCart",
    //         method: "GET",
    //         success: function() {
    //             load_cart();
    //         }
    //     });
    // });
});