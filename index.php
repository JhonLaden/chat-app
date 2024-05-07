<!DOCTYPE html>
<html lang="en">

<?php
    $title = "chatbox";
    include 'includes/header.php';
?>
<body>
    <main>
        <div class="container chatbox">
            <div class=" mt-4 row position-relative">
                <div class="card mx-auto messages position-relative col-lg-8 col-md-10 col-sm-12 " >

    
                    <div class="card-header bg-transparent">

                        <div class="navbar navbar-expand-lg p-0 align-items-center">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="btn btn-primary " data-bs-toggle="collapse" href="#navusers" role="button" aria-expanded="false" aria-controls="navusers">                                        <i class="fa-solid fa-angle-left"></i>
</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item ">
                                    <a href="#" class="nav-link d-flex flex-column align-items-center">
                                        <h5 class = "my-0" >Isaac Raddi</h5>
                                        <p class = "text-success my-0">online</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <div class = "border-primary avatar" >
                                            <img class = "img-fluid rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw2by71iBgjvNqh1ypMnybB8KAkgDmn05R1g&usqp=CAU" alt="profile">
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body p-5 scrollable-element" style =" height: 500px; overflow: auto;">
                        <div class="d-flex align-items-baseline mb-4">
                            <div class = "border-primary avatar" style = "min-width: 50px" >
                                <img class = "img-fluid rounded-circle" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhoO3ryW_ki07FUDTJ6gkVy4vx_T4J8__5-A&usqp=CAU" alt="profile">
                            </div>
                            <div class="pe-2">
                                <div class="card inline-block px-3 py-2 ms-2 bg-primary text-light"  >hello, care to chat with me?</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-baseline  justify-content-end mb-4">
                            <div class="pe-2">
                                <div class = "d-flex justify-content-end">
                                    <div class="card d-inline-block px-3 p-2 m-1  bg-transparent "  >yes</div>
                                </div>
                                <div class = "d-flex justify-content-end">
                                    <div class="card d-inline-block px-3 p-2 m-1  bg-transparent "  >is there something that I can help you with?</div>
                                </div>
                                
                            </div>
                            <div class = "border-primary avatar" style = "min-width: 50px" >
                                <img class = "img-fluid rounded-circle" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw2by71iBgjvNqh1ypMnybB8KAkgDmn05R1g&usqp=CAU" alt="profile">
                            </div>
                        </div>

                        <div class="d-flex align-items-baseline mb-4">
                            <div class = "border-primary avatar" style = "min-width: 50px" >
                                <img class = "img-fluid rounded-circle" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhoO3ryW_ki07FUDTJ6gkVy4vx_T4J8__5-A&usqp=CAU" alt="profile">
                            </div>
                            <div class="pe-2">
                                <div>
                                    <div class="card px-3 p-2 m-1   bg-primary text-light"  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, expedita!</div>
                                </div>
                                <div>
                                    <div class="card px-3 p-2 m-1  d-inline-block bg-primary text-light"  >Lorem ipsum dolor sit amet.</div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="d-flex align-items-baseline  justify-content-end mb-4">
                            <div class="pe-2">
                                <div class = "d-flex justify-content-end">
                                    <div class="card d-inline-block px-3 p-2 m-1  bg-transparent "  >Lorem, ipsum.</div>
                                </div>
                                <div class = "d-flex justify-content-end">
                                    <div class="card d-inline-block px-3 p-2 m-1  bg-transparent "  >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, optio!</div>
                                </div>
                                
                            </div>
                            <div class = "border-primary avatar" style = "min-width: 50px" >
                                <img class = "img-fluid rounded-circle" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw2by71iBgjvNqh1ypMnybB8KAkgDmn05R1g&usqp=CAU" alt="profile">
                            </div>
                        </div>

                            
                    </div>

                    
                    
                    <div class="card-footer bg-light position-absolute start-0 bottom-0 m-0 p-1 w-100">
                        <div class="d-flex">
                            <div class="input-group-text  border-0 ">
                                <button class="btn btn-light "><i class="fas fa-paperclip"></i></button>
                            </div>

                            <textarea class="form-control border-0" style = "resize: none;" placeholder = "type your message..."></textarea>

                            <div class="input-group-text  border-0">
                                <button class="btn btn-light "><i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php 
        include 'includes/footer.php';
    ?>
    
    <script>
        $(document).ready(function(){
            // Scroll to the bottom of the scrollable element
            $('.scrollable-element').scrollTop($('.scrollable-element')[0].scrollHeight);
        });
    </script>
</body>

</html>