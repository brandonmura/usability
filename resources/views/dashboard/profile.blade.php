@include("dashboard.navigation")

<div class="page-wrapper">
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3">
            <div class="card">
                <div class="card-body">
                    <center class="mt-4"> <img src="/img/team-1.jpg" class="rounded-circle" width="150" />
                        <h4 class="card-title mt-2">Johnny Depp</h4>
                        <h6 class="card-subtitle">Event Manager in Hello World SV</h6>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6>Example@gmail.com</h6> <small class="text-muted pt-4 db">Phone</small>
                    <h6>+000 000 00000</h6> <small class="text-muted pt-4 db">Address</small>
                    <h6>Het Groene Woud 1, 4331 NB Middelburg</h6>
                    <div class="map-box">
                    </div> <small class="text-muted pt-4 db">Social Profile</small>
                    <br />
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-instagram" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12">Full Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnny Depp"
                                       class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="example@gmail.com"
                                       class="form-control form-control-line" name="example-email"
                                       id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Phone No</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="+000 000 00000"
                                       class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Address</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Het Groene Woud 1, 4331 NB Middelburg"
                                       class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Facebook</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="https://www.facebook.com/HZUniversityofAppliedSciences/"
                                       class="form-control form-control-line">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Instagram</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="https://www.instagram.com/hzuniversityofappliedsciences/"
                                       class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="password" value="password"
                                       class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</div>

@include("dashboard.footer")
