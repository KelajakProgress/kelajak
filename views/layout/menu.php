<div class="navbar navbar-dark  navbar-expand-md">
    <a href="#" class="navbar-brand"> Sinaw</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mt-2" id="mynavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="?view=home" class="nav-link hover">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link hover">Courses</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link hover">Webinar</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link hover mr-5">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eng
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Uz</a></li>
                    <li><a class="dropdown-item" href="#">Rus</a></li>
                </ul>
            </li>
            <?php if (!isset($_SESSION['username'])):  ?>
                <li class="nav-item">
                    <a href="?view=sign" class="btn btn-outline-danger">Signin</a>

                </li>
                <li class="nav-item">
                    <a href="?view=login" class="btn btn-danger mr">Login</a>
                </li>
            <?php else:?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-capitalize" href="#" id="drp" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=$_SESSION['username']?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="drp">
                        <li><a class="dropdown-item text-success" href="?view=profil&id=<?=$user['id']?>">Edit Profil</a></li>
                        <li><a class="dropdown-item text-danger" href="?view=logout">LogOut</a></li>

                    </ul>

                </li>

            <?php endif; ?>
        </ul>
    </div>
</div>
</div>
</div>
<!-- End navbar -->
