<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/css/login.css">
<!------ Include the above in your HEAD tag ---------->
<body  style="background:url('<?=base_url();?>assets/image/login_bg.jpg');">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="<?=base_url() . "assets/logo-blue.png";?>" alt=""/>
                        <h3>Welcome Again !!!</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a class="navbar-brand" href="<?=base_url();?>dashboard"><b style="color:lime;font-size: larger">INNOVATIVE</b> <b style="color:black;">ADMIN</b></a>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login here</h3>
                                <form method="post" action="<?=base_url();?>login">
                                <div class="row register-form">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Username" name="username" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Password" name="password"  required="" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="sub"  value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </body>
