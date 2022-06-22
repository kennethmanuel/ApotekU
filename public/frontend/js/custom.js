$(document).ready(function () {
    $(".addToCartButton").click(function (e) {
        e.preventDefault();

        let medicine_id = $(this)
            .closest(".medicine_data")
            .find(".medicine_id")
            .val();
        let medicine_qty = $(this)
            .closest(".medicine_data")
            .find(".qty-input")
            .val();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                medicine_id: medicine_id,
                medicine_qty: medicine_qty,
            },
            success: function (response) {
                swal(response.status);
            },
        });
    });

    $(".increment-btn").click(function (e) {
        e.preventDefault();

        let inc_value = $(this)
            .closest(".medicine_data")
            .find(".qty-input")
            .val();
        let value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 99) {
            value++;
            $(this).closest(".medicine_data").find(".qty-input").val(value);
        }
    });

    $(".decrement-btn").click(function (e) {
        e.preventDefault();

        let dec_value = $(this)
            .closest(".medicine_data")
            .find(".qty-input")
            .val();
        let value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).closest(".medicine_data").find(".qty-input").val(value);
        }
    });

    $(".delete-cart-item").click(function (e) {
        e.preventDefault();

        let medicine_id = $(this)
            .closest(".medicine_data")
            .find(".medicine_id")
            .val();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                medicine_id: medicine_id,
            },
            success: function (response) {
                window.location.reload();
                swal("", response.status, "success");
            },
        });
    });

    $(".changeQuantity").click(function (e) {
        e.preventDefault();

        let medicine_id = $(this)
            .closest(".medicine_data")
            .find(".medicine_id")
            .val();

        let medicine_qty = $(this)
            .closest(".medicine_data")
            .find(".qty-input")
            .val();

        data = {
            "medicine_id": medicine_id,
            "medicine_qty": medicine_qty,
        }

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            method: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                window.location.reload();
            }
        });
    });
});
