<?php

if ( isset($_SESSION["login-pelanggan"]) && isset($_SESSION["pelanggan"]) || isset($_SESSION["login-agen"]) && isset($_SESSION["agen"]) || isset($_SESSION["login-admin"]) && isset($_SESSION["admin"]) ) {
    echo "
        <script>
            alert('Anda Sudah Login !');
            document.location.href = 'index.php';
        </script>
    ";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div id="body">
        <h3>LOGIN</h3>
        <div>
            <table border=1 cellpadding=40>
                <tr>
                    <td><a href="login-pelanggan.php">Login Pelanggan</a></td>
                    <td><a href="login-agen.php">Login Agen</a></td>
                    <td><a href="login-admin.php">Login Admin</a></td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>