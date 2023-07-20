<div class="card">
    <div class="card-header">
        <h3 class="text-center">Tabel Data Kelola Jadwal</h3>
        <h3 class="card-title"> <a href="<?= base_url('C_Kelolajadwal/tambah') ?>" type="button" class="btn btn-success "><i
            class="right "></i> Tambah Data</a></h3><br><br>
            <h3 class="card-title"> <a href="<?= base_url('C_Kelolajadwal/printJadwal') ?>" type="button" class="btn btn-success "><i
            class="right "></i> Print Jadwal</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kelola Jadwal</th>
                    <th>Dosen</th>
                    <th>Hari</th>
                    <th>Kode Kelas</th>
                    <th>Matakuliah</th>
                    <th>Prodi</th>
                    <th>Waktu</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php $no = 1;
                    foreach ($jadwal->result_array() as $key) : ?>
                    <td><?php echo $no?></td>
                    <td><?php echo $key['id_kelolajadwal'] ?></td>
                    <td><?php echo $key['nama_dosen'] ?></td>
                    <td><?php echo $key['hari'] ?></td>
                    <td><?php echo $key['kode_kelas'] ?></td>
                    <td><?php echo $key['nama_matkul'] ?></td>
                    <td><?php echo $key['nama_prodi'] ?></td>
                    <td><?php echo $key['waktu_mulai']; echo "-"; echo $key['waktu_selesai']?></td>
                    <?php $no++;?>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url('C_Kelolajadwal/ubah/' . $key['id_kelolajadwal']) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('C_Kelolajadwal/delete/' . $key['id_kelolajadwal']) ?>">Delete</a>
                        
                    </td>
                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->