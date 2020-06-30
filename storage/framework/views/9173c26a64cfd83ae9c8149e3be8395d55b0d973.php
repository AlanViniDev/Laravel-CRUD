
<?php $__env->startSection('content'); ?>
<h1 class = "text-center">CRUD</h1> <hr>

<div class = "text-center mt-3 mb-4">
<a href = "<?php echo e(url('books/create')); ?>">
<button class = "btn btn-success"> Cadastrar </button>
</a>
</div>

<div class = "col-8 m-auto">
<?php echo csrf_field(); ?>
<table class = "table text-center">
<thead class = "">
<tr>
<th scope = "col">ID</th>
<th scope = "col">Titulo</th>
<th scope = "col">Autor</th>
<th scope = "col">Preço</th>
<th scope = "col">Action</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$user = $books->find($books->id)->relUsers;
?>
<tr>
<td><?php echo e($books->id); ?></td>
<td><?php echo e($books->titulo); ?></td>
<td><?php echo e($user->name); ?></td>
<td><?php echo e($books->price); ?></td>

<td>
<a href = "<?php echo e(url("books/$books->id")); ?>">
<button class = "btn btn-success" >Visualizar</button>
</a>
<a href = "<?php echo e(url("books/$books->id/edit")); ?>">
<button class = "btn btn-primary">Editar</button>
</a>
<a href = "<?php echo e(url("books/$books->id")); ?>" class = "js-del">
<button class = "btn btn-danger">Excluir</button>
</a>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\resources\views/index.blade.php ENDPATH**/ ?>