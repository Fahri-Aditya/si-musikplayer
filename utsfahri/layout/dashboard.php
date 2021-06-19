<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman Web Lanjutan</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/backgrounds.css">
</head>
<body>
    <main>
    <header>
        <img src="<?php echo ASSET; ?>image/musikk.jpg" height="250 " width="100%" alt="IMG" >
        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">dashboard</a> 
            </li>
            <li>
                <a href="indexa.php">Artist</a> 
            </li><li>
                <a href="index1.php">Album</a> 
            </li><li>
                <a href="index2.php">Played</a> 
            </li><li>
                <a href="index3.php">Track</a> 
            </li>
            <li>
                <a href="login_logout.php ">Logout</a> 
            </li>
          
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_dashboard.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 M.FAHRI ADITYA NASUTION
    </footer>
      
   
    </main>
</body>
</html>