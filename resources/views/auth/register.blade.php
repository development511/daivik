
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Sign Up</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/css/bulma.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <!-- Pageloader -->
    <div class="pageloader"></div> 
    <div class="infraloader is-active"></div>
    <div class="signup-wrapper">
        
        <div class="fake-nav">
            <a href="#" class="logo">
                <img src="assets/img/logo/friendkit.svg" width="112" height="28" alt="">
            </a>
        </div>
        
        <div class="process-bar-wrap">
            <div class="process-bar">
                <div class="progress-wrap">
                    <div class="track"></div>
                    <div class="bar"></div>
                    <div id="step-dot-1" class="dot is-first is-active is-current" data-step="0">
                        <i data-feather="smile"></i>
                    </div>
                    <div id="step-dot-2" class="dot is-second" data-step="20">
                        <i data-feather="user"></i>
                    </div>
                    <!-- <div id="step-dot-6" class="dot is-sixth" data-step="40">
                        <i data-feather="user"></i>
                    </div>
                    <div id="step-dot-3" class="dot is-third" data-step="60">
                        <i data-feather="image"></i>
                    </div>
                    <div id="step-dot-4" class="dot is-fourth" data-step="80">
                        <i data-feather="lock"></i>
                    </div>
                    <div id="step-dot-5" class="dot is-fifth" data-step="100">
                        <i data-feather="flag"></i>
                    </div> -->
                </div>
            </div>
        </div>
        
        <div class="outer-panel">
            <div class="outer-panel-inner">
                <div class="process-title">
                    <h2 id="step-title-1" class="step-title is-active">Welcome, select an account type.</h2>
                    <h2 id="step-title-2" class="step-title">Tell us more about you.</h2>
                    <h2 id="step-title-6" class="step-title">Tell us a bit more about you.</h2>
                    <h2 id="step-title-3" class="step-title">Upload a profile picture.</h2>
                    <h2 id="step-title-4" class="step-title">Secure your account.</h2>
                    <h2 id="step-title-5" class="step-title">You're all set. Ready?</h2>
                </div>
                
                <div id="signup-panel-1" class="process-panel-wrap is-active">
                    <div class="columns">
                        <div class="column is-6">
                            <div class="account-type">
                                <img src="assets/img/illustrations/signup/company.svg" alt="">
                                <h3>Child</h3>
                                <p>Create a child account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth is-rounded process-button" data-step="step-dot-2">
                                    Continue
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="account-type">
                                <img src="assets/img/illustrations/signup/public.svg" alt="">
                                <h3>Your-self</h3>
                                <p>Create a own account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth is-rounded process-button" data-step="step-dot-2">
                                    Continue
                                </a>
                            </div>
                        </div>
                        <!-- <div class="column is-4">
                            <div class="account-type">
                                <img src="assets/img/illustrations/signup/personal.svg" alt="">
                                <h3>Personal</h3>
                                <p>Create a company account to be able to do some awesome things.</p>
                                <a class="button is-fullwidth is-rounded process-button" data-step="step-dot-2">
                                    Continue
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
                
                <div id="signup-panel-2" class="process-panel-wrap is-narrow">
                <div class="form-panel">
                    <form method="POST" action="{{ url('user_register') }}">
                        @csrf

                        <div class="field">
                            <label for="title">First Name</label>
                            <div class="control">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror input" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Enter your first name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label>Last Name</label>
                            <div class="control">
                            <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror input" name="lname" value="{{ old('lname') }}" required autocomplete="lname" placeholder="Enter your last name" autofocus >

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="title">profile Name</label>
                            <div class="control">
                                <input id="profilename"  type="text" class="form-control @error('profilename') is-invalid @enderror input" name="profilename" value="{{ old('profilename') }}" required autocomplete="profilename" placeholder="Enter your profile name" autofocus>
                                @error('profilename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="field">
                            <label for="title">parent Name</label>
                            <div class="control">
                                <input id="parentname"  type="text" class="form-control @error('parentname') is-invalid @enderror input" name="parentname" value="{{ old('parentname') }}" required autocomplete="parentname" placeholder="Enter your profile name" autofocus>
                                @error('parentname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="control">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email id">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="title">city</label>
                            <div class="control">
                                <input id="city"  type="text" class="form-control @error('city') is-invalid @enderror input" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="Enter your city" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="title">state</label>
                            <div class="control">
                                <input id="state"  type="text" class="form-control @error('state') is-invalid @enderror input" name="state" value="{{ old('state') }}" required autocomplete="state" placeholder="Enter your state" autofocus>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="title">district</label>
                            <div class="control">
                                <input id="district"  type="text" class="form-control @error('district') is-invalid @enderror input" name="district" value="{{ old('district') }}" required autocomplete="district" placeholder="Enter your district" autofocus>
                                @error('district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="title">country</label>
                            <div class="control">
                                <input id="country"  type="text" class="form-control @error('country') is-invalid @enderror input" name="country" value="{{ old('country') }}" required autocomplete="country" placeholder="Enter your country" autofocus>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="field">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="control">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input" name="password" required autocomplete="new-password" placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div  class="control">
                                <input id="password_confirmation" type="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror input" name="password_confirmation" required autocomplete="new-password_confirmation" placeholder="Enter repeat password">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="title">phoneno</label>
                            <div class="control">
                                <input id="phoneno"  type="text" class="form-control @error('phoneno') is-invalid @enderror input" name="phoneno" value="{{ old('phoneno') }}" required autocomplete="phoneno" placeholder="Enter your phone number" autofocus>
                                @error('phoneno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       
                        <div class="buttons">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button is-fullwidth is-rounded process-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>

                
        
        <!--Edit Credit card Modal-->
        <div id="crop-modal" class="modal mdl-modal is-small crop-modal is-animated">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="modal-card">
                    <header class="modal-card-head">
                        <div class="modal-card-title">
                            <span>Crop your picture</span>
                        </div>
                        <button class="mdl-modal-close" aria-label="close">
                            <i data-feather="x"></i>
                        </button>
                    </header>
                    <div class="modal-card-body">
                        <div id="cropper-wrapper" class="cropper-wrapper">
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Concatenated js plugins and jQuery -->
    <script src="assets/js/app.js"></script>
    
    <!-- Core js -->
    <script src="assets/data/tipuedrop_content.js"></script>
    <script src="assets/js/global.js"></script>
    <script src="assets/js/main.js"></script>
    
    <!-- Page and UI related js -->
    <script src="assets/js/signup.js"></script></body>


</html>