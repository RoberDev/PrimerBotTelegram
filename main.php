<?php
    $response = file_get_contents('https://api.telegram.org/bot652331258:AAG_zuq68gOLNiU5y4epfvVI1-BdxiVUgV4/getme');
    $update = json_decode($response, true);

    var_dump($update);
?>