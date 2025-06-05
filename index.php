<?php
?>
<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="bootstrap\bootstrap.min.css">
    <script src="bootstrap\bootstrap.min.js"></script>
    <link rel="stylesheet" href="homePageDesign.css">
    <script src="homePageDesign.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>
        Home
    </title>
    <link rel="icon" type="image/x-icon" href="">

    <style>
        #passCheck {
            display: none;
            margin-top: -25px;
            margin-bottom: -25px;
        }

        #passCheck p {
            text-align: center;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
            text-align: justify;
        }

        .valid:before {
            content: "✔    ";
        }

        /* Add a red text color and an "x" icon when the requirements are wrong */
        .invalid {
            color: red;
            text-align: justify;
        }

        .invalid:before {
            content: "✖    ";
        }

        #passCheck2 {
            display: none;
            margin-top: -25px;
            margin-bottom: -25px;
        }

        #passCheck2 p {
            text-align: center;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid2 {
            text-align: center;
            color: green;
        }

        .valid2:before {
            content: "✔ PASSWORD MATCHED";
        }

        /* Add a red text color and an "x" icon when the requirements are wrong */
        .invalid2 {

            color: red;
        }

        .invalid2:before {
            content: "✖ PASSWORD DOES NOT MATCH";
        }

        #passSignup,
        #passSignupConfirm {
            font-size: 14px;
            outline: none;
            border: none;
        }

        #dialCode {
            position: relative;
            top: 30px;
            right: 120px;
            font-size: 14px;
        }

        #contactSignup {
            text-indent: 20px;
        }
    </style>

</head>

