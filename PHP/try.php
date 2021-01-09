<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT % FROM books ORDER BY id ASC");

?>

<html>
    <body>
        <style>
        img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 200px;
    }

        .p2 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        padding-left: 10px;
    }

        .p3 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        padding-left: 10px;
        color: blue;
    }
        </style>

<div class="container">

    <center>
        <h1>Koleksi Buku Peribadi</h1>
        <table>
            <tr><td><img src='books/book1.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Joanne Hichens </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td><td><img src='books/book2.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Robert Johnson </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td><td><img src='books/book4.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Razali Ayob </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td></tr><tr><td><img src='books/book5.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Daniel Errico </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td><td><img src='books/book6.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Intan Mawardah Ali </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td><td><img src='books/book7.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Nur Mazni Ibrahim </span>
                <br> <i>Text book </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td></tr><tr><td><img src='books/book8.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Azidah Aziz </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td><td><img src='books/book9.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Mohd Izhair Abdullah </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td><td><img src='books/book10.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Muadz Aliman </span>
                <br> <i>Fiction </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td></tr><tr><td><img src='books/book11.JPG'>
                <p class='p2'>Penulis:<span class='p3'> Alia Nina </span>
                <br> <i>Text book </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td><td><img src='../books/book3.jpg'>
                <p class='p2'>Penulis:<span class='p3'> Loh Wai Long </span>
                <br> <i>Text book </i>
                </p> 
                <center><button type="button">Details</button> </center>                                 
                               
                </td>        
                </table>
    </center>
</div>

</body>
</html>
