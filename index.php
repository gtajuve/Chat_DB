<?php
session_start();
if(isset($_POST['name'])){
    $_SESSION['user']=trim(htmlspecialchars($_POST['name']));
}elseif(!isset($_SESSION['user'])){
    echo 'Въведи потребител';
}
if(isset($_GET['logout'])){
    header('Location:logout.php');
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
</head>
<body>
    <?php if(!isset($_SESSION['user'])){?>
        <?php require_once('login_form.php') ?>
    <?php } ?>
        <div id="chat">
            <div id="menu">
                <p class="welcome">Welcome,<?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?>
                      </p>
                <p class="logout"><a href="" id="exit">Изход</a></p>
                <p class="logout"><a href="reset.php" id="">Reset</a></p>

                <div style="clear:both;"></div>
            </div>
            <div id="chatbox">

            </div>
            <form action=""  method="">
                <input type="text" name="usermsg" id="usermsg" size="60">
                <input type="submit" name="submit" id="submitbtn" value="Изпрати">
            </form>
        </div>
</body>
</html>