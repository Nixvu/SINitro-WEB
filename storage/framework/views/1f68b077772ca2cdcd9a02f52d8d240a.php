<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <p>This is your dashboard.</p>
        <!-- Konten dashboard lainnya -->
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Admin\Music\sinitro\resources\views/sinitro/dashboard.blade.php ENDPATH**/ ?>