<!DOCTYPE html>
<html lang="en">
    <?php
        $title = "signup";
        include 'includes/header.php';
    ?>
<body>
    <section class = "signup">
        <div class="container">
            <div class="card mt-4">
                <div class="card-header border-bottom-0">
                    <div class=" display-5 fw-bold text-center ">Sign up</div>
                </div>
                <form class="card-body pt-0" method = "POST" action = "#" enctype = "multipart/form-data">
                    <div class="container border mb-4"></div>
                    <div class="error-text text-center bg-danger text-light p-2 rounded "></div>
                    <div class="group-input has-validation d-flex flex-column gap-3">
                        <div class="row">
                            <div class="col">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" name = "fname" required>
                            </div>
                            <div class="col">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name" name = "lname" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name = "email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name = "pword" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <label for="image" class="form-label">Select Image</label>
                                <input type="file" accept="image/*" class="form-control" id="image" placeholder="Image"  name = "image" required>
                            </div>
                        </div>

                        <input class="btn btn-dark w-100 " type="submit" value = "Continue to Chat"></input>
                    </div>
                </form>

                <div class="card-footer text-center p-2">Already signed up? 
                    <p class = "d-inline-block m-0"><a class="link-offset-2 link-underline link-underline-opacity-0" href="login.php">Login now</a></p>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include 'includes/footer.php';
    ?>

    <script src="javascript/signup.js"></script>
</body>
</html>