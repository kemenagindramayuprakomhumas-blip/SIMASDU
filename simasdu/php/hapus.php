<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM jawaban WHERE id = $id";
}
    if ($con->query($sql)) {
        echo "<script>
            alert('Data berhasil dihapus!');
            window.history.back();
        </script>";
        exit();
    }
    
?>
