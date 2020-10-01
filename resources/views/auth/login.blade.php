@include('layouts.header')

<body class="is-white">
<form  action="{{ URL::to('/login')}}" method="post">
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="login-wrapper">
        
        <!-- Main Wrapper -->
        <div class="login-wrapper columns is-gapless">
            <!--Left Side (Desktop Only)-->
            <div class="column is-6 is-hidden-mobile hero-banner" >
                <div class="hero is-fullheight is-login" style="background-image: url('assets/img/1.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                    
                </div>
            </div>
            <!--Right Side-->
            <div class="column is-6">
                <div class="hero form-hero is-fullheight">
                    <!--Logo-->
                    <div class="logo-wrap">
                        <div class="wrap-inner">
                            <img src="assets/img/logo.jpeg" alt="">
                        </div>
                    </div>
                    <!--Login Form-->
                    <div class="hero-body">
                        <div class="form-wrapper">
                            <!--Avatar-->
                            <div class="avatar">
                                <div class="badge">
                                    <i data-feather="check"></i>
                                </div>
                                <img src="assets/img/logo.jpeg" data-demo-src="assets/img/logo.jpeg" alt="">
                            </div>
                            <div class="sign_in_options">
                                <div class="text">
                                    Sign in with
                                </div>
                                <ul class="login-icons">
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                </ul>
                                <div class="text">or</div>
                            </div>
                            <!--Form-->
                            <div class="login-form">
                               <!--  <div class="field">
                                    <div class="control">
                                        <input class="input email-input" type="text" placeholder="Enter mobile No">
                                        <div class="input-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div> -->

                                    <!--Field-->
                                    <div class="field field-group">
                                        <label>Phone Number</label>
                                        <div class="control has-icon">
                                            <input type="text" class="input is-fade" value="">
                                            <div class="form-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                                            </div>
                                        </div>
                                    </div>
                               
                                <div class="field">
                                    <div class="control">
                                        <input class="input password-input" type="password" placeholder="●●●●●●●">
                                        <div class="input-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <a class="button is-solid primary-button raised is-rounded is-fullwidth" >Submit</a>
                                    </div> <br/>
                                    <div class="control">
                                        <a class="button is-solid primary-button raised is-rounded is-fullwidth" href="{{url('register')}}">Register</a>
                                    </div>                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@include('layouts.footer')