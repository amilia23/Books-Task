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
<?php
    $i = 1;
	while ($user_data = mysqli_fetch_array($result)) {
?>
<div class="container">
    <tr>
        <td>
            <img src = "../books/><?php echo $user_data['picture'];?>">

            <p class='p2'>Penulis:<span class='p3'><?php echo $user_data['author'];?></span>

            <?php
                 echo $user_data['category'];
            ?> 

            <center><button type = "button">Details</button></center>

        </td>
    </tr>
</div>

<?php
    $i++;
}
?>

</table>
</body>
</html>





        
