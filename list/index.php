<?include $_SERVER['ROOT_PATH']."includes/dbc.php"?>
<?
if(!$_SESSION["uid"]){

    header('Location: ' . $baseURL . 'auth/');

}
?>

<html>
    <head>
        <title>list</title>
        <?include $_SERVER['ROOT_PATH']."includes/head.php"?>
        
    </head>
    <body>
        <?include $_SERVER['ROOT_PATH']."includes/php/nav.php"?>
        <div class = "container">
            <div class ="row">
                <div class = "col-md-3">

                <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">Completed</button>
                <button type="button" class="btn btn-primary">Incompleted</button>
                <button type="button" class="btn btn-primary">Not Started</button>


                </div>

                </div>
                <div class = "col-md-9">
                <div class="table-responsive">
                    <table class="table">
                    
                    <thead>
                        <tr>
                        <th >Title</th>
                        <th >Creator</th>
                        <th >Date created</th>
                        <th >Tasks completed</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>
                    </div>

                </div>

            </div>

        </div>
        <?include $_SERVER['ROOT_PATH']."includes/footer.php"?>
    </body>
</html>