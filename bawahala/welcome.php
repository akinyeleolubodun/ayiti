<?php

    session_start();

    include('connect.php');
    include('functions.php');
    include('nav.php');

    if (!isset($_SESSION['fname'])) {
        header('Location: login.php');
        exit;
    }

    ?>

<h1>Learning isset and include</h1>
<h1>You are highly welcome <?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ; ?>