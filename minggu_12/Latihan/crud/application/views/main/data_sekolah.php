  <div class="page-container">
    <div class="container-fluid">
      <?php echo (isset($alert)) ? $alert:'' ;?>
      <div class="card">
        <div class="card-body">
          <h3>Form Data Sekolah</h3>
          <form method="post" action="<?php echo base_url()?>Main/store" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo (!empty($sekolah)) ? $sekolah->id:'';?>">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
              <input type="text" class="form-control" id="nama" name="nama" required="" value="<?php echo (!empty($sekolah)) ? $sekolah->nama:'';?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Sekolah</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required="" value="<?php echo (!empty($sekolah)) ? $sekolah->alamat:'';?>">
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Logo Sekolah (*wajib diisi)</label>
              <input class="form-control" type="file" id="formFile" name="logo" accept=".png,.jpg,.jpeg" aria-describedby="formFile">
              <div id="formFile" class="form-text"><?php echo (!empty($sekolah)) ? $sekolah->logo:'*Klik form untuk mengganti';?></div>
            </div>
            <input type="submit" value="Submit" class="btn btn-success">
            <input type="reset" value="Reset" class="btn btn-warning">
          </form>
        </div>
      </div>
    </div>
  </div>
