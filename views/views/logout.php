<?php
session_start();

if (session_destroy()){?>
    <script>
        window.location="index.php";
    </script>
<?php
}