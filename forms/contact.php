<?php
    echo '<pre>';
    print_r($_POST);
    echo'<pre>';

    $sent_status = mail($_POST['email'], 'Sent from test PHP application', $_POST['message']);

    if ($sent_status) {
        echo 'Message was delivered';
    } else {
        echo 'Email was not sent';
    }
?>
