<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body settings-page">
	<h3>Resent Post Send to Buffer</h3>
	<table class="table table-striped table-bordered">
        
        <thead>
          <tr>
            <th scope="col">    <input type="txt" placeholder="search">
            </th>
            <th scope="col">    <input type="date"  >
            </th>
            <th> 
              <?php
                  $val= DB::table('social_post_groups')->select('type')->distinct()->get(); 
              ?>
            

                <select name="cars" id="cars">
                  <option selected>All Group</option>
                  <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option ><a href="<?php echo e(route('group-type',['id'=>$item->type])); ?>"><?php echo e($item->type); ?></a></option>   
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
                </select></th>
            

          </tr>
        </thead>
        <tbody>
            <tr>
            <th >Group Name</th>
            <th >Group Type</th>
            <th >Acount Name</th>
            <th >Post Text</th>
            <th >Time</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
    
          <tr>
          <th><?php echo e($item->name); ?></th>
          <th><?php echo e($item->type); ?></th>
          <th><img src="" alt=""></th>
          <th><?php echo e($item->post_text); ?></th>
          <th><?php echo e($item->created_at); ?></th>
        

          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($data->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>