<?php

include("../model/DB.class.php");
include("../model/Pasien.class.php");
include("../model/TabelPasien.class.php");
include("../presenter/ProsesPasien.php");

if (isset($_GET['id'])) {
    $prosesPasien = new ProsesPasien();
    $prosesPasien->deletePasien($_GET['id']);
    
    header("location: ../index.php");
}