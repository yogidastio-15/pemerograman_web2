<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";


?>
 <div class="container">
        <h2>From Input Nilai Mahasiswa</h2>
        

            <form action="from_hasil.php" method="GET">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="UI/UX">UI/UX</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Basis Data">Basis Data</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="Masukan Nilai UTS" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="uas" name="uas" placeholder="Masukan Nilai UAS" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
    </div>
    <?php require_once "layouts/footer.php"; ?>