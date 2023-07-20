<div class="card">
    <div class="card-header">
        <h3 class="text-center">Tabel Data Hari</h3>
        <h3 class="card-title"> <a href="<?= base_url('C_Hari/tambah') ?>" type="button" class="btn btn-success "><i
                    class="right "></i> Tambah Data</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id Hari</th>
                    <th>Nama Hari</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach ($hari->result_array() as $key) : ?>
                    <td><?php echo $key['id_hari'] ?></td>
                    <td><?php echo $key['nama_hari'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url('C_Hari/ubah/' . $key['id_hari']) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('C_Hari/delete/' . $key['id_hari']) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->