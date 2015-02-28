
   <div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
     <div class="col-lg-4">
      <div class="widget-head-color-box blue-bg p-lg text-center">
       <div class="m-b-md">
        <h2 class="font-bold no-margins">
         <?php echo $data['pUser']->getUsername(); ?>
        </h2>
        <small>Dehack's leader</small>
       </div>
       <div class="profile_image">
        <img src="/app/templates/default/assets/img/2_big.jpg" class="img-circle circle-border m-b-md" alt="profile">
       </div>
       <div>
        <span>0 friends</span> |
        <span>0 minions</span> |
        <span>0 clan members</span>
       </div>
      </div>
      <div class="widget-text-box">
       <h4 class="media-heading"><?php echo $data['pUser']->getUsername(); ?></h4>
       <p>We shall enforce our will. Thou shalt be left in tears.</p>
      </div>
     </div>
     <div class="col-md-8">
      <div class="ibox float-e-margins">
       <div class="ibox-title">
        <h5>Activities</h5>
       </div>
       <div class="ibox-content">
        <div>
         <div class="feed-activity-list">
          <div class="feed-element">
           <a href="#" class="pull-left">
            <img alt="image" class="img-circle" src="/app/templates/default/assets/img/2_small.jpg">
           </a>
           <div class="media-body">
            <small class="pull-right text-navy">1m ago</small>
            <strong><?php echo $data['pUser']->getUsername(); ?></strong> got shutdown by <strong>FBI</strong>. <br>
            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
            <div class="actions">
             <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
            </div>
           </div>
          </div>
          <div class="feed-element">
           <a href="#" class="pull-left">
            <img alt="image" class="img-circle" src="/app/templates/default/assets/img/2_small.jpg">
           </a>
           <div class="media-body">
            <small class="pull-right text-navy">2m ago</small>
            <strong><?php echo $data['pUser']->getUsername(); ?></strong> hacked <strong>FBI</strong>. <br>
            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
            <div class="actions">
             <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>