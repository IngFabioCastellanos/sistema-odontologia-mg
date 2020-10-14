<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Insumos</h1>
        <h1 class="pull-right">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear insumos')): ?>
           <a class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo e(route('insumos.create')); ?>">Agregar nuevo insumo</a>
            <?php endif; ?>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('insumos.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="text-center">
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $insumos], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sistema-odontologia-mg\resources\views/insumos/index.blade.php ENDPATH**/ ?>