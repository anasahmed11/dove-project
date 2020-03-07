
$(document).on('click',"#new-client-rev",function(e){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'message',
        data:new FormData($("#new-form")[0]),
        dataType:'json',
        async:false,
        contentType: false,
        processData: false,
        success: function (data) {
            if((data.errors)){
                Swal.fire({
                    type: 'error',
                    title: 'للاسف هناك خطا',
                    text: 'ضع البيانات مرة اخري بطريقة صحيحة و املأ جميع الاماكن',

                })

            }else{
                Swal.fire(
                    'تم ارسال طلبك بنجاح',
                    ' سنتواصل معك قريبا DOVE شكرا لاستخدامك موقع ',
                    'success'
                )
            }
            $('#new-form').trigger("reset");


        }

    });
    e.preventDefault();

});
