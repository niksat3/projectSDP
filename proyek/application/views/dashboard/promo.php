<?php
$tmpl = array(
    'table_open' => '<table class="table table-hover table-striped">'
);
$this->table->set_template($tmpl);
$this->table->set_heading('Nama Promo','Deksripsi Promo','Potongan Harga','Menu','Config');
$tmp = array(
    'class' => 'btn btn-primary'
);
foreach($tambahan as $r) {
	$hsil = $this->model_menu->get($r->ID_MENU);
    $this->table->add_row($r->NAMA_PROMO,$r->DESKRIPSI_PROMO,$r->POTONGAN_HARGA,$hsil->NAMA_MENU,form_open('dashboard/promo').form_hidden('id',$r->ID_PROMO).form_button('delete','Delete',array('class'=>'btn btn-primary','onclick'=>'confirmbox('.$r->ID_PROMO.')')).form_submit('edit','Edit',$tmp).form_close());
}


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Master Promo</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <?php
                    echo $this->table->generate();
                    echo form_open();?>
                </div>
                <div>
                    <a class="btn btn-primary" href="viewInsertPromo">Insert</a>
                </div>
            </div>
        </div>
    </div>
</div>