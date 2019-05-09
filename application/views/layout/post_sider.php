<div class="row">
  <div class="col-md-3">
    <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>

    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Folders</h3>

        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
          <li class="active">
            <a href="<?= base_url('dashboard/post/all') ?>">
              <i class="fa fa-inbox"></i>
              All
              <span class="label label-primary pull-right">0</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('dashboard/post/publish') ?>">
              <i class="fa fa-file-text-o"></i>
              Publish
              <span class="label label-primary pull-right">0</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('dashboard/post/drafts') ?>">
              <i class="fa fa-file-text-o"></i>
              Drafts
              <span class="label label-primary pull-right">0</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('dashboard/post/favorites') ?>">
              <i class="fa fa-file-text-o"></i>
              Favorites
              <span class="label label-primary pull-right">0</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('dashboard/post/trash') ?>">
              <i class="fa fa-trash-o"></i>
              Trash
              <span class="label label-warning pull-right">65</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /. box -->
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Labels</h3>

        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
        </ul>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
