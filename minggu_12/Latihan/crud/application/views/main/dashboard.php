  <div class="page-container">
    <div class="container-fluid">
      <?php echo (isset($alert)) ? $alert:'' ;?>
      <div class="card">
        <div class="card-body">
          <div class="row mb-4">
              <div class="col-auto me-auto">
                  <h3>Tabel Data Sekolah</h3>
              </div>
              <div class="col-auto">
                  <a href="<?php echo base_url()?>Main/data_sekolah" class="btn btn-primary">
                      Tambah Data
                  </a>
              </div>
          </div>
          <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($sekolah as $row){ ?>
                  <tr>
                    <th scope="row"><?php echo $no++;?></th>
                    <td><?php echo $row->nama;?></td>
                    <td><?php echo $row->alamat;?></td>
                    <td><a target="_blank" href="<?php echo base_url('assets/upload/'.$row->logo)?>"><img src="<?php echo base_url('assets/upload/'.$row->logo)?>" alt="gambar sekolah" height="150px"></a></td>
                    <td>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="<?php echo base_url('Main/data_sekolah?id='.$row->id);?>">Update</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Main/downloadPdf?id='.$row->id);?>">Download</a></li>
                            <li><a class="dropdown-item" target="_blank" href="<?php echo base_url('Main/pdf?id='.$row->id);?>">PDF</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Main/hapus?id='.$row->id);?>">Hapus</a></li>
                          </ul>
                        </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>
        </div>

      </div>
    </div>
  </div> 