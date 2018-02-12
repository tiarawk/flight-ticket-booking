<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transportation 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      
      <form action="<?php echo base_url(); ?>c_transportation/tambah" method="post">
              <div class="box-body">
                <div class="form-group">

                  <input type="hidden" name="op" value="<?php echo $op='tambah' ?>" class="form-control">


                <div class="form-group">
                  <label>Name</label>
                  <input name="name" type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label>Code</label>
                  <input name="code" type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <input name="description" type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label>Seat Quantity</label>
                  <input name="seat_qty" type="text" class="form-control" placeholder="">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>

    </section>


<!-- /.row -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Code</th>
                  <th>Description</th>
                  <th>Seat Quantity</th>
                </tr>
                <?php
                  $no=0;
                  foreach ($transportation as $obj1) {
                    $no++; 
                ?> 
                 <tr>

                  <td><?php echo $no; ?></td>
                  <td><?php echo $obj1->name; ?></td>  
                  <td><?php echo $obj1->code; ?></td> 
                  <td><?php echo $obj1->description; ?></td>
                  <td><?php echo $obj1->seat_qty; ?></td>  
                  <td>
                    <a href="<?php echo base_url(); ?>c_transportation/edit/<?php echo $obj1->id; ?>"><button type="button" class="btn btn-warning glyphicon glyphicon-edit"></button> </a>

                    <a href="javascript:if(confirm('Anda yakin ingin menghapus data?')){document.location='<?php echo base_url(); ?>c_transportation/hapus/<?php echo $obj1->id; ?>';}"><button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button> </a>

                  </td>
                 </tr>
                 <?php } ?>
              </table>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
          </div>
        </div>
  </div>
  <!-- /.content-wrapper -->



 <?php require_once 'v_footeradmin.php' ?>