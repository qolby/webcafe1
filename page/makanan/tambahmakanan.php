<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
        <div class="modal-content">
            <form action="page/makanan/addmakanan.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Menu Makanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <input class="form-control py-3" name="foto_makanan" id="inputFoto" type="file" placeholder="Banana Roll" required />
                                <label class="input-group-text" for="inputFoto">Foto Makanan</label>
                                <div class="invalid-feedback">Masukkan Foto Makanan</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nama_makanan" id="inputNama" type="text" placeholder="Banana Roll" required />
                                <label for="inputNama">Nama Makanan</label>
                                <div class="invalid-feedback">Masukkan Nama Makanan</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="deskripsi_makanan" id="inputDeskripsi" type="text" placeholder="Banana Roll adalah..." required></textarea>
                                <label for="inputDeskripsi">Deskripsi Makanan</label>
                                <div class="invalid-feedback">Masukkan Deskripsi Makanan</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="harga_makanan" id="inputHarga" type="number" placeholder="15000" required />
                                <label for="inputHarga">Harga Makanan (Rupiah)</label>
                                <div class="invalid-feedback">Masukkan Harga Makanan</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <select class="form-control form-control" name="status_pesan" id="selectStatus" required>
                                    <option value="Ready">Ready</option>
                                    <option value="Not Ready">Not Ready</option>
                                </select>
                                <label for="selectStatus">Status Makanan</label>
                                <div class="invalid-feedback">Masukkan Status Pesan Makanan</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="tambahmkn" value="Tambah Menu" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>