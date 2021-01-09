<html>
    <body>
        <center><h1>Koleksi Buku Peribadi</h1></center>

<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM books ORDER BY id ASC");

?>

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
<table>
    <tr>
<?php
    $i = 0;
	while ($user_data = mysqli_fetch_array($result)) {
$i++;
?>
        <td style="margin: 10px;">
            <img src = "../books/<?php echo $user_data['picture'];?>">

            <p class='p2'>Penulis:<span class='p3'><?php echo $user_data['author'];?></span>

            <i><?php
                 echo $user_data['category'];
            ?> </i>

            <center><button type = "button">Details</button></center>
<?php  if ($i % 3 == 0) { ?>
</td></tr><tr>
<?php continue;  } ?>
        </td>
<?php
}
?>
    </tr>
</table>
</div>
</body>
</html>





        
