<?php $this->load->view('admin/partials/admin_header.php'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>All Bicycles</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <hr>
        <a class="btn btn-success" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Add New Bicycle</a>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="collapse" id="collapseExample">
            <?php echo validation_errors(); ?> 
			<?php echo form_open_multipart('admin/bicycles/add'); ?>
                <fieldset>
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Bicycle Manufacturer</label>                            
                                <select class="form-control" name="manufacturer_id" id="parent_cat">
                                    {manufacturers}
                                        <option value="{id}">{manufacturer_name}</option>
                                    {/manufacturers}
                                </select>
                        </div>
                        <div class="col-xs-6">
                            <label>Bicycle Model</label>
                            <input type="text"class="form-control" name="model_id" placeholder="Model Sepeda" required>
                        </div>
                    </div>
                            
                    <br>
                        
                    <div class="row">
                        <div class="col-xs-6">
                        <label>Bicycle Category</label>
                            <select class="form-control" name="category" >
                                <option value="BMX">BMX</option>
                                <option value="Fixie">Fixie</option>
                                <option value="Mountain Bike">Mountain Bike</option>
                                <option value="Kids Bike">Kids Bike</option>
                                <option value="Road Bike">Road Bike</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            
                            <label for="price">Cost Price</label>
                            <input type="number" step="any" class="form-control" name="b_price" placeholder="Cost Price" required>
                        </div>
                    </div>
                            
                    <br>
                    
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Add Date</label>
                            <input type="Date"class="form-control" name="add_date"  value="<?php echo date("Y-m-d"); ?>" >
                        </div>
                        <div class="col-xs-6">
                            <br>
                            <input type="number" class="form-control" name="registration_year" placeholder="Registration Year (YYYY)" required>
                        </div>
                    </div>
                            
                    <br>
        
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="text"class="form-control" name="v_color" placeholder="Color" required>
                        </div>
                        <div class="col-xs-6">
                            <input type="file" class="form-control" name="image" >
                        </div>
                    </div>

                    <br>
                    
                    <div class="row">
                        <div class="col-xs-6">
                        <label for="gear">Do you want it to be featured?</label>
                            <select name="featured" id="featured" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <input class="btn btn-success" type="submit" name="buttonSubmit" value="Add New Bicycle" />
                                                            
                </fieldset>         
            </form>
            <br>
            </div>
        </div> <!-- /row --> 

        <!-- all models --> 
        <div class="row">
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Displaying all bicycles</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered table-hover dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Model</th>
                                    <th>Manufacturer</th>
                                    <th>Category</th>
                                    <th>Added on</th>
                                    <th>Status</th>
                                    <th>Cost Price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <th>Sold on</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach($bicycles as $Bicycle) : ?>
                                    
                                    <tr class="<?php if($Bicycle['status'] != "available") echo 'danger'; else echo 'success'?>">
                                    
                                        <td><?php echo $Bicycle['bicycle_id']; ?></td>
                                        <td><?php echo $Bicycle['model_name']; ?></td>
                                        <td><?php echo $Bicycle['manufacturer_name']; ?></td>
                                        <td><?php echo $Bicycle['category']; ?></td>
                                        <td><?php $date = new DateTime($Bicycle['add_date']); echo $date->format('m/d/Y'); ?></td>
                                        
                                        <td><?php if ( $Bicycle['status'] == 'available' ) { echo '<span class="badge progress-bar-success" style="">Available</span>';} else if ( $Bicycle['status'] == 'sold' ) { echo '<span class="badge progress-bar-danger">Sold</span>';} else { echo '<span class="badge badge-primary">None</span>';} ?></td>
                                        <td><?php echo $Bicycle['buying_price']; ?></td>
                                        <td width="100">
                                            <img class="img-responsive" src="<?php echo base_url()."uploads/".$Bicycle['image']; ?>"></td>
                                        <td>
                                            <?php if($Bicycle['status']=="available") : ?>
                                                <?php echo form_open('admin/bicycles/sell/'); ?>
                                                    <input type="hidden" name="bicycle_id" value="<?php echo $Bicycle['bicycle_id']; ?>">
                                                    <button class="btn btn-xs btn-primary" type="submit" name="btn-sell">Sell</button>
                                                </form> 
                                            <?php endif ?>
                                                    
                                            <?php if ($this->session->userdata('type') =="admin") : ?>
                                                
                                                <?php echo form_open('admin/Bicycles/DeleteBicycle/'); ?>
                                                    <input type="hidden" name="bicycle_id" value="<?php echo $Bicycle['bicycle_id']; ?>">
                                                    <button onclick="return confirm('Records of this Bicycle will be deleted, continue?')" class="btn btn-xs btn-danger" type="submit" name="btn-delete">Delete</button>
                                                </form>             
                                            <?php endif; ?>
                                        </td>
                                        <td><?php if($Bicycle['sold_date']=== NULL){ echo 'Not Sold'; }else{ $date = new DateTime($Bicycle['sold_date']); echo $date->format('m/d/Y'); }?></td>
                                                    
                                    </tr>
                                <?php endforeach; ?>     
                            </tbody>
                        </table>
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col -->
        </div> <!-- /row --> 


    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer.php'); ?>



<?php if($this->session->flashdata('message') != NULL) : ?>
    <script>
        swal({
          title: "Success",
          text: "<?php echo $this->session->flashdata('message'); ?>",
          type: "success",
          timer: 1500,
          showConfirmButton: false
        });
    </script>
<?php endif ?>

    <script src="<?php echo base_url("assets/vendors/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/jszip/dist/jszip.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/pdfmake/build/pdfmake.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/pdfmake/build/vfs_fonts.js"); ?>"></script>
    
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-responsive").length) {
            $("#datatable-responsive").DataTable({
            aaSorting: [[0, 'desc']],
            
              dom: "Blfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "csv",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "excel",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "pdf",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "print",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
              ],
              responsive: true,
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
          
            init: function() {
              handleDataTableButtons();
            }
          };
        }();    
                    
        TableManageButtons.init();
      });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
    
    $("#parent_cat").change(function() {
        $(this).after();
        $.get('<?php echo base_url(); ?>controller_Bicycle/getsub/' + $(this).val(), function(data) {
            $("#sub_cat").html(data);
            $('#loader').slideUp(200, function() {
                $(this).remove();
            });
        }); 
    });

});
</script>

<?php if($this->session->flashdata('message') != NULL) : ?>
<script>
    swal({
      title: "Success",
      text: "<?php echo $this->session->flashdata('message'); ?>",
      type: "success",
      timer: 1500,
      showConfirmButton: false
    });
</script>
<?php endif ?>