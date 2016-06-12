$query  = ""
    ."SELECT                        "
    ."    username                  "
    ."FROM                          "
    ."    users                     "
    ."WHERE                         "
    ."    username = '$username'    "
    ."AND                           "
    ."    password = '$password'    ";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) != 0){
    $_SESSION['user_logged_in'] = $username;
}