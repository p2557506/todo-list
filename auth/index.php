<?include $_SERVER['ROOT_PATH']."includes/dbc.php"?>


<html>
    <head>
        <title>todo</title>
        <?include $_SERVER['ROOT_PATH']."includes/head.php"?>
        
    </head>
    <body>
        <div class = "row" style="background-image: url('https://images.hdqwalls.com/download/beautiful-evening-landscape-minimal-8k-ag-2560x1440.jpg'); height:100vh;background-position: center;">
            <div style="margin: auto;">
                <div class = "row">
                    <img src="<?echo $baseURL?>includes/media/logo/logo.png"  alt="logo" style="margin: auto; width: 100px!important; height:100px!important;"  >
                </div>
                <div class = "row">

                    <div class="offset-lg-4 col-lg-4">
                        <h1 class = "text-center">Login Page</h1>
                    </div>
                    </div>
                    <div id = "alert-auth" class="alert alert-danger offset-lg-4 col-lg-4" role="alert">
                        Incorrect Username or Password!
                    </div>
                    <div class = "row">
                    <div class="offset-lg-4 col-lg-4" style="background-color: rgba(0,0,255,0.2);">
                        <div class = "row">
                            <!-- username -->
                            <div class = "col-lg-12">
                                <label for="username" id="test">
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
                            <div class = "col-lg-12">                                
                                <button id = "btn-login" class="btn btn-primary btn-block mt-2" style="width: 100%;">
                                    Login
                                </button>
                            </div>
                            <div class = "col-lg-12">                                
                                <button class="btn btn-primary btn-block mt-2 mb-2" style="width: 100%;">
                                    Register
                                </button>
                            </div>

                        </div>
                    </div>
                </div>              
            </div>              
            <?include $_SERVER['ROOT_PATH']."includes/footer.php"?>
        </div>

        <script>
            $( "#alert-auth" ).hide();
            
            $( '#btn-login').click( function() {
                $( "#alert-auth").show();
            });
        </script>
    </body>
</html>