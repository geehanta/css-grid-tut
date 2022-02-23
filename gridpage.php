<!DOCTYPE Html>
<html>
    <head>
        <title>Flexbox</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="gridstyles.css">
    </head>
    <body>
        <main>
            <header>
                <nav>
                    <ul>
                        <li><link a href="aboutUs.php">About Us</a>  </li>
                    </ul>
                </nav>

            </header>
            <article class="cardContainer">
                <div class="card1" id="card1shadow">   
                    <div id="box1"></div>
                    <div class="box2"></div>
                    <div class="box3">
                    <form class="border" method="get" action="loginSchool.php">
        <br>
        <br>
        <label for ="name">Name</label>
        <input type="text" name="name"> <br><br>
        <label for ="adm">Reg No</label>
        <input type="text" name="adm"> <br><br>
        <label for ="password">Password</label>
        <input type="text" name="pwd"> <br>
        <br>
        
        <button class="btn" type="submit">Sign In</button>
        <br>
        <br>
        <p style="padding: 10px;">You don't have an account? <a href="inputSchool.php">Register</a></p>
    </form>
    <?php 
        $s1name =$_GET["name"];
        $s1adm =$_GET["adm"];
        $s1pwd =$_GET["pwd"];
       
    
        echo "You are $s1name <br>";
        echo "of admission number $s1adm <br>";
        echo "Remember to change this immediately $s1pwd <br><br>";
        ?>
                    </div>
                        </div>
            </article>
            <footer>

            </footer>
        </main>
    </body>
</html>