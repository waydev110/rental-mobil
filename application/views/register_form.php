<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand text">
              <img src="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/imam.jpg" alt="logo" width="700" class="  shadow-light ">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register') ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username">
                      <?php echo form_error('username', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="alamat" class="form-control" name="alamat">
                    <div class="invalid-feedback">
                      <?php echo form_error('alamat', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Gender</label>
                      <select class="form-group" name="gender">
                        <option value="">-- Pilih Gender --</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                      <?php echo form_error('gender', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="no_telepon" class="d-block">No. Telepon</label>
                      <input id="no_telepon" type="no_telepon" class="form-control" name="no_telepon">
                      <?php echo form_error('no_telepon', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>No. KTP</label>
                      <input type="text" name="no_ktp" class="form_control">
                      <?php echo form_error('no_ktp', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control">
                      <?php echo form_error('password', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>