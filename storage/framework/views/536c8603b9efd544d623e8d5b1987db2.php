<section class="py-5">
    <div class="container px-5 mb-5" >
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">All Post With Category</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">
                <?php $__currentLoopData = $postdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">

                                <h2 class="fw-bolder"> <?php echo e($data->name); ?></h2>
                                <h4 class="fw-bolder"> <?php echo e($data->category['name']); ?></h4>
                                <p><?php echo e($data->description); ?></p>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

            </div>
        </div>
    </div>
</section>


<?php /**PATH C:\xamppeighttwo\htdocs\laravel\assignment_18\resources\views/components/posts.blade.php ENDPATH**/ ?>