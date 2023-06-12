<?php
require 'fungsi.php';
$id=$_GET["id"];

if (hapus($id)>0){
    echo "
        <script>
            alert('Data telah dihapus');
            document.location.href = 'tampiltodolis.php';
        </script>";
}else {
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'tampiltodolis.php';
        </script>";
}
?>

