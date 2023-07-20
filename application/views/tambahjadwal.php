<div class="container">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Jadwal</h3>
                        </div>
                        <form action="<?php echo base_url('C_Kelolajadwal/add') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    
                                    <label for="id_kelolajadwal">Id Jadwal : </label>
                                    <input type="number" class="form-control" name="id_kelolajadwal" placeholder="Id Jadwal">
                                </div>
                                <div class="form-group">
                                <label for="id_kelolajadwal">Id Jadwal : </label>
                                    <input type="number" class="form-control" name="id_kelolajadwal" placeholder="Id Jadwal">
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="id_kelolajadwal">Id Jadwal : </label>
                                    <input type="number" class="form-control" name="id_kelolajadwal" placeholder="Id Jadwal">
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="id_kelolajadwal">Id Jadwal : </label>
                                    <input type="number" class="form-control" name="id_kelolajadwal" placeholder="Id Jadwal">
                                </div>
                                 <div class="form-group">
                                    
                                    <label for="id_matkul">Mata Kuliah : </label>
                                    <select name="id_matkul" class="form-control">
                                    <option value="">Pilih Mata Kuliah</option>
                                    <option value="">Rekayasa Kebutuhan Perangkat Lunak</option>
                                    <option value="">Ide Kreatif dan Kewirausahaan</option>
                                    <option value="">Metode dan Model Pengembangan Perangkat Lunak</option>
                                    <option value="">Pemrograman Web Lanjut</option>
                                    <option value="">Database Administrator</option>
                                    <option value="">Pemrograman Berorientasi Obyek II</option>
                                    <option value="">Bahasa Indonesia</option>
                                    <option value="">Matematika Diskrit</option>
                                    <option value="">Bahasa Inggris I</option>
                                    <option value="">Pendidikan Pancasila</option>
                                    
                                    
                                    <?php foreach ($kelolajadwal as $key) {     ?>
                                    <option class="fw-bold" value="<?= $key['id_matkul'] ?>"><?= $key['nama_matkul'] ?>
                                    </option>
                                    <?php  } ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    
                                    <label for="id_hari">Hari : </label>
                                    <select name="id_hari" class="form-control">
                                    <option value="">Pilih Hari</option>
                                     <option value="">Senin</option>
                                      <option value="">Selasa</option>
                                       <option value="">Rabu</option>
                                        <option value="">Kamis</option>
                                     <option value="">Jumat</option>
                                    <?php foreach ($kelolajadwal as $key) { ?>
                                    <option class="fw-bold" value="<?= $key['id_hari'] ?>"><?= $key['nama_hari'] ?>
                                    </option>
                                    <?php  } ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    
                                    <label for="id_">Waktu : </label>
                                    <select name="id_waktu" class="form-control">
                                    <option value="">Pilih Waktu</option>
                                    <option value="">08:00:00-08:50:00</option>
                                    <option value="">08:50:00-09:40:00</option>
                                    <option value="">09:40:00-10:30:00</option>
                                    <option value="">10:30:00-11:20:00</option>
                                    <option value="">12:00:00-12:50:00</option>
                                    <option value="">12:50:00-13:40:00</option>
                                    <option value="">13:40:00-14:30:00</option>
                                    <option value="">14:30:00-15:20:00</option>


                                    <?php foreach ($kelolajadwal as $key) {     ?>
                                    <option class="fw-bold" value="<?= $key['id_waktu'] ?>"><?= $key['waktu_mulai'] ?>
                                    </option>
                                    <?php  } ?>
                                </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?php echo base_url('C_Kelolajadwal') ?>" type="submit" class="btn btn-primary" name="proses">Tambahkan</a>
                            </div>
                            <br>
                        </form>

                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>