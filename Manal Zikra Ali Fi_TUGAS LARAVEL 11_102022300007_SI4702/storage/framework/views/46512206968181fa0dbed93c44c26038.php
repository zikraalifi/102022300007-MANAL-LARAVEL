<!DOCTYPE html>
<html>
<head>
    <title>Daftar Karyawan Cafe</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Daftar Karyawan Cafe</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>No HP</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $karyawans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $karyawan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($karyawan->id); ?></td>
                        <td><?php echo e($karyawan->nama); ?></td>
                        <td><?php echo e($karyawan->posisi); ?></td>
                        <td><?php echo e($karyawan->no_hp); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\PC\karyawan-cafe\resources\views/karyawans/index.blade.php ENDPATH**/ ?>