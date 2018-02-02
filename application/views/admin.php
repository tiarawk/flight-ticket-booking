<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      
      <form action="<?php echo base_url(); ?>admin/tambah" method="post">
              <div class="box-body">
                <div class="form-group">

                  <input type="hidden" name="op" value="<?php echo $op='tambah' ?>" class="form-control">

                  <label>Username</label>
                  <input name="username" type="text" class="form-control" placeholder="Masukan Username">
                </div>

                <div class="form-group">
                  <label>Fullname</label>
                  <input name="fullname" type="text" class="form-control" placeholder="Masukan Username">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>

    </section>


<!-- /.row -->

        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Fullname</th>
                  <th>Action</th>
                </tr>
                <?php
                  $no=0;
                  foreach ($user as $obj1) {
                    $no++; 
                ?> 
                 <tr>

                  <td><?php echo $no; ?></td>
                  <td><?php echo $obj1->username; ?></td>  
                  <td><?php echo $obj1->fullname; ?></td> 
                  <td>
                    <a href="<?php echo base_url(); ?>admin/edit/<?php echo $obj1->id; ?>"><button type="button" class="btn btn-warning glyphicon glyphicon-edit"></button> </a>

                    <a href="javascript:if(confirm('Anda yakin ingin menghapus data?')){document.location='<?php echo base_url(); ?>admin/hapus/<?php echo $obj1->id; ?>';}"><button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button> </a>

                  </td>
                 </tr>
                 <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
</div>
  </div>
  <!-- /.content-wrapper -->



 <?php require_once 'v_footeradmin.php' ?>