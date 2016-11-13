<?php
	$allmenu = $this->model_menu->fetch_all();
	$cbData = array();
	foreach($allmenu as $r){
		$cbData[$r->ID_MENU] = $r->NAMA_MENU;
	}


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Profile</h4>
                </div>
                <div class="content">
                    <?php echo form_open('dashboard/promo');?>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <!--label>ID Kategori(disabled)</label>
                                    <input type="text" class="form-control" disabled placeholder="Company" value="<?= $tambahan->ID_PROMO ?>">
                                    -->
                                    <?php echo form_hidden('id',$tambahan->ID_PROMO);?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Promo</label>
                                    <input name="nama" type="text" class="form-control" value="<?= $tambahan->NAMA_PROMO?>">
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <label>Potongan Harga</label>
                                    <input name="potharga" type="text" class="form-control" value="<?= $tambahan->POTONGAN_HARGA?>">
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Menu</label>
									<?php echo form_dropdown('idmenu',$cbData,'',array('class'=>'form-control')); ?>
                                    
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <label>Deskripsi Promo</label>
									<textarea name="deskripsi" class="form-control"><?= $tambahan->DESKRIPSI_PROMO?></textarea>
                                </div>
                            </div>
                        </div>
                        <?php if(!$this->session->userdata('insert')){ ?>
                        <input type="submit" name="update" class="btn btn-info btn-fill pull-right" value="Update"></input>
                        <?php }
                        else {?>
                        <input type="submit" name="insert" class="btn btn-info btn-fill pull-right" value="Insert"></input>
                        <?php
                        }
                        ?>
                        <div class="clearfix"></div>
                    </form>
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