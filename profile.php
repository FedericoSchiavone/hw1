<?php 
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: login.php");
        exit;
    }
?>

<html>
    <?php 
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $userid = mysqli_real_escape_string($conn, $userid);
        $query = "SELECT * FROM users WHERE id = $userid";
        $res_1 = mysqli_query($conn, $query);
        $userinfo = mysqli_fetch_assoc($res_1);   
    ?>

    <head>
        <link rel='stylesheet' href='profile.css'>
        <script src='profile.js' defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Read.it - <?php echo $userinfo['name']." ".$userinfo['surname'] ?></title>
    </head> 

    <body>
        <header>
            <div id="mySidepanel2" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div id="textpanel">
                    <p>
                    N.R.P stands for both "Non Remove Policy" and "Not Recycled Panel", with the first implying the absence of any
                    way for an "end" user like you to remove a book from their favorites list.
                    </p>
                    <p>Why such a thing, you ask? Well, the whole point is that, hopefully,
                    sooner or later you're gonna finish what you started...
                    </p>
                    <p>And if starting wasn't even what you wanted, well, you're welcome to Read.it ;D</p>

                </div>
            </div>
            <button class="openbtn" onclick="openNav()">&#9776; N.R.P</button> 
            <nav>
                    <div id="shyfi">Read.it</div>
                    <a href="home.php" class="button">Home</a>
                <div class="userInfo">
                    <div class="avatar" style="background-image: url(<?php echo $userinfo['propic'] == null ? "./images/default_avatar.png" : $userinfo['propic'] ?>)">
                    </div>
                    <h1><?php echo $userinfo['username']?></h1>
                </div>

            </nav>
        </header>
        <section id="page">

        </section>



    </body>
</html>