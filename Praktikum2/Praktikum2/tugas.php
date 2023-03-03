<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h5>Sistem Penilaian</h5>
          <div class="row ml-3">
            <div class="col-md-8">
              <h2>Belanja Online</h2>
              <form action="hasil_tugas.php" methode="GET"> 
                <div class="form-group row">
                  <label for="customer" class="col-4 col-form-label">Customer</label> 
                  <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Pilih Produk</label> 
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
                      <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
                      <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required="required"> 
                      <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                  <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah Barang" type="text" class="form-control" required="required">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <div class="">DAFTAR HARGA</div>
              <div class="">TV : Rp. 4.200.000</div>
              <div class=""></div>
              <div class=""></div>
              <div class=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>