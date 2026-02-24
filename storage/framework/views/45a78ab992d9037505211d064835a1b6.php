

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Riwayat Pendidikan</h3>
        </div>
        <form action="<?php echo e(route('backend.pendidikan.update', $pendidikan->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body">
                <div class="form-group mb-3">
                    <label>Nama Sekolah / Kampus</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo e($pendidikan->nama); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tingkat Pendidikan</label>
                    <select name="tingkat" class="form-control" required>
                        <option value="1" <?php echo e($pendidikan->tingkat == 1 ? 'selected' : ''); ?>>TK</option>
                        <option value="2" <?php echo e($pendidikan->tingkat == 2 ? 'selected' : ''); ?>>SD</option>
                        <option value="3" <?php echo e($pendidikan->tingkat == 3 ? 'selected' : ''); ?>>SMP</option>
                        <option value="4" <?php echo e($pendidikan->tingkat == 4 ? 'selected' : ''); ?>>SMA</option>
                        <option value="5" <?php echo e($pendidikan->tingkat == 5 ? 'selected' : ''); ?>>Kuliah</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label>Tahun Lulus</label>
                    <input type="number" name="tahun_keluar" class="form-control" value="<?php echo e($pendidikan->tahun_keluar); ?>" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Perbarui</button>
                <a href="<?php echo e(route('backend.pendidikan.index')); ?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projek\Projek\resources\views/backend/pendidikan/edit.blade.php ENDPATH**/ ?>