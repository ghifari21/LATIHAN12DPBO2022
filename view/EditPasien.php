<?php

include("KontrakView.php");
include("../presenter/ProsesPasien.php");

class EditPasien implements KontrakView {
    private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
    private $id;
	private $tpl;

    // constructor
    public function __construct($id) {
        $this->id = $id;
        $this->prosespasien = new ProsesPasien();
    }

    public function tampil() {
        // get the record that user want to edit
        $this->prosespasien->getDetailPasien($this->id);
		// Membaca template skin.html
		$this->tpl = new Template("../templates/form.html");

		// Mengganti kode Data dengan data yang sudah diproses
		$this->tpl->replace("DATA_TITLE", "Edit Data Pasien");

        $form = "<form action='./update.php' method='post'>
                <input type='hidden' name='id' value='" . $this->prosespasien->getId(0) . "'>";

        $this->tpl->replace("DATA_FORM", $form);

		$this->tpl->replace("DATA_BTN", "Update");

        // input all the column from the record that user want to edit to the form
        $this->tpl->replace("DATA_NIK", $this->prosespasien->getNik(0));
        $this->tpl->replace("DATA_NAMA", $this->prosespasien->getNama(0));
        $this->tpl->replace("DATA_TEMPAT", $this->prosespasien->getTempat(0));
        $this->tpl->replace("DATA_TL", $this->prosespasien->getTl(0));
        $this->tpl->replace("DATA_EMAIL", $this->prosespasien->getEmail(0));
        $this->tpl->replace("DATA_TELP", $this->prosespasien->getTelp(0));
        $lk = $this->prosespasien->getGender(0) === "Laki-laki" ? "checked" : "";
        $pr = $this->prosespasien->getGender(0) === "Perempuan" ? "checked" : "";
        $this->tpl->replace("DATA_LK", $lk);
        $this->tpl->replace("DATA_PR", $pr);

		// Menampilkan ke layar
		$this->tpl->write();
    }
}