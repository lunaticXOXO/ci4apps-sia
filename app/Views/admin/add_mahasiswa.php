<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mahasiswa</h1>
          </div>
        </div>
      </div>
    </section>

   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-md-12">
          
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Mahasiswa</h3>
              </div>
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="masukan nim">
                  </div>
                  <div class="form-group">
                    <label for="Nama Lengkap">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama lengkap">
                  </div>
                  <div class="form-group">
                    <label for="Adress">Alamat</label>
                    <input type="text" name="adress" class="form-control" id="adress" placeholder="masukan alamat">
                  </div>

                  <div class="form-group">
                    <label for="Kota">Kota</label>
                    <input type="text" name="kota" class="form-control" id="kota" placeholder="masukan kota">
                  </div>

                  <div class="form-group">
                    <label for="Telephone">Telephone</label>
                    <input type="text" name="telephone" class="form-control" id="telephone" placeholder="masukan no.telepon">
                  </div>


                  <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input type="datetime-local" id="borndate" name="borndate" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="tgllahir">Jurusan</label>
                    <select name="majorid" id="majorid" class="form-control">
                        <option value="IF">Teknik Informatika</option>
                        <option value="AK">Akuntansi</option>
                        <option value="TI">Teknik Industri</option>
                        <option value="SI">Sistem Informasi</option>
                    </select>
                  </div>
                 
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
         
            </div>
          <div class="col-md-6">

          </div>
        
        </div>
       
      </div>
    </section>
   
  </div>