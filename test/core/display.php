
<?php

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
$result = $mysqli->query ("SELECT * FROM data") or die(mysqli_error($mysqli));

function pre_r ($array) {

    echo '<pre>' ;
    print_r($array);
    echo '<pre>' ;
}

    return
    ?>