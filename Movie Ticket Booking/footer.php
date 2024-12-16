<footer>
    <div class="foots container-fluid">
        <div class="foot1">
            <ul class="ul-links">
                <li><br>
                    <h4>OUR ADDRESS</h4>
                </li>
                <li>
                    <p>Parul University Campus, Waghodia, Limda, Gujarat 391760, Ground opposite to Temple</p>
                </li>
                <li><a href="#"><i class="fa-solid fa-phone"></i> +91-2668-260201</a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i> info@paruluniversity.ac.in</a></li>
            </ul>
        </div>
        <div class="foot2">
            <ul class="ul-links">
                <li><br>
                    <h4>OUR LINK</h4>
                </li>
                <li><a href="index.php#pu-movies">Movies</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="foot3">
            <ul class="ul-links">
                <li><br>
                    <h4>OTHER LINK</h4>
                </li>
                <li><a href="bookinghistory.php">Booking History</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="foot4">
            <ul class="ul-links">
                <li><br>
                    <h4>CONNECT WITH US</h4>
                </li>
                <li><img src="images/logo.png" alt="logo" class="logo"></li>
                <li><br><a href="#"><i class="fa-brands fa-square-facebook fa-lg"></i></a>&nbsp;&nbsp;&nbsp;<a
                        href="#"><i class="fa-brands fa-square-instagram fa-lg"></i></a>&nbsp;&nbsp;&nbsp;<a href="#"><i
                            class="fa-brands fa-square-twitter fa-lg"></i></a></li>
            </ul>
        </div>
    </div>
    <br>
    <hr class="hr">
    <p class="copyright"><em>&#169; Copyright 2024. All rights reserved by Watchers Park</em></p>
    <br>
</footer>

<!-- SIGN UP -->

<div class="modal fade" id="popup-signup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="login_register.php">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">USER LOGIN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <br>
                    <p><input type="text" name="email_username" id="email" class="popup-email"
                            placeholder="Enter email or username" required></p>
                    <span class="text-danger" name="err_eu"></span><br>
                    <p><input type="password" name="password" id="password" class="popup-email"
                            placeholder="Enter your password" required></p>
                    <span class="text-danger" name="err_pd"></span><br>
                    <p><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Forgot password ?</a></p><br>
                    <span></span>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-success" type="submit" name="login">LOGIN</button>
                    <button class="btn btn-warning" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                        type="button">SIGN UP</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="forgotpassword.php">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">FORGOT PASSWORD</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <br>
                    <p><input type="email" name="email" id="email" class="popup-email"
                            placeholder="Enter your email" required></p>
                    <span></span><br>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-success" type="submit" name="send-reset-link">SUBMIT</button>
                    <button class="btn btn-warning" data-bs-target="#popup-signup" data-bs-toggle="modal"
                        type="button">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" id="register-btns" action="login_register.php">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">SIGN UP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <br>
                    <p><input type="text" name="fullname" id="name" class="popup-email"
                            placeholder="Enter your name" oninvalid="this.setCustomValidity('Please enter your name')" oninput="this.setCustomValidity('')" required></p>
                    <span></span><br>
                    <p><input type="text" name="username" id="username" class="popup-email"
                            placeholder="Enter your Username" oninvalid="this.setCustomValidity('Please enter username')" oninput="this.setCustomValidity('')" required></p>
                    <span></span><br>
                    <p><input type="text" inputmode="numeric" name="phone" id="phone" class="popup-email"
                            placeholder="Enter your phone number" pattern="\w{10,10}" oninvalid="this.setCustomValidity('Please enter phone number properly')" oninput="this.setCustomValidity('')" required></p>
                    <span id="err-phone" class="text-danger"></span><br>
                    <p><input type="email" name="email" id="email" class="popup-email"
                            placeholder="Enter your email" oninvalid="this.setCustomValidity('Please enter your email properly')" oninput="this.setCustomValidity('')" required></p>
                    <span></span><br>
                    <p><input type="password" name="password" id="password" class="popup-email"
                            placeholder="Enter your password" minlength="8" oninvalid="this.setCustomValidity('Password must be at least 8 characters or greater')" oninput="this.setCustomValidity('')" required></p>
                    <span id="err-pass" class="text-danger"></span><br>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                <button class="btn btn-success" type="submit" name="register" onclick="submission()">SUBMIT</button>
                    <button class="btn btn-warning" data-bs-target="#popup-signup" data-bs-toggle="modal"
                        type="button">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
</script>

<!-- end sign up -->


</div>
</body>

</html>