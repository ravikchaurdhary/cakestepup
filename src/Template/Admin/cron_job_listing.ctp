
<!-- Content Wrapper. Contains page content -->
      <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cron Jobs
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo HTTP_ROOT.'admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo HTTP_ROOT.'admin/cron-job-listing'; ?>">Cron Job Listing</a></li>
        
      </ol>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Cron Job Listing</h3>
              <span class="add_btn_right">
                <a href="<?php echo HTTP_ROOT.'admin/add-cron-job'; ?>">
                    <button class="btn btn-warning">Add Cron Job</button>
                </a>
            </span>
            </div>

            <!-- /.box-header -->
            <div class="box-body">

              <table id="cronJobListingTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Url</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   