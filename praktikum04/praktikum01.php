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
                    <h1>Praktikum 01</h1>
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
                        <?php

                        $nilai1 = ["id" => 1, "nim" => "01101", "uts" => 90, "uas" => 89, "tugas" => 95];
                        $nilai2 = ["id" => 2, "nim" => "01102", "uts" => 91, "uas" => 88, "tugas" => 94];
                        $nilai3 = ["id" => 3, "nim" => "01103", "uts" => 92, "uas" => 87, "tugas" => 93];
                        $nilai4 = ["id" => 4, "nim" => "01104", "uts" => 93, "uas" => 86, "tugas" => 92];

                        $kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
                        ?>

                        <div class="card-body">
                            <div class="container">
                                <h1 class="text-center">Daftar Nilai Siswa</h1>
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">UTS</th>
                                            <th scope="col">UAS</th>
                                            <th scope="col">TUGAS</th>
                                            <th scope="col">NILAI AKHIR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kumpulan_nilai as $nilai) :  ?>
                                            <tr>
                                                <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                                                <td><?= $nilai["id"]; ?></td>
                                                <td><?= $nilai["nim"]; ?></td>
                                                <td><?= $nilai["uts"]; ?></td>
                                                <td><?= $nilai["uas"]; ?></td>
                                                <td><?= $nilai["tugas"]; ?></td>
                                                <td><?= $nilai_akhir; ?></td>
                                            </tr>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
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