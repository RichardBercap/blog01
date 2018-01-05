<?php $__env->startSection('title', 'lista de compras rapidas'); ?>
<?php $__env->startSection("content"); ?>
    <div class="wow">
		<table class="table table-striped">
            <caption><h2>Ventas pequeñas realizadas</h2> </caption>
            <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Detalle</th>
                        <th>Total</th>
                        <th>Fecha</th>
                    </tr>
            </thead>
            <tbody>
                
                
                <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                   <tr>
                     <td><?php echo e($compra->id); ?></td>
                     <td><?php echo e($compra->titulo); ?></td>
                     <td><?php echo e($compra->detalle); ?></td>
                     <td><?php echo e($compra->total); ?></td>
                     <td><?php echo e($compra->fecha); ?></td>
                    </tr> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
                

            </tbody>
        </table>
        <div class="row col-xs-5">
            <a href="<?php echo e(url('/comprarapida/create')); ?>" class="btn btn-success col-xs-12">Nuevo</a>
        </div>
     
 <br>      
    </div>		
    <?php echo $compras->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("usuario", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>