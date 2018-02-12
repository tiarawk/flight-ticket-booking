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
          $code = $obj->code;
          $description = $obj->description;
          $seat_qty = $obj->seat_qty;
         

    }
}
?>
 <?php require_once 'v_headeradmin.php' ?>  
      
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rute
      </h1>
      
      <form action="<?php echo base_url(); ?>c_transportation/tambah" method="post">
              
              <div class="box-body">
                <div class="form-group">

                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
                  <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">

                <div class="form-group">
                    
                        <label class="control-label">Name</label>
                    
                    <div class="col-sm-8 input-group">
                        <span class="input-group-addon"><i class="fa fa-plane"></i></span>
                        <select value="<?php echo $name; ?>" name="name" class="form-control">
                                <?php
                                foreach($transportation as $obj1){
                                     $id = $obj1->id;
                                     $name = $obj1->name;
                                ?>
                                <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                                <?php
                            }
                            ?>
                            </select>
                    </div>
                </div>

                <div class="form-group">
                  <label>Code</label>
                  <input name="code" value="<?php echo $code; ?>" type="text" class="form-control" placeholder="">
                </div>


                <div class="form-group">
                  <label>Description</label>
                  <input name="description" value="<?php echo $description; ?>" type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label>Seat Quantity</label>
                  <input name="seat_qty" value="<?php echo $seat_qty; ?>" type="text" class="form-control" placeholder="">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

        </form>

    </section>

    <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  
                  <th>ID</th>
                  <th>Name</th>
                  <th>Code</th>
                  <th>Description</th>
                  <th>Seat Quantity</th>
               
                </tr>
                 <tr>
                 </tr>
              </table>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
</div>

<!-- /.row -->

        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
</div>
  </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->


<script type="text/javascript">
  $(function () {
      $('#datetimepicker1').datetimepicker();
  });

</script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker2').datetimepicker();
                          });
</script>

<?php require_once 'v_footeradmin.php' ?>

