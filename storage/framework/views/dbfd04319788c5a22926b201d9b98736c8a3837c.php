<?php $__env->startSection('title', 'Principal'); ?>
<?php $__env->startSection("content"); ?>
    <div class="row">
       <h2>Llene el siguiente formulario</h2>
       <div class="form">
            <?php echo e(Form::open(['route' => 'clientes.store', 'method' => 'post','files' => true])); ?>

                <div class="form-group">
                    <?php echo e(Form::label("Nombre:")); ?>

                    <?php echo e(Form::text("nombres",null, array_merge(['class' => 'form-control', 'placeholder'=>'Ingresa el nombre completo']))); ?>

                </div>
                <div class="form-group">
                   <?php echo e(Form::label("Apellido paterno:")); ?>

                    <?php echo e(Form::text("ap",null, array_merge(['class' => 'form-control', 'placeholder'=>'Apellido Paterno']))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label("Apellido Materno:")); ?>

                    <?php echo e(Form::text("am",null, array_merge(['class' => 'form-control', 'placeholder'=>'Apellido Materno']))); ?>

                 </div>
                <div class="form-group">
                    <?php echo e(Form::label("CI:")); ?>

                    <?php echo e(Form::text("ci",null, array_merge(['class' => 'form-control', 'placeholder'=>'# de CI.']))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label("Tel/Cel:")); ?>

                    <?php echo e(Form::text("cel",null, array_merge(['class' => 'form-control', 'placeholder'=>'# de Tel/Cel']))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label("Dirección:")); ?>

                    <?php echo e(Form::text("direccion",null, array_merge(['class' => 'form-control', 'placeholder'=>'Dirección del cliente']))); ?>

                </div>
                <div class="form-group">
                    <?php echo e(Form::label("Foto:")); ?>

                    <?php echo e(Form::file('foto', $attributes = [])); ?>

                </div>
                
                <?php echo e(Form::submit("Registrar", ['class' => 'btn btn-primary'])); ?>                 
            <?php echo Form::close(); ?>

        </div>
        <br><br>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("usuario", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>