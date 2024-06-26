<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="admin_index.php?action=admin_dangky&act=dangky_action">
                            <div class="form-group">
                                <input type="text" name="txtfullname" class="form-control form-control-user" placeholder="Fullname">
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtusername" class="form-control form-control-user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" name="txtemail" class="form-control form-control-user" placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="txtpass" class="form-control form-control-user" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="txtretype" class="form-control form-control-user" placeholder="Repeat Password">
                                </div>
                            </div>                            
                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="admin_index.php?action=admin_dangnhap">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>