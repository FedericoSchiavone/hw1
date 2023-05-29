<html>
    <head>
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <title>read.it</title>
        <link rel="stylesheet" href="home.css">
        <script src="home.js" defer="true"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Open+Sans&display=swap" rel="stylesheet">

    </head>
    <body>  
        <header>
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div id="textpanel">
                    You know. I know. Reading can be tough at times, especially when all you can think about is pets.
                     <br> <br> Guess what? This crappy page happens to have just the right 
                    solution to your pet-seeking neurons!
                </div>
                <form id="petsearch">
                    <div>Pet It Be!</div>
                    <input type='text' data-pet="" class='searchbox'>
                </form>

                <section id="petspace">
                </section>
              </div>
              <button class="openbtn" onclick="openNav()">&#9776; Fix your dopamine!</button> 
            <img id="logo" src="" alt="">
            <div id="shyfi">Read.it</div>
            <nav>
                <a href="home.php" class="button" data-button="home">Home</a>
                <form id="booksearch">
                    <span>Try and search a book!</span>
                    <input type='text' data-books="" class='searchbox'>
                </form>
                
            </nav>
            <a href="signup.php" class="button">Sign up</a>
            <a href="login.php" class="button">Log in</a>
        </header>

        <section id="page">

        </section>
        
    <footer>
        <div class="button">Federico Schiavone  -  1000016152</div>
    </footer>
    </body>
</html>