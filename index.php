<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> API </title>
        <link rel="stylesheet" href="/styles/styles.css" />
    </head>
    <body>
        <div>
            <p> Enter a string : </p>
            <input type="text" name="string" placeholder="string"></input>
        <?php 
        include("api1.php"); 
        ?>
        </div>
        <div>
            <p> Enter a number : </p>
            <input type="text" name="a" placeholder="number"></input>
            <p> Enter a number : </p>
            <input type="text" name="b" placeholder="number"></input>
            <p> Enter a number : </p>
            <input type="text" name="c" placeholder="number"></input>
        <?php include("api2.php") ?>
        </div>
        <div>
            <p> Enter a password : </p>
            <input type="text" name="password" placeholder="pass"></input>
        <?php> include("api3.php") ?>
        </div>
        <div>
            <p> Enter a date : </p>
            <input type="" name="password" placeholder="dd/mm/yyyy"></input>
        <?php> include("api4.php") ?>
        </div>
    </body>
</html>