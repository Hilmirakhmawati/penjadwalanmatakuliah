<div class="card">
    <div class="card-header">
        <h3 class="text-center">Tabel Data Mata Kuliah</h3>
        <h3 class="card-title"> <a href="<?= base_url('C_Matkul/tambah') ?>" type="button" class="btn btn-success "><i
            class="right "></i> Tambah Data</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id Mata Kuliah</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach ($matkul->result_array() as $key) : ?>
                    <td><?php echo $key['id_matkul'] ?></td>
                    <td><?php echo $key['kode_matkul'] ?></td>
                    <td><?php echo $key['nama_matkul'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url('C_Matkul/ubah/' . $key['id_matkul']) ?>">Edit</a>
                         <a class="btn btn-danger" href="<?php echo base_url('C_Matkul/delete/' . $key['id_matkul']) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->