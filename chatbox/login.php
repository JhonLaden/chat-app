<!DOCTYPE html>
<html lang="en">

<?php
    $title = "Login";
    include 'includes/header.php';


?>
<body>
    <section>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header  py-3 border-bottom-0">
                    <div class=" display-5 fw-bold text-center">Log in</div>
                </div>

                <form class="card-body pt-0 " method="POST" action="users.php" >
                    <div class="container border mb-4"></div>

                    <div class="group-input has-validation">
                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control  " id="floatingInput" name="email" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="btn btn-dark w-100 mt-4" type="submit">Continue to Chat</button>
                    </div>
                </form>

                <div class="card-footer text-center p-2">Not yet signed up? 
                    <p class = "d-inline-block m-0"><a class="link-offset-2 link-underline link-underline-opacity-0" href="signup.php">Sign up now</a></p>

                </div>

            </div>
        </div>
    </section>
    
    <?php 
        include 'includes/footer.php';
    ?>
</body>
</html>