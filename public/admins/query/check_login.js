function checkLogin(event) {
    event.preventDefault();
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    // let form = $('.login_form').attr('action');
    // alert(form);
    // var email = $("input[name='email']").val();
    // var password = $("input[name='password']").val();

    // $.ajax({
    //     type: "POST",
    //     url: form,
    //     data: {
    //         email: email,
    //         password: password
    //     },
    //     success: function (response) {
    //         console.log(response.message.errors);
    //     }
    // });
}



$(function () {
    $(document).on('click', '.action_login', checkLogin);
});
