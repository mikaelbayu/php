<?php
require 'fungsi.php';
$mahasiswa = tampilData($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    a {
        display: inline-block;
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 3px;
    }

    a:hover {
        background-color: #45a049;
    }
</style>



<body>
    <h1>
    Daftar To DO LIST

    </h1>
    <table border="1" cellpadding="10" cellpacing="0">
    <tr>
        <td>
            No.
        </td>
        <td>
            todolist
        </td>
        <td>
            Aksi
        </td>
    </tr>
    <?php
    $n=1;
    ?>
    <?php foreach($mahasiswa as $row) :?>

    <tr>
        <td>
            <?php echo $n++?>
        </td>
        <td>
            <?=$row["ToDoList"]; ?>
        </td>
        <td>
            <a href="hapus.php?id=<?=$row["id"];?>">hapus</a>
            <a href="">ubah</a>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
</body>
</html>
