<?php

include("KontrakView.php");

class CreatePasien implements KontrakView {
	private $tpl;

	// constructor
    public function __construct() {
        
    }

    public function tampil() {
		// Membaca template skin.html
		$this->tpl = new Template("../templates/form.html");

		// Mengganti kode Data dengan data yang sudah diproses
		$this->tpl->replace("DATA_TITLE", "Add Data Pasien");

        $form = "<form action='./store.php' method='post'>";

        $this->tpl->replace("DATA_FORM", $form);

		$this->tpl->replace("DATA_BTN", "Submit");

		// Menampilkan ke layar
		$this->tpl->write();
    }
}