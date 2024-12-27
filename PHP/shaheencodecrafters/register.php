<!doctype html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
    <style>
        #phone_number {
            padding-left: 23%;
            width: 100%;
            max-width: 400px;
        }
    </style>

    <!-- Include intl-tel-input CSS and Toastify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body class="home-dark2 tt-magic-cursor">
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);    
    ?>
    <section class="breadcrumbs pt-3 pb-3">
        <div class="container">
            <div class="contact-page-wrap sec-mar">
                <div class="container">
                    <div class="row g-lg-4 gy-5">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="contact-form-wrap">
                                <div class="form-tltle">
                                    <h5>Register Yourself</h5>
                                </div>
                                <div class="contact-form">
                                    <form id="register_form" method="post">
                                        <div class="row">
                                            <div class="col-md-6 mb-20">
                                                <div class="form-inner">
                                                    <label>First Name</label>
                                                    <input type="text" name="fname" placeholder="First Name">
                                                    <span class="error" id="fname_error" style="color:red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <div class="form-inner">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lname" placeholder="Last Name">
                                                    <span class="error" id="lname_error" style="color:red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <div class="form-inner">
                                                    <label>Phone Number</label>
                                                    <input id="phone_number" type="tel" name="phone_number" placeholder="Phone Number">
                                                    <span class="error" id="phone_error" style="color:red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <div class="form-inner">
                                                    <label>Email</label>
                                                    <input type="email" name="email" placeholder="Email">
                                                    <span class="error" id="email_error" style="color:red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-20">
                                                <div class="form-inner">
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Password">
                                                    <span class="error" id="password_error" style="color:red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-inner">
                                                    <button class="primary-btn3" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <p class="text text-info mt-3">
                                    Already Have An Account? <a href="login.php" class="text text-link">Login</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        // Initialize international telephone input
        var phoneInput = document.querySelector("#phone_number");
        var iti = window.intlTelInput(phoneInput, {
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                fetch("https://ipinfo.io/json?token=566c2d47308777", {
                        mode: 'cors'
                    })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "us";
                        success(countryCode);
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        // Handle form submission via AJAX
        $('#register_form').on('submit', function(e) {
            e.preventDefault();
            const fname = $("input[name='fname']").val();
            const lname = $("input[name='lname']").val();
            const phone_number = iti.getNumber();
            const email = $("input[name='email']").val();
            const password = $("input[name='password']").val();

            if (fname === '' || lname === '' || phone_number === '' || email === '' || password === '') {
                Toastify({
                    text: 'All fields are required.',
                    duration: 3000,
                    backgroundColor: "#ff6b6b"
                }).showToast();
                return;
            }

            $.ajax({
                url: 'code.php',
                type: 'POST',
                data: {
                    fname,
                    lname,
                    phone_number,
                    email,
                    password,
                    action: 'check_email' // Send action to check email existence
                },
                success: function(response) {
                    console.log("Server Response:", response); // Debugging
                    if (response.trim() === 'email_exists') {
                        $('#email_error').text('Email already exists.');
                    } else {
                        // Proceed with registration if email does not exist
                        $.ajax({
                            url: 'code.php',
                            type: 'POST',
                            data: {
                                fname,
                                lname,
                                phone_number,
                                email,
                                password,
                                action: 'register'
                            },
                            success: function(response) {
                                console.log("Server Response:", response); // Debugging
                                if (response.trim() === 'success') {
                                    Toastify({
                                        text: 'Registration successful!',
                                        duration: 3000,
                                        backgroundColor: "#4fbe87"
                                    }).showToast();
                                    setTimeout(() => window.location.href = "login.php", 2000);
                                } else if (response.trim() === 'phone_exists') {
                                    $('#phone_error').text('Phone number already exists.');
                                } else {
                                    Toastify({
                                        text: response,
                                        duration: 3000,
                                        backgroundColor: "#ff6b6b"
                                    }).showToast();
                                }
                            }
                        });
                    }
                }
            });
        });
    </script>
</body>
</html>
