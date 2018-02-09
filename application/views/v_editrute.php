<?php
$id = "";
$maskapai = "";
$depart_at = "";
$arrive_at = "";
$rute_from = "";
$rute_to = "";
$price = "";

if($op=="edit"){
    foreach ($sql->result() as $obj){
         
          $op = "edit";
          $id = $obj->id;
          $depart_at = $obj->depart_at;
          $arrive_at = $obj->arrive_at;
          $rute_from = $obj->rute_from;
          $rute_to = $obj->rute_to;
          $price = $obj->price;

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
      
      <form action="<?php echo base_url(); ?>c_rute/tambah" method="post">
              
              <div class="box-body">
                <div class="form-group">

                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
                  <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">

                  <label>From</label>
                  <input name="from" type="text" class="form-control" placeholder="Asal" value="<?php echo $rute_from; ?>" >
                  </div>

                <div class="form-group">
                  <label>To</label>
                  <input name="to" type="text" class="form-control" placeholder="Tujuan" value="<?php echo $rute_to; ?>" >
                </div>

                <div class="form-group">
                    
                        <label class="control-label">Maskapai</label>
                    
                    <div class="col-sm-8 input-group">
                        <span class="input-group-addon"><i class="fa fa-plane"></i></span>
                        <select name="maskapai" class="form-control">
                                <?php
                                foreach($transportation as $obj1){
                                     $id = $obj1->id;
                                     $nama = $obj1->name;
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $nama; ?></option>
                                <?php
                            }
                            ?>
                            </select>
                    </div>
                </div>

                <div class="form-group">
                  <label>Price</label>
                  <input name="price" value="<?php echo $depart_at; ?>" type="text" class="form-control" placeholder="Harga">
                </div>


                <div class="form-group">
                  <label>Price</label>
                  <input name="price" value="<?php echo $arrive_at; ?>" type="text" class="form-control" placeholder="Harga">
                </div>

                <div class="form-group">
                  <label>Price</label>
                  <input name="price" value="<?php echo $price; ?>" type="text" class="form-control" placeholder="Harga">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

        </form>

    </section>


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
                 <tr>
                 </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
</div>
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

