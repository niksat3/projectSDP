<?php
    $tmpl = array(
        'table_open' => '<table class="table table-hover table-striped">'
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('Nama Kategori','Config');
    $tmp = array(
        'class' => 'btn btn-primary'
    );
    foreach($tambahan as $r) {
        $this->table->add_row($r->NAMA_KATEGORI,form_open('dashboard/category').form_hidden('id',$r->ID_KATEGORI).form_button('delete','Delete',array('class'=>'btn btn-primary','onclick'=>'confirmbox('.$r->ID_KATEGORI.')')).form_submit('edit','Edit',$tmp).form_close());
    }


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Master Kategori</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <?php
                    echo $this->table->generate();
                    echo form_open();?>
                </div>
                <div>
                    <a class="btn btn-primary" href="viewInsertKategori">Insert</a>
                </div>
            </div>
        </div>
    </div>
</div>