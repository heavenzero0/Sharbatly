@extends('login.layout')
@section('content')
    <!-- LOGIN FORM -->
    <div class="text-center" style="padding:50px 0">
        <img class="profile-img" src="../images/logo.png" style="width: 100px;">
        <div class="logo">Sharbatly</div>
        <!-- Main Form -->
        <div class="login-form-1">
            <form id="login-form" class="text-left" action=" " method="POST">
                {{ csrf_field() }}
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <input type="text" class="form-control" id="lg_id" name="lg_id" placeholder="ID NUMBER"
                                   required="" autofocus>
                        </div>
                        <div id="otp"></div>
                        <div class="form-group login-group-checkbox">
                            <input type="checkbox" id="lg_remember" name="lg_remember">
                            <label for="lg_remember">remember</label>
                        </div>


                        <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="etc-login-form">
                        <p>forgot your password? <a href="#">click here</a></p>
                    </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>


    </div>




    <script>
        (function ($) {
            var options = {
                'btn-loading': '<i class="fa fa-spinner fa-pulse"></i>',
                'btn-password': '<i class="fa fa-key" aria-hidden="true"></i>',
                'btn-success': '<i class="fa fa-check"></i>',
                'btn-error': '<i class="fa fa-remove"></i>',
                'msg-success': 'All Good! Redirecting...',
                'msg-error': 'Wrong login credentials!',
                'useAJAX': true,
            };


            function processForm(e) {


                $('.login-form-main-message').removeClass("show error");
                $('.login-form-main-message').removeClass("show success");
                //$('#lg_password').remove();


                $('.login-button').addClass('clicked').html(options['btn-loading']);
                $.ajax({
                    url: "{{ route('user.ID') }}",
                    dataType: 'text',
                    type: 'post',
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function (data) {
                        //$('#otp pre').html( data );
                        //$(this).reload(),


                        function form_success($form) {
                            $('.login-form-main-message').addClass(data['type']).html(data['name']);


                            if (data['pass'] == true) {
                                if (data['result'] == 'success') {
                                    $('.login-button').addClass('success').html(options['btn-success']);
                                    $("#lg_password").prop("disabled", true);
                                    window.location.href = data['redirect'];

                                } else {
                                    $('.login-button').addClass('success').html(options['btn-error']);
                                }

                            } else {
                                if (data['type'] == 'show success') {
                                    $('#otp').append("<input type='password' class='form-control' id='lg_password' name='lg_password' placeholder='Password'> ");
                                    $('#lg_password').focus();
                                    $("#lg_id").prop("disabled", true);
                                    $('.login-button').addClass('success').html(options['btn-password']);

                                } else if (data['type'] == 'show error') {
                                    $('.login-button').addClass('success').html(options['btn-error']);
                                }

                            }


                            // $('#first').val(data['type']);

                        }


                        setTimeout(function () {
                            form_success($(this));
                        }, 200);


                    }
                });

                e.preventDefault();
            }

            $('#login-form').submit(processForm);
        })(jQuery);
    </script>
@endsection