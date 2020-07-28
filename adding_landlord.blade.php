
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from demo.frontted.com/hero/050520180000/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jul 2020 18:59:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hero</title>


    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- App CSS -->
    <link type="text/css" href="{{url('/assets/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{url('/assets/css/app.rtl.css')}}" rel="stylesheet">

    <!-- Simplebar -->
    <link type="text/css" href="{{url('/assets/vendor/simplebar.css')}}" rel="stylesheet">
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable" style="overflow-y: auto;" data-simplebar data-simplebar-force-enabled="true">


            <div class="container h-vh d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <a href="index.html" class="drawer-brand-circle mr-2">H</a>
                    <h2 class="ml-2 text-bg mb-0"><strong>Texas</strong></h2>
                </div>

                <div class="row w-100 justify-content-center">
                    <form class="card card-signup mb-3" action="/landlords/store" method="post">
                       
                    @csrf                    
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </div>
                                        <input type="text" class="form-control" name="firstname">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname">Last Name</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </div>
                                        <input type="text" class="form-control" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>PhoneNumber</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">phone</i>
                                    </div>
                                    <input type="text" class="form-control" name="phonenumber">
                                </div>
                            </div>
                            <div class="form-group left-icon">
                                <label>Date of Birth</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">date</i>
                                    </div>
                                    <input type="date" class="form-control" name="date">
                                </div>
                            </div>
                            <div class="form-group left-icon">
                                <label>City</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">City</i>
                                    </div>
                                    <input type="text" class="form-control" name="City">
                                </div>
                            </div>
                            <div class="form-group left-icon">
                                <label>District</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">District</i>
                                    </div>
                                    <input type="text" class="form-control" name="discript">
                                </div>
                            </div>
                            <div class="form-group left-icon">
                                <label>Ward</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">Ward</i>
                                    </div>
                                    <input type="text" class="form-control" name="ward">
                                </div>
                            </div>
                            <div class="form-group left-icon">
                                <label>National ID</label>
                                <div class="input-group input-group--inline">
                                    <div class="input-group-addon">
                                        <i class="material-icons">number</i>
                                    </div>
                                    <input type="text" class="form-control" name="national_id">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
                <div class="d-flex justify-content-center">
                    <span class="mr-2">Already have an account?</span>
                    <a href="login.html">Log In</a>
                </div>


            </div>
        </div>

        <script>
            (function() {
                'use strict';

                // Self Initialize DOM Factory Components
                domFactory.handler.autoInit();
            });
        </script>
</body>


<!-- Mirrored from demo.frontted.com/hero/050520180000/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jul 2020 18:59:01 GMT -->
</html>
