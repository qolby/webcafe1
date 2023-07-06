<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan Menu</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Makanan</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <i class="fas fa-burger me-1"></i>
                    Daftar Makanan
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="#exampleModal" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class=" fas fa-plus me-1"></i>
                        Tambah Makanan
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto Makanan</th>
                        <th>Nama Makanan</th>
                        <th>Deskripsi Makanan</th>
                        <th>Harga</th>
                        <th>Status Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Foto Makanan</th>
                        <th>Nama Makanan</th>
                        <th>Deskripsi Makanan</th>
                        <th>Harga</th>
                        <th>Status Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $n = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_makanan");
                    while ($baca = mysqli_fetch_array($data)) { ?>
                        <tr>
                            <td><?php echo $n; ?></td>
                            <td>
                                <div class="bg-primary" style="width: 120px; height: 100px;"><img src="assets/img/makanan/<?php echo $baca['foto_makanan']; ?>" class="img-fluid h-100 w-100" alt=""></div>
                            </td>
                            <td><?php echo $baca['nama_makanan']; ?></td>
                            <td><?php echo $baca['deskripsi']; ?></td>
                            <td><?php echo "Rp" . $baca['harga']; ?></td>
                            <td>
                                <div class="<?php echo ($baca['status_pesan'] == "Ready") ? "bg-success" : "bg-secondary"; ?> text-white p-2 rounded-5 text-center">
                                    <?php echo $baca['status_pesan']; ?>
                                </div>
                            </td>
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