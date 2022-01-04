        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
              
                    <!-- Outer Row -->
   
                  <form class="user" action="" method="POST">
                    <div class="form-group">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $edit->username ?>" placeholder="id">
 
                      Username
                      <input type="text" name="username" value="<?php echo $edit->username ?>" class="form-control" placeholder="" disabled>
                    </div>
                    <div class="form-group">
                      Password
                      <input type="password" name="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      Nama Lengkap
                      <input type="text" name="nama_lengkap" value="<?php echo $edit->username ?>" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      Level
                      <select name="level" class="form-control">
                        <option value="">Pilih</option>
                         <option value="User" <?php if($edit->level=="User"){ echo "selected";} ?>>Operator</option>
                         <option value="Admin" <?php if($edit->level=="Admin"){ echo "selected";} ?>>Admin</option>
      
                        
                      </select>
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary btn- btn-block">
                    </div>
                  </form>
                  
   
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
