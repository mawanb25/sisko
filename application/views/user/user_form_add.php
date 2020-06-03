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
			<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Tambah User</h3>	        
				</div>
				<!-- /.card-header -->
				<form class="form-horizontal" action="" method="post">
					<div class="card-body mt-3">
						<div class="form-group row">
							<label for="username" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="username" placeholder="Username" autofocus>
							</div>
						</div>
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
							</div>
						</div>
						<div class="form-group row">
							<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="alamat" placeholder="Masukkan Alamat Anda"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="password1" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password1" placeholder="Masukkan Password">
							</div>
						</div>
						<div class="form-group row">
							<label for="password2" class="col-sm-2 col-form-label">Ulangi Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password2" placeholder="Masukkan Password anda kembali">
							</div>
						</div>
						<div class="form-group row">
							<label for="level" class="col-sm-2 col-form-label">Level</label>
							<div class="col-sm-10">
								<select class="form-control select2 select2-info" id="level" data-dropdown-css-class="select2-info" style="width: 100%;">
									<option value="1">Admin</option>
									<option value="2">User</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="offset-sm-2 col-sm-10">
								<button type="submit" class="btn btn-success">Simpan</button>
								<button type="reset" class="btn btn-warning ml-2">Reset</button>
								<a href="<?=base_url('user')?>" class="btn btn-danger ml-2">Kembali</a>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</form>
			</div>
		</div>
	</div>

</section>
<!-- /.content