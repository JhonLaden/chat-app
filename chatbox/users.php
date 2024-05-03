<!DOCTYPE html>
<html lang="en">
    <?php
        $title = "Users";
        include 'includes/header.php';
    ?>
<body>
    <section>
        <div class="container">
            <div class="card mt-4 pb-3">
                <div class="card-body d-flex justify-content-between align-items-center pb-0">
                    <div class = "d-flex align-items-center gap-3 ">
                        <div class = "" style = "border-radius: 50%; height: 50px; width: 50px">
                            <img class = "img-fluid rounded-circle" src="https://wallpapers.com/images/hd/anime-profile-picture-zyy6uhs8a4pas8r7.jpg" alt="">
                        </div>
                        <div >
                            <div class = "lead">Jhon Laden</div>
                            <div class = "h7">Online</div>
                        </div>
                    </div>
                    <p class = "p-0 m-0 d-inline-block">
                        <a class="btn btn-dark link-offset-2 link-underline link-underline-opacity-0" href="login.php">Logout</a>
                    </p>
                    
                </div>
                <div class="card-body group-control">
                    <div class="border mb-4"></div>
                    <div class = "d-flex align-items-center">
                        <div class="input-group">
                                <input type="search" class="form-control " id="Search" placeholder="Select a user to start chat" >
                        </div>
                        <a class = "btn"><i class="fa-solid fa-magnifying-glass "></i></a>
                    </div>
                    
                </div>

                <div class="d-flex flex-column ">
                    <a href="index.php" class=" card-body d-flex justify-content-between align-items-center  link-offset-2 link-underline link-underline-opacity-0">
                        <div class = "d-flex align-items-center gap-3 ">
                            <div style = "border-radius: 50%; height: 50px; width: 50px">
                                <img class = "img-fluid rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRA9cXKhSnGle8P450as15Rgza9wprO3B_IQA&usqp=CAU" alt="">
                            </div>
                            <div >
                                <div class = "lead">Isaac Raddi</div>
                                <div class = "">No message available</div>
                            </div>
                        </div>
                        <div class = "p-0 m-0 d-inline-block">
                            <i class="fa-solid fa-circle text-success fs-6"></i>
                        </div> 
                    </a>

                    
                </div>
                
                
                
            </div>
        </div>
    </section>
</body>
</html>