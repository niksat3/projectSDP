
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Customer</h4>
                            </div>
                            <div class="content">
									<?php echo form_open('dashboard/editCustomer/'.$tambahan->ID_CUSTOMER); ?>
                                    <div class="row">
										<input type="hidden" name="id" class="form-control" value="<?= $tambahan->ID_CUSTOMER ?>">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" disabled class="form-control" value="<?= $tambahan->USERNAME_CUSTOMER ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" value="<?= $tambahan->EMAIL_CUSTOMER ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Customer</label>
                                                <input type="text" name="nama" class="form-control" value="<?= $tambahan->NAMA_CUSTOMER ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control" value="<?= $tambahan->ALAMAT_CUSTOMER ?>">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <input type="text" name="kota" class="form-control" value="<?= $tambahan->KOTA_CUSTOMER ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No Telp</label>
                                                <input type="text" name="notelp" class="form-control" value="<?= $tambahan->NO_TELP_CUSTOMER ?>">
                                            </div>
                                        </div>
                                    </div>
									<?php echo form_submit('update','Update',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
									<?php echo form_close(); ?>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>