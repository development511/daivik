<!DOCTYPE html>
<html>
@include('admin.adminlayout.header')
<body class="" style="background: url(/admin/assets/images/1.jpg) repeat center center  !important;">
    <!-- HOME -->
     <section>
         <div class="container-alt">
             <div class="row">
                 <div class="col-sm-12">

                     <div class="wrapper-page p-t-30">

                         <div class="m-t-40 account-pages" style="background: #ddd !important;">
                             <div class="text-center account-logo-box">
                                 <h2 class="text-uppercase m-b-20">

                                         <span><img src="/admin/assets/images/logo.gif" alt="" height="60"></span>

                                 </h2>

                                 <h2 class="text-uppercase text-white">
                                     POS ERP Software
                                 </h2>
                             </div>
                             <div class="account-content">
                                <form method="POST" action="singnup">
                                    @csrf
                                     <div class="form-group ">
                                         <div class="col-xs-12">
                                            <input id="email" type="email" class="input email-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <div class="col-xs-12">
                                            <input id="password" type="password" class="input password-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">                                         </div>
                                     </div>

                                    
                                     </div>

                                     <div class="form-group text-center m-t-30">
                                         <div class="col-sm-12">
                                             <p class="text-muted">Don't have an account? <a href="signup.php" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                                         </div>
                                         <div class="col-sm-12">
                                             <a href="#" class="text-muted" style="color:red !important;"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                         </div>
                                     </div>


                                     <div class="form-group account-btn text-center m-t-10">
                                         <div class="col-xs-12">
                                            <button type="submit" class="btn w-md btn-bordered btn-danger waves-effect waves-light">
                                                {{ __('Login') }}
                                            </button>
                                            
                                         </div>
                                     </div>

                                 </form>

                                 <div class="clearfix"></div>

                             </div>
                         </div>
                        
                     </div>
                     <!-- end wrapper -->

                 </div>
             </div>
         </div>
       </section>
       <!-- END HOME -->

 </body>
</body>
</html>