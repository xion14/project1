         <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">

  <form class="form-horizontal" role="form"  action="" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-12" >judul:</label>
    <div class="col-sm-12"> 
    <input type="hidden" name="id_prosedur" value="<?php echo $prosedur->id_prosedur ?>" class="form-control" placeholder="judul">
  <input type="text" name="judul" value="<?php echo $prosedur->judul ?>" class="form-control" placeholder="judul">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-12" >Prosedur:</label>
    <div class="col-sm-12"> 
    <textarea name="prosedur" class="form-control" id="" cols="30" rows="10"><?php echo $prosedur->prosedur ?></textarea>
    </div>
  </div>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
</div>

</form>
  </div>
</div>