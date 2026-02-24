

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e(isset($pendidikan) ? 'Mengubah' : 'Menambahkan'); ?> Pendidikan</h3>
        </div>
        
        <form action="<?php echo e(isset($pendidikan) ? route('backend.pendidikan.update', $pendidikan->id) : route('backend.pendidikan.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(isset($pendidikan)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>

            <div class="card-body">
                <div class="form-group mb-3">
                    <label>Nama Sekolah</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo e(isset($pendidikan) ? $pendidikan->nama : ''); ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tingkatan</label>
                    <select name="tingkatan" class="form-control" required>
                        <option value="1" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 1) ? 'selected' : ''); ?>>TK</option>
        <option value="2" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 2) ? 'selected' : ''); ?>>SD</option>
        <option value="3" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 3) ? 'selected' : ''); ?>>SMP</option>
        <option value="4" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 4) ? 'selected' : ''); ?>>SMA/SMK</option>
        <option value="5" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 5) ? 'selected' : ''); ?>>D3</option>
        <option value="6" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 6) ? 'selected' : ''); ?>>D4/S1</option>
        <option value="7" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 7) ? 'selected' : ''); ?>>S2</option>
        <option value="8" <?php echo e((isset($pendidikan) && $pendidikan->tingkatan == 8) ? 'selected' : ''); ?>>S3</option>
                        </select>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label>Tahun Masuk</label>
                        <input type="text" name="tahun_masuk" class="form-control" value="<?php echo e(isset($pendidikan) ? $pendidikan->tahun_masuk : ''); ?>" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label>Tahun Selesai</label>
                        <input type="text" name="tahun_keluar" class="form-control" value="<?php echo e(isset($pendidikan) ? $pendidikan->tahun_keluar : ''); ?>" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo e(route('backend.pendidikan.index')); ?>" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projek\Projek\resources\views/backend/pendidikan/create.blade.php ENDPATH**/ ?>