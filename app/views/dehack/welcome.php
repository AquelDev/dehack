
   <div class="wrapper wrapper-content">
    <div class="row">
     <div class="col-lg-6">
      <div class="ibox float-e-margins">
       <div class="ibox-title">
        <h5>Hardware Information</h5>
       </div>
       <div class="ibox-content">
        <table class="table table-cozy table-bordered table-striped table-fixed with-check">
         <tbody>
          <tr>
           <td><span class="item">Processor</span></td>
           <td><?php echo $data['pro']; ?> GHz</td>
          </tr>
          <tr>
           <td><span class="item">Hard Drive</span></td>
           <td><?php echo $data['hdd']; ?> GB</td>
          </tr>
          <tr>
           <td><span class="item">Memory</span></td>
           <td><?php echo $data['mem']; ?> GB</td>
          </tr>
          <tr>
           <td><span class="item">Internet</span></td>
           <td><?php echo $data['con']; ?> Mbit/s</td>
          </tr>
          <tr>
           <td><span class="item">External HD</span></td>
           <td><?php echo $data['ext']; ?> MB</td>
          </tr>
         </tbody>
        </table>
       </div>
      </div>
     </div>
     <div class="col-lg-6">
      <div class="ibox float-e-margins">
       <div class="ibox-title">
        <h5>General Information</h5>
       </div>
       <div class="ibox-content">
        Empty.
       </div>
      </div>
     </div>
    </div>
   </div>
