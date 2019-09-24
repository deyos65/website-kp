<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="container">

                        <h4>Welcome to the member MAPAK ALAM </h4>
                        <h5>Regulations that must be obeyed :</h5>
                        <ul class="menu">
                            <li class="font-weight-normal text-sm text-reset text-decoration-none">Not For Public only for MAPAK ALAM members</li>
                            <li class="font-weight-normal text-sm text-reset text-decoration-none">Only member who have been registered can access and access information</li>
                            <li class="font-weight-normal text-sm text-reset text-decoration-none">if you have difficulty entering or forgetting your password,please contact the admin</li>
                            <li class="font-weight-normal text-sm text-reset text-decoration-none">Registration can be done within 1x24 hours and after being verified bye admin</li>



                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="full_name" id="full_name" placeholder="Full Name.." value="<?= set_value('full_name'); ?>">
                                    <?= form_error('full_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="nick_name" id="nick_name" placeholder="Nick Name.." value="<?= set_value('nick_name'); ?>">
                                    <?= form_error('nick_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="member_number" id="member_number" placeholder="member number.." value="<?= set_value('member_number'); ?>">
                                    <?= form_error('member_number', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="force_name" id="force_name" placeholder="force name.." value="<?= set_value('force_name'); ?>">
                                    <?= form_error('force_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>




                            <div class="container mb-3">
                                <div class="form-check form-check-inline ">
                                    <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                    <?= form_error('gender', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-check form-check-inline ">
                                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                                    <label class="form-check-label" for="female">female</label>
                                    <?= form_error('gender', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            <hr>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 