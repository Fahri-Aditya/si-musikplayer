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
                <a href="index.php"class="active">Home</a> 
            </li>
            <li>
                <a href="index.php?page=login_form ">Login</a> 
            </li>
          
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_index.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 M.FAHRI ADITYA NASUTION
    </footer>
      
   
    </main>
</body>
</html>