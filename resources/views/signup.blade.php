<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="css/registerstyle.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div id="container" class="container">
    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <i class='bx bx-mail-send'></i>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" placeholder="Confirm password">
                    </div>
                    <a href="/dashboard/profile">
                    <button class="register-button">
                        Sign up
                    </button>
                    </a>
                    <p>
							<span>
								Already have an account?
							</span>
                        <b onclick="toggle()" class="pointer">
                            Sign in here
                        </b>
                    </p>
                </div>
            </div>

        </div>
        <!-- END SIGN UP -->
        <!-- SIGN IN -->
        <div class="col align-items-center flex-col sign-in">
            <div class="form-wrapper align-items-center">
                <div class="form sign-in">
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <a href="/dashboard/profile">
                    <button class="log-in-button">
                        Sign in
                    </button>
                    </a>
                    <p>
                        <b>
                            Forgot password?
                        </b>
                    </p>
                    <p>
							<span>
								Don't have an account?
							</span>
                        <b onclick="toggle()" href="/" class="pointer">
                            Sign up here
                        </b>
                    </p>
                </div>
            </div>
            <div class="form-wrapper">

            </div>
        </div>
        <!-- END SIGN IN -->
    </div>
    <!-- END FORM SECTION -->
    <!-- CONTENT SECTION -->
    <div class="row content-row">
        <!-- SIGN IN CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="text sign-in">
                <h2>
                    Welcome
                </h2>

            </div>
            <div class="img sign-in">

            </div>
        </div>
        <!-- END SIGN IN CONTENT -->
        <!-- SIGN UP CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="img sign-up">

            </div>
            <div class="text sign-up">
                <h2>
                    Join to us
                </h2>

            </div>
        </div>
        <!-- END SIGN UP CONTENT -->
    </div>
    <!-- END CONTENT SECTION -->
</div>

<script>
    let container = document.getElementById('container')

    toggle = () => {
        container.classList.toggle('sign-in')
        container.classList.toggle('sign-up')
    }

    setTimeout(() => {
        container.classList.add('sign-in')
    }, 200)
</script>

</body>
</html>
