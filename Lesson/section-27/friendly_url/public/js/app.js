$(document).ready(function () {
    $(".num-order").change(function () {
        var id = $(this).attr('data-id');
        var qty = $(this).val();
        var data = {id: id, qty: qty};

//        alert(data);
        $.ajax({
            url: '?mod=cart&act=update_ajax', //Tang xử lý, mặc định trang hiện tại
            method: 'POST', //POST hoặc Get, mặc định Get
            data: data, //Dữu liệu truyền lên server
            dataType: 'json', //html,text,script hoặc json
            success: function (data) {
                $("#sub-total-"+id).text(data.sub_total );
                $("#total-price span").text(data.total );
//                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});