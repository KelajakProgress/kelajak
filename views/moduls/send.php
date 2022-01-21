<?php
    session_start();
    require_once 'db.php';

    if (isset($_POST['btn'])){
        $f_name = $_POST['fulname'];
        $email = $_POST['email'];
        $u_name = $_POST['username'];
        $password = $_POST['parol'];
        $res = insert('db', 'users', ['full_name', 'email', 'username', 'password'], [$f_name, $email, $u_name, $password]);
        if ($res == 1){
            $_SESSION['username'] = $u_name;?>
            <script>
                window.location="../../index.php";
            </script>
<?php
        }
    } else{

    }