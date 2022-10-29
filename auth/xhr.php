<?
include $_SERVER['ROOT_PATH']."includes/dbc.php";



if($_POST['action']=='verify_user'){
    $username = $_POST['userName'];
    $password = $_POST['password'];
    
    $usersq = mysqli_query($connection, "SELECT u_id  FROM `users` WHERE u_username = '$username' and u_password = '$password'");

    while($user = mysqli_fetch_assoc($usersq)){
// Set session variables
        $_SESSION["uid"] = $user;
        die(json_encode(["result" => true]));
    }
    die(json_encode(["result" => false]));
}

else if($_POST['action'] == 'create_user'){
    $username = $_POST['userName'];
    $password = $_POST['password'];

    mysqli_query($connection, "INSERT INTO users (u_username, u_password)
    VALUES ('$username', '$password'); ") or die(json_encode(["result" => false]));

    $_SESSION["uid"] = mysqli_insert_id($connection);

    die(json_encode(["result" => true]));
}