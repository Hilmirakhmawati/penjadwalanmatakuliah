<div class="card">
    <div class="card-header">
        <h3 class="text-center">Tabel Data Prodi</h3>
        <h3 class="card-title"> <a href="<?= base_url('C_Prodi/tambah') ?>" type="button" class="btn btn-success "><i
                    class="right "></i> Tambah Data</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id prodi</th>
                    <th>Nama Prodi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach ($prodi->result_array() as $key) : ?>
                    <td><?php echo $key['id_prodi'] ?></td>
                    <td><?php echo $key['nama_prodi'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url('C_Prodi/ubah/' . $key['id_prodi']) ?>">Edit</a>
                         <a class="btn btn-danger" href="<?php echo base_url('C_Prodi/delete/' . $key['id_prodi']) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->