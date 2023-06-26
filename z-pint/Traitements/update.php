<?php
require_once 'config.php';
if (isset($_POST['update'])) {
    $id = htmlspecialchars($_GET['img_id_update']);
    header('Location: ../update.php?reg_err=' . $id . '');
    die();
};

