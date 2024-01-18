$(document).ready(function () {
    $("#num_order").change(function () {
        var price = $('#price').text();
        var num_order = $("#num_order").val();
        var data = {num_order: num_order, price: price};

//        alert(data);
        $.ajax({
            url: 'process.php', //Tang xử lý, mặc định trang hiện tại
            method: 'POST', //POST hoặc Get, mặc định Get
            data: data, //Dữu liệu truyền lên server
            dataType: 'text', //html,text,script hoặc json
            success: function (data) {
                $("#total").html("<strong>" + data + "</strong>");
            },
            error: function (xhr, ajaxOptions, throwError) {
                alert(xhr.status);
                alert(throwError);
            }
        });
    });
});


