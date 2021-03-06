<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Edit Profil</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">

  </head>
  <body style="margin-top: 60px;">
    <!-- NAVBAR -->
    <nav class="navbar-default navbar-fixed-top" >
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" style="color:white;" href="<?php echo base_url(''); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Edit Profil</span></a>
          </div>
        </div><!--/.container -->
      </nav>
    <!-- NAVBAR -->
    <div class="container">
        <div class="col-md-4 col-md-offset-4 form-login">
            <div class="outter-form-login">
                <form action="<?php echo base_url('Daftar/proses'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
                    <h5 class="title-login"><strong>Edit Profil</strong></h5>
                    <p style="color: red;">
                        <?php
                        if (empty($warning)) {
                            echo "";
                        }else{
                            echo $warning;
                        }
                        ?>
                    </p>
                    <!-- fullname -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Ubah Nama</span>
                                    <input name="fullname" type="text" class="form-control" placeholder="Full Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- username -->
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                    <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <!-- dateofbirth -->

                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group" id="formgrupmarginbtm">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                                    <input name="dateofbirth" type="date" class="form-control" placeholder="Date of Birth" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <span class="help-block">*Date of Birth</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group" id="formgrupmarginbtm">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-custom-yellow"> <span class="glyphicon glyphicon-folder-open"></span></span>
                                    </label>
                                    <input name="userfile" type="file" class="form-control"  readonly>
                                </div>
                            </div>
                            <span class="help-block">*Choose Your Avatar</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input name="password" type="password" class="form-control validate" placeholder="Password" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input name="confirmpassword" type="password" class="form-control validate" placeholder="Confirm Password" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- province -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                                    <select class="form-control" name="province">
                                        <option>Province</option>
                                        <option>Jawa Timur</option>
                                        <option>Jawa Barat</option>
                                        <option>Jawa Tengah</option>
                                        <option>Sumatera Barat</option>
                                        <option>Sumatera Selatan</option>
                                        <option>Kalimantan Timur</option>
                                        <option>Maluku Utara</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- city -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                                    <select class="form-control" name="city">
                                        <option>City</option>
                                        <option>Banyuwangi</option>
                                        <option>Madiun</option>
                                        <option>Malang</option>
                                        <option>Surabaya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                                    <!-- <input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1"> -->
                                    <textarea name="address" class="form-control" rows="2" cols="50" placeholder="Address" aria-describedby="basic-addon1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                    <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                                    <input name="handphone" type="text" class="form-control" placeholder="Handphone" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input name="submit" type="submit" class="btn btn-block btn-custom-green" value="REGISTER" />
                    <div class="text-center forget">
                        <p>Back To <a href="<?php echo base_url('login'); ?>"><span id="register">Login</span></a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
