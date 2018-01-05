<?php $__env->startSection('title', 'Principal'); ?>
<?php $__env->startSection("content"); ?>
    <div class="row">
       <h2>Nueva Compra Rápida</h2>
       <div class="form">
            <?php echo e(Form::open(['route' => 'comprarapida.store', 'method' => 'post'])); ?>

                <div class="form-group">
                    <?php echo e(Form::label("Título:")); ?>

                    <?php echo e(Form::text("titulo",null, array_merge(['class' => 'form-control', 'placeholder'=>'Ingresa el título']))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label("Detalle:")); ?>

                    <?php echo e(Form::textArea("detalle",null, array_merge(['class' => 'form-control', 'placeholder'=>'Detalle de la compra']))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label("Fecha de la compra:")); ?>

                    <?php echo e(Form::date('fecha',\Carbon\Carbon::now())); ?>

                 </div>
                <div class="form-group">
                    <?php echo e(Form::label("Total:")); ?>

                    <?php echo e(Form::text("total",null, array_merge(['class' => 'form-control', 'placeholder'=>'Total de la compra']))); ?>

                </div>
                <?php echo e(Form::submit("Registrar", ['class' => 'btn btn-primary'])); ?>                 
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("usuario", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>