<!--title-->
<section id="title">
        <div class="d-flex justify-content-between">
            <div>
                <p>Add Admin</p>
            </div>
            <div>
                <a href="<?php echo base_url(); ?>index.php/customer"> <i class="fa fa-home h2"></i></a>
            </div>
        </div>
    </section>
    <!--end of title-->

    <!--form-->
    <section>
        <form action="<?= base_url('index.php/admin/addAdmin') ?>" method="POST">
        <div class="row">
            <div class="col-8 ml-5">
                <!--row 1-->
                <div class="form-group row">
                    <label class="col-2">Nama</label>
                    <div class="col-6">
                        <input type="text" name="nama" class="form-control" placeholder="nama admin">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2">Username</label>
                    <div class="col-6">
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                </div>
                <!--row 2-->
                <div class="form-group row">
                    <label class="col-2">Umur</label>
                    <div class="col-6">
                        <input type="text" name="umur" class="form-control">
                    </div>
                </div>
                <!--row 3-->
                <div class="form-group row">
                    <label class="col-2" for="alamat">Alamat</label>
                    <div class="col-lg-6">
                        <input type="text" name="alamat" id=alamat class="form-control ">
                    </div>
                </div>
                <!--row 4-->
                <div class="form-group row">
                    <label class="col-2" for="email">Email</label>
                    <div class="col-lg-6">
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
                <!--row 5-->
                <div class="form-group row">
                    <label class="col-2" for="nohp">No HP</label>
                    <div class="col-lg-6">
                        <input type="text" name="hp" id="nohp" class="form-control">
                    </div>
                </div>
                <!--row 7-->
                <div class="form-group row">
                    <label class="col-2" for="password">Password</label>
                    <div class="col-lg-6">
                        <input type="password" name="password1" id="password" class="form-control">
                    </div>
                </div>
                <!--row 8-->
                <div class="form-group row">
                    <label class="col-2" for="ulangPassword">Ulang Password</label>
                    <div class="col-lg-6">
                        <input type="password" name="password2" id="ulangPassword" class="form-control">
                    </div>
                </div>
                <!--button-->
                <div class="row">
                    <div class="col-lg-6 my-4">
                        <input type="submit" class="btn btn-block btn-success mb-2" id="submit" name="" value="Simpan">
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
    </section>
    <!--end of form-->