@include('auth.layout.header');
<div class="container d-flex h-100">
    <div class="row align-items-center w-100">
        <div class="col-md-7 col-lg-5 m-h-auto">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-30">
                        <img class="img-fluid" alt="" src="{{ asset('admin/demo/app') }}/assets/images/logo/logo-dark.png" width="200">
                        <h2 class="m-b-0">Sign Up</h2>
                    </div>
                    <form>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="userName">Username:</label>
                            <input type="text" class="form-control" id="userName" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                <div class="checkbox">
                                    <input id="checkbox" type="checkbox" required>
                                    <label for="checkbox"><span>I have read the <a href="">agreement</a></span></label>
                                </div>
                                <button class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('auth.layout.footer');
