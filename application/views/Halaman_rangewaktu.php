<div class="card">
    <div class="card-header">
        <h3 class="text-center">Tabel Range Waktu</h3>
        <h3 class="card-title"> <a href="<?= base_url('C_Rangewaktu/tambah') ?>" type="button" class="btn btn-success "><i
                    class="right "></i> Tambah Data</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id Waktu</th>
                    <th>Waktu Mulai</th>
                    <th>Waktu Selesai</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach ($waktu->result_array() as $key) : ?>
                    <td><?php echo $key['id_waktu'] ?></td>
                    <td><?php echo $key['waktu_mulai'] ?></td>
                    <td><?php echo $key['waktu_selesai'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url('C_Rangewaktu/ubah/' . $key['id_waktu']) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('C_Rangewaktu/delete/' . $key['id_waktu']) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->