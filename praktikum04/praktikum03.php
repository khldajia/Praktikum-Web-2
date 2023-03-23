<?php
require_once "header.php";
require_once "sidebar.php";
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Judul</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <h1> Form Registrasi IT Club Data Science</h1>
                                <br>
                            </div>
                            <form method="POST" action="task.php">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-500px"></i>
                                                </div>
                                            </div>
                                            <input id="nim" name="nim" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-address-card"></i>
                                                </div>
                                            </div>
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki laki">
                                            <label for="jk_0" class="custom-control-label">Laki laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan">
                                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                                    <div class="col-8">
                                        <select id="prodi" name="prodi" class="custom-select">
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Teknik Infromatika">Teknik Informatika</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Skill Web & Programming</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                                            <label for="skill[]_0" class="custom-control-label">HTML</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                                            <label for="skill[]_1" class="custom-control-label">CSS</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="JavaScript">
                                            <label for="skill[]_2" class="custom-control-label">JavaScript</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="RWDBoostrap">
                                            <label for="skill[]_3" class="custom-control-label">RWDBoostrap</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                                            <label for="skill[]_4" class="custom-control-label">PHP</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                                            <label for="skill[]_5" class="custom-control-label">Python</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                                            <label for="skill[]_6" class="custom-control-label">Java</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domisili" class="col-4 col-form-label">Domisili</label>
                                    <div class="col-8">
                                        <select id="domisili" name="domisili" class="custom-select">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Depok">Depok</option>
                                            <option value="Bogor ">Bogor</option>
                                            <option value="Tanggerang">Tanggerang</option>
                                            <option value="Bekasi">Bekasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                            </div>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

                            <hr>
                            <?php

                            if (isset($_POST["submit"]))
                                $nim = $_POST["nim"];


                            function cekStatus($skor)
                            {
                                if ($skor >= 150) {
                                    return "Sangat Baik";
                                } elseif ($skor >= 60) {
                                    return "Baik";
                                } elseif ($skor >= 40) {
                                    return "Cukup";
                                } elseif ($skor >= 0) {
                                    return "Kurang";
                                } else {
                                    return "0(Tidak Memadai)";
                                }
                            }


                            ?>


                            <!-- Optional JavaScript; choose one of the two! -->

                            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

                            <!-- Option 2: Separate Popper and Bootstrap JS -->
                            <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once "footer.php";
?>