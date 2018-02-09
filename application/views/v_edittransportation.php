
<?php
$id = "";
$name = "";
$code = "";
$description = "";
$seat_qty = "";

if($op=="edit"){
    foreach ($sql->result() as $obj){
         
          $op = "edit";
          $id = $obj->id;
          $name = $obj->name;
          $code = $obj->code;
          $description = $obj->description;
          $seat_qty = $obj->seat_qty;

    }
}
?>


  <?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Transportasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      
      <form action="<?php echo base_url(); ?>c_transportation/tambah" method="post">
              <div class="box-body">
                <div class="form-group">

                  <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
                  <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">

                  <div class="form-group">
                  <label>Nama</label>
                  <input name="name" type="text" class="form-control" placeholder="Masukan Nama Pesawat" value="<?php echo $name; ?>">
                  </div>

                <div class="form-group">
                  <label>Code</label>
                  <input name="code" type="text" class="form-control" placeholder="Masukan Code" value="<?php echo $code; ?>">
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <input name="description" type="text" class="form-control" placeholder="" value="<?php echo $description; ?>">
                </div>

                <div class="form-group">
                  <label>Seat Quantity</label>
                  <input name="seat_qty" type="text" class="form-control" placeholder="" value="<?php echo $seat_qty; ?>">
                </div>
                
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
                  <th>From</th>
                  <th>To</th>
                  <th>Maskapai</th>
                  <th>Depart At</th>
                  <th>Arrive At</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
</div>
  </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php require_once 'v_footeradmin.php' ?>
