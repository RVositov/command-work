<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('li.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Book</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('book.create')); ?>">add book</a>
            <form action="<?php echo e(route('book.store')); ?>" method="POST" >
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="title" class="form-label">📚 Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="book title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">📝 Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter description..."></textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    💾 Save
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\OSPanel\home\library\command-work\resources\views/book/create.blade.php ENDPATH**/ ?>