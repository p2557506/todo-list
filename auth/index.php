<html>
    <head>
        <title>todo</title>
        <?include $_SERVER['ROOT_PATH']."includes/head.php"?>
    </head>
    <body style="margin: 0;">
        <h1 style="margin: 0;">Login Page</h1>
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-4">
                    <div class = "row">
                        <!-- username -->
                        <div class = "col-lg-12">
                            <label for="username">
                                Your Username
                            </label>
                            <input class = "form-control" id="username">
                        </div>
                        <!-- password -->
                        <div class = "col-lg-12">
                        <label for= "password">
                                Your Password
                            </label>
                            <input type="password" class = "form-control" id = "password">
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">Login</span>
                            
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">Register</span>
                            
                            </button>
                        </div>

                    </div>
                </div>
                <!-- image -->
                <div class = "col-lg-8" style = "background-image: url('https://images.hdqwalls.com/download/beautiful-evening-landscape-minimal-8k-ag-2560x1440.jpg'); 
                height: 100vh; width: 100vw; background-size:cover; background-position: center;">
                    
                </div>
            </div>

        </div>
    </body>
</html>