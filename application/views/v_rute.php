  <?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rute Perjalanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      
      <form action="<?php echo base_url(); ?>c_rute/tambah" method="post">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="op" value="<?php echo $op='tambah' ?>" class="form-control">
                  <div class="form-group">
                  <label>From</label>
                  <input name="from" type="text" class="form-control" placeholder="Asal">
                  </div>

                <div class="form-group">
                  <label>To</label>
                  <input name="to" type="text" class="form-control" placeholder="Tujuan">
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
                        <label class="control-label">Depart</label>
                  <div class='input-group col-sm-8 date' id='datetimepicker1'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input name="depart" type="text" class="form-control" />
                  </div>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker1').datetimepicker();
                          });
                      </script>
                </div>


                 <div class="form-group">
                        <label class="control-label">Arrive</label>
                  <div class='input-group col-sm-8 date' id='datetimepicker2'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input name="arrive" type="text" class="form-control" />
                  </div>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker2').datetimepicker();
                          });
                      </script>
                </div>

                 <div class="form-group">
                  <label>Price</label>
                  <input name="price" type="text" class="form-control" placeholder="Harga">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>

    </section>

<div class="row" >
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
                <?php
                  $no=0;
                  foreach ($rute as $obj1) {
                    $no++; 
                ?> 
                 <tr>

                  <td><?php echo $no; ?></td>
                  <td><?php echo $obj1->rute_from; ?></td>  
                  <td><?php echo $obj1->rute_to; ?></td> 
                  <td><?php echo $obj1->id_transportation; ?></td>
                  <td><?php echo $obj1->depart_at; ?></td>
                  <td><?php echo $obj1->arrive_at; ?></td>
                  <td><?php echo $obj1->price; ?></td>
                  
                  <td>
                    <a href="<?php echo base_url(); ?>c_rute/edit/<?php echo $obj1->id; ?>"><button type="button" class="btn btn-warning glyphicon glyphicon-edit"></button> </a>

                    <a href="javascript:if(confirm('Anda yakin ingin menghapus data?')){document.location='<?php echo base_url(); ?>c_rute/hapus/<?php echo $obj1->id; ?>';}"><button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button> </a>

                  </td>
                 </tr>
                 <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      </div>
    </div>
          <!-- /.box -->
    <!-- /.content -->
<!-- /.row -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/adminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/adminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/adminLTE/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
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
</body>
</html>

