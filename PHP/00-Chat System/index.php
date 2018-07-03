<?php
session_start();
$_SESSION['username'] = "Jhudeska Ignacia";
//echo var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <title>Chat systeem</title>

</head>
<body>
<div id="wrapper">
    <h1>Welcome <?=$_SESSION['username']; ?>, to my website </h1>

    <div class="chat_wrapper">

        <div id="chat"></div>
        <form action="" method="POST" id="messageFrm">
            <textarea name="message" cols="30" rows="7" class="textarea"></textarea>
        </form>
    </div>
</div>

<script type="text/javascript">
    // # HERE YOU WILL FIND ALL JQUERY IN SYNTAX OF THE PROJECT

    $(function () { // This will be called when the DOM is ready
        //$(document).ready(function(){

        LoadChat();

        function LoadChat() {
            $.post('handlers/messages.php?action=getMessages', function (response) {

                var scrollpos = $('#chat').scrollTop();
                var scrollpos = parseInt(scrollpos) + 520;
                var scrollHeight = $('#chat').prop('scrollHeigt');

                $('#chat').html(response);
                 if (scrollpos < scrollHeight){

                 }else {
                     $('#chat').scrollTop( $('#chat').prop('scrollHeight'));
                 }

            });
        }
        // # this part will  submit the the form
        $('.textarea').keyup(function (e) {
            //alert($(this).val()); # Will alert inserted value
            if (e.which == 13) {  // #this means this will be true whatever  the user press "enter" = 13
                //alert('enter is pressed');
                $('form').submit();
            }
        });


        // # this part will submit the form with jquery
        $('form').submit(function () {

            var message = $('.textarea').val(); // # target the textarea that user insert
            //alert('form is submitted using jquery');
            $.post('handlers/messages.php?action=sendMessage&message=' + message, function (response) {
                if (response == 1) {
                    LoadChat();
                    document.getElementById('messageFrm').reset();
                }
            });
            return false;
        });


        // });
    });

</script>


</body>
</html>