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
        <div class="content">
        <!-- Start content -->
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
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Age</th>
                                    <th>City</th>
                                    <th>district</th>
                                    <th>country</th>
                                    <th>State</th>
                                    <th>Type</th>
                                    <th>Follower</th>
                                    <th>Likes</th>
                                    <th>ParentName</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result as $item)
                                <tr>
                                   
                                    <td>{{ $item->userid }}</td>
                                    <td>{{ $item->name }}{{ $item->lname }}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->phoneno }}</td>
                                    <td>{{ $item->age }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->district }}</td>
                                    <td>{{ $item->country }}</td>
                                    <td>{{ $item->state }}</td>
                                    <td>{{ $item->profilename }}</td>
                                    <td>{{ $item->followers }}</td>
                                    <td>{{ $item->likes }}</td>

                                    <td>{{ $item->parentname}}</td>
                                    <td>
                                        <select class=" form-control form-control-lg">
                                            <option>A
                                            </option>
                                            <option>D</option>
                                          </select>
                                    </td>
                                   
                                  
                                    
                                </tr>
                                @endforeach
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