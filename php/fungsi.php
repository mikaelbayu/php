<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function tampilData() {
    global $conn;
    $query = "SELECT * FROM todolist";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tampil($data) {
    global $conn, $namaTabel;
   
    $todolist = htmlspecialchars($data["todolis"]);
    $iduser=htmlentities($data["id"]);

    $query = "INSERT INTO  todolist (id, ToDoList) VALUES ('', '$todolist')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function tambahUser($tabel) {
        global $conn;
        
        $nama = strtolower($tabel["nama"]);
        $pass = mysqli_real_escape_string($conn, $tabel["password"]);
        $query_select = "SELECT * FROM user WHERE nama = '$nama'";
        $result = mysqli_query($conn, $query_select);
        if (mysqli_num_rows($result) > 0) {
            // Username sudah ada, berikan peringatan

            echo "
            <script>
                alert('selamat datang kembali');
                document.location.href = 'menuUtama.php';
            </script>";
        } else {
            // Username belum ada, lakukan penyisipan data
            $query_insert = "INSERT INTO user (id, nama, password) VALUES ('', '$nama', '$pass')";

            mysqli_query($conn, $query_insert);
            echo "
        <script>
            alert('Data telah disimpan');
            document.location.href = 'menuUtama.php';
        </script>";
    }
    mysqli_query($conn, $query_insert);
    $iduser = mysqli_insert_id($conn);
    $_SESSION['id_user'] = $iduser;
}


function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM todolist WHERE id = $id");
    return  mysqli_affected_rows($conn);
}
?>