<?php

include('../config.php'); // # provides access to the database

switch ($_REQUEST['action']) {

    // # This part will match the right case
    case "sendMessage":
        // echo 'sending response back from php page';
        //global =$db;

        session_start();
        $query = $db->prepare("INSERT INTO messages SET  user=?, message=?"); // # Inserted typed message by user in the database
        $run = $query->execute([$_SESSION['username'], $_REQUEST['message']]);

        if ($run) {
            echo 1;
            exit;
        }
        break;


    case "getMessages":
        //echo 'working';
        $query = $db->prepare("SELECT * FROM messages");
        $run = $query->execute();
        $rs = $query->fetchAll(PDO::FETCH_OBJ );

        $chat = '';
        foreach ( $rs as $message){
                $chat .= $message->message. '<br />';
                $chat .= '<div class="single-message">
                            <strong>'.$message->user.':</strong> '.$message->message.'
                            <span>'.date('m-d-Y h:i a', strtotime($message->date)).'</span>
                            </div>';
        }
        echo $chat;
        //echo var_dump($rs);
        break;

}

