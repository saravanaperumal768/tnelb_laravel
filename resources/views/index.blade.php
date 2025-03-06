    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>TNELB - Home</title>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <link rel="icon" type="image/x-icon" href="{{url('assets/images/logo/favicon.png') }}" />
        <link href="{{url('assets/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{url('assets/layouts/vertical-light-menu/loader.js') }}"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="{{url('assets/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/src/assets/css/light/authentication/auth-cover.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/src/assets/css/dark/authentication/auth-cover.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="{{url('assets/main.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="form">
        <div class="auth-container d-flex">
            <div class="container mx-auto align-self-center">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                        <div class="auth-cover-bg-image"></div>
                        <div class="auth-overlay"></div>
                        <div class="auth-cover">
                            <div class="position-relative">
                                <img src="{{url('assets/images/logo/favicon.png') }}" alt="logo-img">
                                <h2 class="mt-5 text-white font-weight-bolder px-2">TamilNadu Electrical Licencing Board</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h2>Sign In</h2>
                                        <p>Enter your Username and password to login</p>
                                    </div>

                                    @if(session('a'))
                                    <div class="alert alert-success" style="color: #155724; background-color: #d4edda; padding: 10px; border-radius: 5px;">
                                        {{ session('a') }}
                                    </div>
                                    @endif


                                    <form id="loginForm">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                <input type="text" name="username" id="username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" id="password" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-4">
                                                <img src="{{ captcha_src() }}" alt="CAPTCHA" id="image-captcha">
                                                <a href="#" id="refresh-captcha" class="align-middle" title="refresh">
                                                    <span class="fas fa-redo-alt align-middle" style="margin-left: 20px; color:brown; font-size:25px;"></span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label class="form-label">Enter the captcha</label>
                                                <input type="text" name="captcha" id="captcha" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-4">
                                                <button class="btn btn-secondary w-100" type="submit">LOG IN</button>
                                            </div>
                                        </div>

                                        <div id="error-message" class="alert alert-danger d-none"></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{url('assets/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{url('assets/jquery-3.6.0.min.js') }}"></script>
        <script src="{{url('plugins/sha512/sha512.min.js') }}"></script>
        <script src="{{url('plugins/sha512/sha512.js') }}"></script>
        <script src="{{url('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{url('assets/custom.js') }}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <script type="text/javascript">
            var refreshButton = document.getElementById("refresh-captcha");
            var captchaImage = document.getElementById("image-captcha");

            refreshButton.onclick = function(event) {
                event.preventDefault();
                captchaImage.src = '{{ url("captcha/image.php") }}?' + Date.now();
            };
        </script>

        <script>
            $(document).ready(function() {
                $("#loginForm").on("submit", function(e) {
                    e.preventDefault();
                    $("#error-message").addClass("d-none").html("");

                    let formData = {
                        username: $("#username").val(),
                        password: $("#password").val(),
                        captcha: $("#captcha").val(),
                        _token: $("input[name=_token]").val(),
                    };

                    $.ajax({
                        url: "{{ route('login.submit') }}",
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            if (response.success) {
                                window.location.href = response.redirect;
                            } else {
                                $("#error-message").removeClass("d-none").html(response.error);
                            }
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessage = "Invalid credentials. Please try again.";
                            if (errors) {
                                errorMessage = Object.values(errors).map(err => err.join("<br>")).join("<br>");
                            }
                            $("#error-message").removeClass("d-none").html(errorMessage);
                        }
                    });
                });

                $("#refresh-captcha").click(function(e) {
                    e.preventDefault();
                    $("#image-captcha").attr("src", "{{ url('captcha/image.php') }}?" + Date.now());
                });
            });
        </script>
    </body>

    </html>