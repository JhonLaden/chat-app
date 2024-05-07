<?php
include_once 'classes/database.php';
include_once 'classes/user.class.php';

    session_start();

    $user = new User();

    $firstname = htmlentities($_POST['fname']);
    $lastname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['pword']);

    
    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $user->email = $email; // getting the email 
            if(!empty($user->show_email())){ //check if the email is already existed 
                echo $email . ' -This email is already exist';
            } else {
                if(isset($_FILES['image'])){ // if file is uploaded
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder

                    // explode to get extension i.e. jpg/png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);// get extension

                    $extension = ['png', 'jpeg', 'jpg'];// valid extensions
                    if(in_array($img_ext, $extension) === true){
                        $time = time(); //getting the current time
                        //the purpose is so that every img file will have a unique name
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, '../assets/images/'.$new_img_name)){ // if user move files successfully
                            $status = 'Active now';
                            $random_id = rand(time(), 10000000);// creating random ID for user
                            $user->firstname = $firstname;
                            $user->lastname = $lastname;
                            $user->password = $password;
                            $user->status = $status;
                            $user->img = $new_img_name;
                            $user->unique_id = $random_id;

                            if ($user->add_user()) {
                                $emails = $user->show_email();
                                if (!empty($emails)) {
                                    $row = $emails[0]; // Assuming you only need the first row
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo 'success';
                                } else {
                                    echo 'email is empty';
                                }
                            } else {
                                echo 'Something went wrong';
                            }
                        }

                    }else{
                        echo 'Pls select an Image File!';
                    }


                }else{
                    echo 'Please select an image';
                }
            }
        }else{
            echo $email . ' - It is not valid email';
        }
    }else{
        echo 'All input fields are required';
    }

?>