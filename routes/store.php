<?php

include("../model/DB.class.php");
include("../model/Pasien.class.php");
include("../model/TabelPasien.class.php");
include("../presenter/ProsesPasien.php");

if (isset($_POST['submit'])) {
    $prosesPasien = new ProsesPasien();
    $prosesPasien->createPasien($_POST);
    
    header("location: ../index.php");
}