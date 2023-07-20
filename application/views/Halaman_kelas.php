<div class="card">
    <div class="card-header">
        <h3 class="text-center">Tabel Data Kelas</h3>
        <h3 class="card-title"> <a href="<?= base_url('C_Kelas/tambah') ?>" type="button" class="btn btn-success "><i
            class="right "></i> Tambah Data</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id Kelas</th>
                    <th>Kode Kelas</th>
                    <th>Nama Ruangan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach ($kelas->result_array() as $key) : ?>
                    <td><?php echo $key['id_kelas'] ?></td>
                    <td><?php echo $key['kode_kelas'] ?></td>
                    <td><?php echo $key['nama_ruangan'] ?></td>
                    <td>
                       <a class="btn btn-primary" href="<?php echo base_url('C_Kelas/ubah/' . $key['id_kelas']) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('C_Kelas/delete/' . $key['id_kelas']) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->