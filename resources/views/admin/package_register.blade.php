<!DOCTYPE html>
<html>
@include('admin.adminlayout.header'); ?>
<style>
    .paymentmode{
        display:none;
    }
</style>
<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    @include('admin.adminlayout.topbar')
    <!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.adminlayout.slidebar')

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Registerd Data</h4>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>SR.NO</th>
                                    <th>Company name</th>
                                    <th>Username </th>
                                    <th>Mobile No</th>
                                    <th>Whatsapp No</th>
                                    <th>City Name </th>
                                    <th> Address</th>
                                    <th> Zipcode</th>
                                    <th> Status</th>
                                    <th> Change Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tricube</td>
                                    <td>Nikunj Patel</td>
                                    <td>9429812012</td>
                                    <td>9429812012</td>
                                    <td>Vadodara</td>
                                    <td>vadodara</td>
                                    <td>5000</td>
                                    <td>
                                        <p class='text-danger'>Active</p>
                                    </td>
                                    <td>

                                        <select  id="1" class="selectpicker" data-style="btn-default btn-rounded">
                                            <option value="0" class='text-info'>Active</option>
                                            <option value="1" class='text-danger'>Deactivate</option>
                                            <option value="2" class='text-primary'>On Hold</option>
                                            <option value="2" class='text-primary'>As Trial</option>
                                        </select>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container -->
        </div>
        <!-- content -->
    </div>
    <!-- ============================================================== -->
    <!-- End of the page -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->
<!-- START Footerscript -->
@include('admin.adminlayout.footer')
<script>
    $(function() {
        $('#paymentmode').change(function(){
            $('.paymentmode').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>


</body>
</html>