<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Sample</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">List Sample</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="animate-menu-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
          <div class="alert-title">
            <h4><i class="fa fa-list"></i><strong> List Sample App</strong></h4>
          </div>
          <hr/>
          <div class="row">
            <?php foreach($sample as $item){?>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <div class="view-mail-file-list">
                  <div class="view-file-in">
                      <img src="<?php echo base_url()?>assets/img/logo/sample1.png" width="100px"></img>
                  </div>
                  <div class="file-type-view">
                      <h5><a class="btn btn-primary" href="<?php echo base_url()?><?php echo $item->modul ?>/<?php echo $item->function ?>" type="button"><?php echo $item->nama_sample ?></a></h5>
                  </div>
                  <div class="file-type-view">
                      <text><?php echo $item->deskripsi ?></text>
                  </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
