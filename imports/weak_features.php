$query  = ""
    ."SELECT                        "
    ."    $choosenText AS myText,   "
    ."    name                      "
    ."FROM                          "
    ."    report                    "
    ."ORDER BY                      "
    ."    name $sorting             ";
mysqli_query($connection, $query);