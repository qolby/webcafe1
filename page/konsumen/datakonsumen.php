<div class="container-fluid px-4">
    <h1 class="mt-4">Konsumen</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Data Konsumen Online</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Konsumen
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $n = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE level=2");
                    while ($baca = mysqli_fetch_array($data)) { ?>
                        <tr>
                            <td class="text-center"><?php echo $n; ?></td>
                            <td class="text-center"><?php echo $baca['nama']; ?></td>
                            <td class="text-center"><?php echo $baca['email']; ?></td>
                            <td class="text-center"><?php echo $baca['telepon']; ?></td>
                            <td class="text-center"><?php echo $baca['jenis_kelamin']; ?></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye "></i></a>
                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit "></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i></a>
                            </td>
                        </tr>
                    <?php
                        $n++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>