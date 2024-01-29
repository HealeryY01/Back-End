$(document).ready(function () {
    $("#check_ajax").click(function () {
        var data_id = $(this).attr('data-id');
        var data = {id: data_id};

//        alert(data);
        $.ajax({
            url: '?mod=oder&action=update', //Tang xử lý, mặc định trang hiện tại
            method: 'POST', //POST hoặc Get, mặc định Get
            data: data, //Dữu liệu truyền lên server
            dataType: 'text', //html,text,script hoặc json
            success: function (data) {
               alert(data);
            },
            error: function (xhr, ajaxOptions, throwError) {
                alert(xhr.status);
                alert(throwError);
            }
        });
        return false;
    });
});


