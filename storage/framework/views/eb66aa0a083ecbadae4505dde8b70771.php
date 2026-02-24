

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Riwayat Pendidikan</h3>
            <div class="card-tools">
                <a href="<?php echo e(route('backend.pendidikan.create')); ?>" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus"></i> Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <?php if(session('success')): ?>
                <div class="alert alert-success m-2">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama Sekolah</th>
                        <th>Tingkatan</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Selesai</th>
                        <th style="width: 100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td>
                            <?php switch($item->tingkatan):
                                case (1): ?> TK <?php break; ?>
                                <?php case (2): ?> SD <?php break; ?>
                                <?php case (3): ?> SMP <?php break; ?>
                                <?php case (4): ?> SMA/SMK <?php break; ?>
                                <?php case (5): ?> D3 <?php break; ?>
                                <?php case (6): ?> D4/S1 <?php break; ?>
                                <?php default: ?> Lainnya
                            <?php endswitch; ?>
                        </td>
                        <td><?php echo e($item->tahun_masuk); ?></td>
                        <td><?php echo e($item->tahun_keluar); ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo e(route('backend.pendidikan.edit', $item->id)); ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="<?php echo e(route('backend.pendidikan.destroy', $item->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projek\Projek\resources\views/backend/pendidikan/index.blade.php ENDPATH**/ ?>