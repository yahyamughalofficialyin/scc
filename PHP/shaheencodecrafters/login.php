<!doctype html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body class="home-dark2 tt-magic-cursor">
    <section class="breadcrumbs pt-3 pb-3 ">
        <div class="breadcrumb-sm-images">
            <div class="inner-banner-1 magnetic-item">
                <img src="assets/img/inner-pages/inner-banner-1.png" alt>
            </div>
            <div class="inner-banner-2 magnetic-item">
                <img src="assets/img/inner-pages/inner-banner-2.png" alt>
            </div>
        </div>
        <div class="container">
            <div class="contact-page-wrap sec-mar">
                <div class="container">
                    <div class="row g-lg-4 gy-5">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="contact-form-wrap">
                                <div class="form-tltle">
                                    <h5>Login</h5>
                                </div>
                                <div class="contact-form">
                                    <form id="loginForm">
                                        <div class="row">
                                            <div class="col-lg-12 mb-20">
                                                <div class="form-inner">
                                                    <label>Email</label>
                                                    <input type="email" name="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <div class="form-inner">
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-inner">
                                                    <button class="primary-btn3" type="submit">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <p class="text text-info mt-3">
                                    Don't Have An Account? <a href="register.php" class="text text-link">Register</a>
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#loginForm').on('submit', function (e) {
                e.preventDefault();
                
                $.ajax({
                    url: 'code.php',
                    type: 'POST',
                    data: {
                        action: 'login',
                        email: $('input[name="email"]').val(),
                        password: $('input[name="password"]').val()
                    },
                    success: function (response) {
                        if (response === 'success') {
                            Toastify({
                                text: "Login successful!",
                                duration: 3000,
                                gravity: "top",
                                position: "center",
                                backgroundColor: "green",
                            }).showToast();

                            setTimeout(function () {
                                window.location.href = 'index.php';
                            }, 1000);
                        } else if (response === 'email_not_found') {
                            Toastify({
                                text: "Email not found.",
                                duration: 3000,
                                gravity: "top",
                                position: "center",
                                backgroundColor: "red",
                            }).showToast();
                        } else if (response === 'invalid_password') {
                            Toastify({
                                text: "Invalid password.",
                                duration: 3000,
                                gravity: "top",
                                position: "center",
                                backgroundColor: "red",
                            }).showToast();
                        } else {
                            Toastify({
                                text: "An error occurred. Please try again.",
                                duration: 3000,
                                gravity: "top",
                                position: "center",
                                backgroundColor: "red",
                            }).showToast();
                        }
                    },
                    error: function () {
                        Toastify({
                            text: "An error occurred. Please try again.",
                            duration: 3000,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "red",
                        }).showToast();
                    }
                });
            });
        });
    </script>
</body>

</html>
