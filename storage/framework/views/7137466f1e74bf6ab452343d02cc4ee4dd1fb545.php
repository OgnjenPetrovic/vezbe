<?php $__env->startSection('content'); ?>
 <div class="blog-post">
            <h2 class="blog-post-title"><a href="#"><?php echo e($post->title); ?></a></h2>
            <p class="blog-post-meta"><?php echo e($post->created_at); ?> by <a href="#">Mark</a></p>

            <p><?php echo e($post->body); ?></p>
          </div><!-- /.blog-post -->
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>