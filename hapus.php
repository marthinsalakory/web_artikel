<?php

if (isset($_GET['hapus_artikel'])) {
    header('Location: index.php');
    exit;
} else if (isset($_GET['hapus_user'])) {
    header('Location: users.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
