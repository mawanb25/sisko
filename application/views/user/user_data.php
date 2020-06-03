<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><i class="far fa-user"></i> User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

<div class="row">
  <div class="col">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Data User</h3>
        
      </div>
      <div>
        <a href="<?=base_url('user/add')?>" type="submit" class="btn btn-default bg-gradient-primary float-right mt-3 mr-4"><i class="far fa-plus-square"></i> Tambah User</a>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
          Launch Large Modal
        </button>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
          <thead>                  
            <tr>
              <th style="width: 10px">No.</th>
              <th>Username</th>
              <th>Nama</th>
              <th style="width: 400px">Alamat</th>
              <th>Level</th>
              <th style="width: 200px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach($row->result() as $dt) { ?>
            <tr>
              <td><?=$no++?>.</td>
              <td><?=$dt->username?></td>
              <td><?=$dt->name?></td>
              <td><?=$dt->address?></td>
              <td><?=$dt->level == 1 ? "Admin" : "User"?></td>
              <td>                
                  <a href="<?=base_url('user/update')?>" type="submit" class="btn btn-sm btn-success"><i class="far fa-edit"></i> Ubah</a>
                  <a href="<?=base_url('user/delete')?>" type="submit" class="btn btn-sm bg-danger"><i class="far fa-trash-alt"></i> Hapus</a>

              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Input Data User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


</section>
<!-- /.content -->