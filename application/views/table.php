<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="p-4 ">
            <form action="<?php echo base_url('C_kategori/add') ?>" method="post">
                
                <div class="form-group">
                    <tr>
                        <td colspan="3"><?php echo form_error('nama_kategori')?></td>
                    </tr>
                    <label class="form-label">Nama Kategori:</label>
                    <input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
