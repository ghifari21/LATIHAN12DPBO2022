<?php

include("../model/Template.class.php");
include("../model/DB.class.php");
include("../model/Pasien.class.php");
include("../model/TabelPasien.class.php");
include("../view/EditPasien.php");

if (isset($_GET['id'])) {
    $edit = new EditPasien($_GET['id']);
    $edit->tampil();
}