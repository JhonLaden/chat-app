<?php
    session_start();

    include_once 'classes/database.php';
    include_once 'classes/user.class.php';


    $user = new User();
    $accounts = $user->show_users_online();

    if((count($accounts)) > 1){
        foreach($accounts as $value){
            if(!($value['unique_id'] == $_SESSION['unique_id']) && $value['status'] == 'Active now'){ 
                    ?>
                <div class="item">
                    <a href="index.php" class=" card-body d-flex justify-content-between align-items-center  link-offset-2 link-underline link-underline-opacity-0">
                        <div class = "d-flex align-items-center gap-3 ">
                            <div style = "border-radius: 50%; height: 50px; width: 50px">
                                <img class = "img-fluid rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRA9cXKhSnGle8P450as15Rgza9wprO3B_IQA&usqp=CAU" alt="">
                            </div>
                            <div >
                                <div class = "lead"><?php echo $value['firstname'] . ' '. $value['lastname']?></div>
                                <div class = "">No message available</div>
                            </div>
                        </div>
                        <div class = "p-0 m-0 d-inline-block">
                            <i class="fa-solid fa-circle text-success fs-6"></i>
                        </div> 
                    </a>
                </div> 
        <?php } 
            }
        ?>
    <?php
    }else{?>
        <div class ="text-center">No users are available to chat</div>
    <?php
    }

        
    
?>