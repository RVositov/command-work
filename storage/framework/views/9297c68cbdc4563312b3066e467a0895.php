<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('li.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <table  class="table" border="1">

      <tr>
         <th>#          </th>
         <th>Title      </th>
         <th>Description</th>
         <th>edit      </th>
         <th>show     </th>
         <th>delete     </th>
      </tr>

      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td>
        <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($book->title); ?></td>
            <td><?php echo e($book->description); ?></td>


            <td>
        <a href="<?php echo e(route('book.show',$book )); ?>">show</a>
            </td>

            <td>
        <a href="<?php echo e(route('book.edit',$book )); ?>">Edit</a>
            </td>



            <td>
              <form action="<?php echo e(route('book.destroy',$book)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('delete'); ?>
            <input type="submit" value="delete">
              </form>
            </td>


</tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  </table>
</body>
</html>
<?php /**PATH C:\OSPanel\home\library\command-work\resources\views/book/index.blade.php ENDPATH**/ ?>