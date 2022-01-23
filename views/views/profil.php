<?php
    session_start();
    $id = $_GET['id'];
    $user = get_ID('db', 'users', $id);

    if (isset($_POST['btn'])){
        $f_name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (update('db', 'users', ['full_name', 'email', 'username', 'password'], [$f_name, $email, $username, $password], $id)){
            $_SESSION['username'] = $username;
            ?>
            <script>
                window.location="index.php"
            </script>
<?php
        }

    }
    ?>



<div class="row">
    <div class="col-4 offset-4 my-5">

        <div class="row">
            <marquee behavior="" direction="right">
                <h1>Edit Profil</h1>
            </marquee>
        </div>
        <form action="" method="post">
            <label for="ism"> Fullname:</label>
            <input type="text" id="fullname" placeholder="Fullname..."  name="name" value="<?=$user['full_name']?>" class="form-control">

            <label for="inp" class="mt-3"> Email :</label>
            <input type="email" placeholder="Email..." name="email" value="<?=$user['email']?>" class="form-control">

            <label for="inp" class="mt-3"> Username :</label>
            <input type="text" id="user" placeholder="Create username" value="<?=$user['username']?>" name="username" class="form-control">
            <p class="text-danger" id="usern"></p>

            <label for="paro" class="mt-2"> Password:</label>
            <input type="text"  placeholder="Create password" value="<?=$user['password']?>" name="password" class="form-control">

            <label for="par" class="mt-3"> Password :</label>
            <input type="text" id="password2" placeholder="Password" value="<?=$user['password']?>" class="form-control">


                <button type="submit" id="btn" name="btn" class="btn btn-danger mt-4">Submit</button>

        </form>
    </div>

</div>

