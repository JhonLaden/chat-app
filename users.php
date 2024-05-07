<?php 
    session_start();
    include 'php/classes/user.class.php';
    if(isset($_SESSION['unique_id'])){
        $user = new User();
        $accounts = $user->show();
        foreach($accounts as $keys => $value){ 
            if($_SESSION['unique_id'] == $value['unique_id']){ // get the account with the same id
                $logged_user = $value;
            }
        }
   
    }else{
        header('location: login.php');
    }

?>



<!DOCTYPE html>
<html lang="en">
    <?php
        $title = "Users";
        include 'includes/header.php';
    ?>
<body>
    <section class = "users">
        <div class="container">
            <form class="card mt-4 pb-3">
                <div class="card-body d-flex justify-content-between align-items-center pb-0">
                    <div class = "d-flex align-items-center gap-3 ">
                        <div class = "" style = "border-radius: 50%; height: 50px; width: 50px">
                            <img class = "img-fluid rounded-circle" src="assets/images/<?php echo $logged_user['img'] ?>" alt="">
                        </div>
                        <div >
                            <div class = "lead " style = "width: 100%; min-width: 50px; max-width: 200px; overflow: hidden;white-space: nowrap; text-overflow: ellipsis;"><?php echo $logged_user['firstname'] .' '. $logged_user['lastname']?></div>
                            <div class = "h7"><?php echo $logged_user['status']?></div>
                        </div>
                    </div>
                    <p class = "p-0 m-0 d-inline-block">
                        <a class="btn btn-dark link-offset-2 link-underline link-underline-opacity-0" href="php/logout_tool.php">Logout</a>
                    </p>
                    
                </div>
                <div class="card-body group-control" method = "GET">
                    <div class="border mb-4"></div>
                    <div class = "d-flex align-items-center">
                        <div class="input-group">
                                <input type="search" class="form-control " id="Search" placeholder="Select a user to start chat" >
                        </div>
                        <a class = "btn"><i class="fa-solid fa-magnifying-glass "></i></a>
                    </div>
                    
                </div>

                <div class="users-list d-flex flex-column overflow-auto" style = "height: 400px">
                    
                </div>
                
                
            </form>
        </div>
    </section>
    <!-- script -->
    <?php 
        include 'includes/footer.php';
    ?>
    <script src = "javascript/users.js"></script>
</body>
</html>