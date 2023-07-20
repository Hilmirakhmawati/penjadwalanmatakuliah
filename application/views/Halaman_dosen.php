<div class="card">
    <div class="card-header">
        <h3 class="text-center">Tabel Data Dosen</h3>
        <h3 class="card-title"> <a href="<?= base_url('C_Dosen/tambah') ?>" type="button" class="btn btn-success "><i
                    class="right "></i> Tambah Data</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id Dosen</th>
                    <th>NIP</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach ($dosen->result_array() as $key) : ?>
                    <td><?php echo $key['id_dosen'] ?></td>
                    <td><?php echo $key['nip'] ?></td>
                    <td><?php echo $key['nidn'] ?></td>
                    <td><?php echo $key['nama_dosen'] ?></td>
                    <td><?php echo $key['alamat'] ?></td>
                    <td><?php echo $key['telepon'] ?></td>
                    <td><?php echo $key['username'] ?></td>
                    <td><?php echo $key['password'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url('C_Dosen/ubah/' . $key['id_dosen']) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('C_Dosen/delete/' . $key['id_dosen']) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->