<body>

    <div id="response" style="display: none;"></div>

    <!---------------------------------------------------Top Bar Start------------------------------------------------------>
    <div class="row">
        <div class="container-fluid col-12" id="brandTitle">
            <div class="topnav">
                <a href="#home"><img src=""></a>
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#aboutUs">About Us</a>
                <a href="#contactUs">Contact Us</a>
                <div class="split">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalId">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------Top Bar End------------------------------------------------------>



    <!----------------------------------------HOME STARTS HERE---------------------------------------->

    <div class="row" id="home">
        <div id="homePage" class="container-fluid">
            <div class="titleHome">
                Lorem ipsum dolor sit amet.<br>
                OFFERING THE BEST DENTAL CARE
                <br>
                <!--------------------------BOOK NOW BUTTON------------------------------>
                <a type="button" id="bookButton" data-bs-toggle="modal" data-bs-target="#modalId">
                    Book Now
                </a>

            </div>
        </div>


        <!----------------------------------------CAROUSEL PICS STARTS HERE---------------------------------------->
        <div id="myCarousel" class="carousel col-12 slide d-block 2-100" data-bs-ride="carousel">

            <!----------------------------------------carousel indicators here---------------------------------------->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
            </div>

            <!----------------------------------------carousel images---------------------------------------->


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="home\images\img (2).jpg" class="d-block w-100" alt="Front of Lorem ipsum dolor sit amet.">
                </div>

                <div class="carousel-item">
                    <img src="home\images\img (3).jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal trigger button -->


    <!----------------------------------------CAROUSEL ENDS HERE---------------------------------------->
    <!----------------------------------------HOME ENDS HERE---------------------------------------->




    <!----------------------------------------LOGIN/SIGNUP STARTS HERE---------------------------------------->

    <!---------------------------------------------------Log in starts here------------------------------------------->
    <!-------------------------------------- Modal Login for pop-up login---------------------------------->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div id="modalLogIn" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!--------------------------------------Form for Log in start-------------------------------------------------->
                    <!---------------change the action="" when doing the actual--------------->
                    <form class="formLayout" action="php/login.php" method="post" id="formLogin">

                        <div class="mb-3">
                            <label for="emailLogIn">Email</label>
                            <input type="email" class="form-control" name="emailLogin" id="email" placeholder="Enter Email" required>
                            <!-- add required in email when doing the actual-->
                            <div class="formBorder"></div>
                        </div>

                        <div class="mb-3">
                            <label for="passLogIn">Password</label>
                            <input type="password" class="form-control" name="passLogin" id="pass" placeholder="Enter Password" required>
                            <!-- add required in password when doing the actual-->
                            <div class="formBorder"></div>
                        </div>
                        <!-- <div id="submitLogin" class="mb-3">
                                <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-forgot-pass">Forgot Password</a>
                            </div> -->

                        <div id="submitLogin" class="mb-3">
                            <input type="submit" name="submitLogIn" id="submit" value="L O G I N"></input>
                        </div>
                        <div id="submitLogin" class="mb-3">
                            Don't have an account?
                            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalSignUp"> Sign Up</a>
                        </div>
                        <!--------------------------------------Form end-------------------------------------------------->
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!---------------------------------------------------Log in ends here------------------------------------------->

    <script>
        var form = document.getElementById("formLogin");

        $(document).ready(function() {
            $(form).submit(function(event) {
                event.preventDefault()

                $.post($(form).attr("action"),
                    $(form).serializeArray(),
                    function(info) {

                        $("#response").empty();
                        $("#response").html(info);

                    });

            })
        })
    </script>
    <!-----------------------------------------------------Modal SIGN UP HERE------------------------------------------------>
    <!-------------------------------------- Modal Sign for pop-up login---------------------------------->
    <div class="modal fade modal-lg" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div id="modalSignUp" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!------------------------------------------Form for Sign Up start---------------------------------------------->
                    <form class="formLayout" action="php/register_process.php" method="post" id="formSignup">
                        <div class="row">

                            <div class="container-fluid col-6">
                                <div class="mb-3">
                                    <label for="fnameSignUp">First Name</label>
                                    <input type="text" class="form-control" name="fnameSignup" id="fnameSignup" placeholder="Enter First Name" required>
                                    <div class="formBorder"></div>
                                </div>
                            </div>


                            <div class="container-fluid col-6">
                                <div class="mb-3">
                                    <label for="lnameSignup">Last Name</label>
                                    <input type="text" class="form-control" name="lnameSignup" id="lnameSignup" placeholder="Enter Last Name" required>
                                    <div class="formBorder"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="emailSignup">Email</label>
                                <input type="email" class="form-control" name="emailSignup" id="emailSignup" placeholder="Enter Email" required>
                                <div class="formBorder"></div>
                            </div>

                            <div class="container-fluid col-6">
                                <div class="mb-3">
                                    <label for="passSignUp">Password</label>
                                    <input type="password" class="form-control" name="passSignup" id="passSignup" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                    <div class="formBorder"></div>
                                </div>
                            </div>


                            <div class="container-fluid col-6">
                                <div class="mb-3">
                                    <label for="passSignupConfirm">Confirm Password</label>
                                    <input type="password" class="form-control" name="passSignupConfirm" id="passSignupConfirm" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                    <div class="formBorder"></div>
                                </div>
                            </div>

                            <div id="passCheck" display="none">
                                <div role="alert">
                                    <p id="passInput" class="invalid">Password must contain at least one number and
                                        one uppercase and lowercase letter, and at least 8 or more characters</p>
                                </div>
                            </div>

                            <div id="passCheck2" display="none">
                                <div role="alert">
                                    <p id="passInput2" class="invalid2"></p>
                                </div>
                            </div>

                            <script type="text/javascript">
                                var pass = document.getElementById("passSignup");
                                var passConf = document.getElementById("passSignupConfirm");
                                var passInput = document.getElementById("passInput");
                                var passInput2 = document.getElementById("passInput2");
                                var upper = false;
                                var lower = false;
                                var number = false;
                                var length = false;

                                passConf.onkeyup = function() {
                                    if (pass.value == passConf.value) {
                                        passInput2.classList.remove("invalid2");
                                        passInput2.classList.add("valid2");
                                    } else {
                                        passInput2.classList.remove("valid2");
                                        passInput2.classList.add("invalid2");
                                    }
                                }

                                // When the user starts to type something inside the password field
                                pass.onfocus = function() {
                                    document.getElementById("passCheck").style.display = "block";
                                }

                                // When the user clicks outside of the password field, hide the message box
                                pass.onblur = function() {
                                    document.getElementById("passCheck").style.display = "none";
                                }

                                // When the user starts to type something inside the password field
                                passConf.onfocus = function() {
                                    document.getElementById("passCheck2").style.display = "block";
                                }

                                // When the user clicks outside of the password field, hide the message box
                                passConf.onblur = function() {
                                    document.getElementById("passCheck2").style.display = "none";
                                }

                                // When the user starts to type something inside the password field
                                pass.onkeyup = function() {
                                    // Validate lowercase letters
                                    var lowerCaseLetters = /[a-z]/g;
                                    if (pass.value.match(lowerCaseLetters)) {
                                        lower = true;
                                    } else {
                                        lower = false;
                                    }

                                    // Validate capital letters
                                    var upperCaseLetters = /[A-Z]/g;
                                    if (pass.value.match(upperCaseLetters)) {
                                        upper = true;
                                    } else {
                                        upper = false;
                                    }

                                    // Validate numbers
                                    var numbers = /[0-9]/g;
                                    if (pass.value.match(numbers)) {
                                        number = true;
                                    } else {
                                        number = false;
                                    }

                                    // Validate length
                                    if (pass.value.length >= 8) {
                                        length = true;
                                    } else {
                                        length = false;
                                    }

                                    if (lower && upper && number && length) {
                                        passInput.classList.remove("invalid");
                                        passInput.classList.add("valid");
                                    } else {
                                        passInput.classList.remove("valid");
                                        passInput.classList.add("invalid");
                                    }
                                }
                            </script>

                            <div div class="mb-3">
                                <label for="contactSignup">Contact Number</label>
                                <label id="dialCode" for="contactSignup">+63</label>
                                <input type="text" class="form-control" name="contactSignup" id="contactSignup" placeholder="9876543210" pattern="[0-9]{10}" maxlength="10" required>
                                <div class="formBorder"></div>
                            </div>

                            <div class="mb-3">
                                <form>
                                    <label for="terms">
                                        <input type="checkbox" class="form-check-input" name="terms" required>
                                        I agree to the</label> <a href="#"> Terms and Condition</a>
                                </form>
                            </div>

                            <div id="submitLogin">
                                <input type="submit" name="submitSignup" id="submit" value="S I G N U P">
                            </div>

                            <div id="submitLogin" class="mb-3">
                                Already have an account?
                                <a href="#home" data-bs-toggle="modal" data-bs-target="#modalId"> Log In</a>
                            </div>

                        </div>
                    </form>


                    <!------------------------------------------Form for Sign Up end---------------------------------------------->
                </div>

            </div>
        </div>
    </div>
    <!-- 
        <div class="modal fade modal-lg" id="modal-forgot-pass" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div id="modalSignUp" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Forgot Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"> -->

    <!------------------------------------------Form for forgot password---------------------------------------------->
    <!-- <form class="formLayout" action="php/frogot-password.php" method="post" id="form-forgot-pass">
                            <div class="row">

                                <div class="container-fluid col-6">
                                    <div class="mb-3">
                                        <label for="Forgot-pass">Forgot Password</label>
                                        <input type="text" class="form-control" name="forgot-pass" id="forgot-pass" placeholder="Enter Forgot Password" required>
                                        <div class="formBorder"></div>
                                        <div id="submitLogin">
                                    <input type="submit" name="submitSignup" id="submit" value="S I G N U P">
                                </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->




    <!----------------------------------------LOGIN SIGNUP ENDS HERE---------------------------------------->

    <script>
        var form2 = document.getElementById("formSignup");
        var pass = document.getElementById("passSignup");
        var passConf = document.getElementById("passSignupConfirm");

        $(document).ready(function() {
            $(form2).submit(function(event) {
                if (pass.value != passConf.value) {
                    passConf.focus();
                    event.preventDefault();
                } else {
                    event.preventDefault()

                    $.post($(form2).attr("action"),
                        $(form2).serializeArray(),
                        function(info) {

                            $("#response").empty();
                            $("#response").html(info);

                        });
                }
            })
        })
    </script>

    <!----------------------------------------SERVICES STARTS HERE---------------------------------------->

    <div class="row" id="services">
        <div class="container-fluid">
            <div id="servicesTitle">Services</div>
            <div id="servicesContent">

                <div class="theService1">
                    <div class="row">

                        <div id="service1" class="service-wrapper">

                            <!-----------------------------------------Service 1------------------------------------------------>
                            <img src="home/images/Oral Prophylaxis.jpg" title="Photo by Pavel Danilyuk from Pexels: https://www.pexels.com/photo/man-people-woman-technology-6812523/"><br>
                            <div class="service-details">
                                <h3>Oral Prophylaxis (Cleaning)</h3>
                                <p>
                                    Aenean ac ligula augue. Cras dignissim ultrices ante quis laoreet. Vestibulum ac justo sed metus sagittis interdum. Pellentesque mattis leo at vehicula ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam cursus et elit sit amet interdum. Pellentesque id rhoncus dolor. Etiam laoreet est tortor, vel commodo dolor finibus eget. Praesent tristique arcu id ipsum luctus ultricies. Ut purus orci, molestie non pharetra aliquet, ornare non diam. Proin a eros ac odio consectetur eleifend eget a velit. Ut aliquet tincidunt metus, sit amet elementum nulla convallis quis. Pellentesque commodo ipsum eu sodales ultricies. Vestibulum lacinia, urna id posuere gravida, quam tellus dignissim sem, non congue nisi libero eu turpis. Vivamus massa mauris, aliquet in nisi eu, egestas hendrerit dolor. Quisque sit amet ultrices erat.
                                </p>
                            </div>
                        </div>
                        <div id="service2" class="service-wrapper">

                            <!-----------------------------------------Service 2------------------------------------------------>
                            <img src="home/images/Dental Fillings.jpg" title="Photo by Karolina Grabowska from Pexels: https://www.pexels.com/photo/close-up-photo-of-a-woman-getting-a-dental-check-up-6627536/"><br>
                            <div class="service-details">
                                <h3>The Dental Fillings (Pasta)</h3>
                                <p>
                                    Aenean ac ligula augue. Cras dignissim ultrices ante quis laoreet. Vestibulum ac justo sed metus sagittis interdum. Pellentesque mattis leo at vehicula ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam cursus et elit sit amet interdum. Pellentesque id rhoncus dolor. Etiam laoreet est tortor, vel commodo dolor finibus eget. Praesent tristique arcu id ipsum luctus ultricies. Ut purus orci, molestie non pharetra aliquet, ornare non diam. Proin a eros ac odio consectetur eleifend eget a velit. Ut aliquet tincidunt metus, sit amet elementum nulla convallis quis. Pellentesque commodo ipsum eu sodales ultricies. Vestibulum lacinia, urna id posuere gravida, quam tellus dignissim sem, non congue nisi libero eu turpis. Vivamus massa mauris, aliquet in nisi eu, egestas hendrerit dolor. Quisque sit amet ultrices erat.
                                </p>
                            </div>
                        </div>
                        <div id="service3" class="service-wrapper">

                            <!-----------------------------------------Service 3------------------------------------------------>
                            <img src="home/images/Tooth Jacket.jpg" title="Photo by Andrea Piacquadio from Pexels: https://www.pexels.com/photo/dentist-working-working-on-woman-s-teeth-3779713/"><br>
                            <div class="service-details">
                                <h3>Tooth Jacket (Dental Crown)</h3>
                                <p>
                                    Aenean ac ligula augue. Cras dignissim ultrices ante quis laoreet. Vestibulum ac justo sed metus sagittis interdum. Pellentesque mattis leo at vehicula ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam cursus et elit sit amet interdum. Pellentesque id rhoncus dolor. Etiam laoreet est tortor, vel commodo dolor finibus eget. Praesent tristique arcu id ipsum luctus ultricies. Ut purus orci, molestie non pharetra aliquet, ornare non diam. Proin a eros ac odio consectetur eleifend eget a velit. Ut aliquet tincidunt metus, sit amet elementum nulla convallis quis. Pellentesque commodo ipsum eu sodales ultricies. Vestibulum lacinia, urna id posuere gravida, quam tellus dignissim sem, non congue nisi libero eu turpis. Vivamus massa mauris, aliquet in nisi eu, egestas hendrerit dolor. Quisque sit amet ultrices erat.
                                </p>
                            </div>
                        </div>
                        <div id="service4" class="service-wrapper">

                            <!-----------------------------------------Service 4------------------------------------------------>
                            <img src="home/images/Wisdom Tooth Extraction.jpg" title="Photo by Anna Shvets from Pexels: https://www.pexels.com/photo/dental-check-up-3845737/"><br>
                            <div class="service-details">
                                <h3>Wisdom Tooth Extraction</h3>
                                <p>
                                    Aenean ac ligula augue. Cras dignissim ultrices ante quis laoreet. Vestibulum ac justo sed metus sagittis interdum. Pellentesque mattis leo at vehicula ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam cursus et elit sit amet interdum. Pellentesque id rhoncus dolor. Etiam laoreet est tortor, vel commodo dolor finibus eget. Praesent tristique arcu id ipsum luctus ultricies. Ut purus orci, molestie non pharetra aliquet, ornare non diam. Proin a eros ac odio consectetur eleifend eget a velit. Ut aliquet tincidunt metus, sit amet elementum nulla convallis quis. Pellentesque commodo ipsum eu sodales ultricies. Vestibulum lacinia, urna id posuere gravida, quam tellus dignissim sem, non congue nisi libero eu turpis. Vivamus massa mauris, aliquet in nisi eu, egestas hendrerit dolor. Quisque sit amet ultrices erat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!----------------------------------------SERVICES ENDS HERE---------------------------------------->


    <!----------------------------------------ABOUT US STARTS HERE---------------------------------------->
    <div class="row" id="aboutUs">
        <div class="container-fluid col-sm-12">
            <div id="aboutUsTitle">About Us</div>
            <div id="aboutUsContent">
                Since 1979, we’ve provided and practiced quality dentistry in Lorem ipsum dolor sit amet..
                <br><br>
                Aenean ac ligula augue. Cras dignissim ultrices ante quis laoreet. Vestibulum ac justo sed metus sagittis interdum. Pellentesque mattis leo at vehicula ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam cursus et elit sit amet interdum. Pellentesque id rhoncus dolor. Etiam laoreet est tortor, vel commodo dolor finibus eget. Praesent tristique arcu id ipsum luctus ultricies. Ut purus orci, molestie non pharetra aliquet, ornare non diam. Proin a eros ac odio consectetur eleifend eget a velit. Ut aliquet tincidunt metus, sit amet elementum nulla convallis quis. Pellentesque commodo ipsum eu sodales ultricies. Vestibulum lacinia, urna id posuere gravida, quam tellus dignissim sem, non congue nisi libero eu turpis. Vivamus massa mauris, aliquet in nisi eu, egestas hendrerit dolor. Quisque sit amet ultrices erat.
                <br><br>
                Aenean ac ligula augue. Cras dignissim ultrices ante quis laoreet. Vestibulum ac justo sed metus sagittis interdum. Pellentesque mattis leo at vehicula ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam cursus et elit sit amet interdum. Pellentesque id rhoncus dolor. Etiam laoreet est tortor, vel commodo dolor finibus eget. Praesent tristique arcu id ipsum luctus ultricies. Ut purus orci, molestie non pharetra aliquet, ornare non diam. Proin a eros ac odio consectetur eleifend eget a velit. Ut aliquet tincidunt metus, sit amet elementum nulla convallis quis. Pellentesque commodo ipsum eu sodales ultricies. Vestibulum lacinia, urna id posuere gravida, quam tellus dignissim sem, non congue nisi libero eu turpis. Vivamus massa mauris, aliquet in nisi eu, egestas hendrerit dolor. Quisque sit amet ultrices erat.
                <br>
                We hope to see you soon!
            </div>
        </div>
    </div>
    <!----------------------------------------ABOUT US ENDS HERE---------------------------------------->


    <!----------------------------------------CONTACT US STARTS HERE---------------------------------------->
    <div class="row" id="contactUs">
        <div class="container-fluid col-sm-12">
            <div id="contactUsTitle">Contact Us</div>
            <div id="contactUsContent">
                <div class="address">

                    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d574.134495347889!2d121.05595475891941!3d14.524761196174815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8c82a66d837%3A0x2e6f02e91f26cc3b!2sCaoagas%20Dental%20Clinic!5e0!3m2!1sen!2sph!4v1714976077158!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <br><br>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> <br>
                <a href="example@email.com"> Email Us </a><br>
                <a href="tel:##########">Call Us: *************</a><br>
                <a href="#"> Facebook </a>
            </div>
        </div>
    </div>
    <!--ABOUT US ENDS HERE-->
    </div>
</body>

</html>