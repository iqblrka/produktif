

<?php $__env->startSection('title', isset($pengalaman_kerja) ? 'Edit Pengalaman Kerja' : 'Tambah Pengalaman Kerja'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('backend.pengalaman_kerja.index')); ?>">Pengalaman Kerja</a></li>
    <li class="breadcrumb-item active"><?php echo e(isset($pengalaman_kerja) ? 'Edit' : 'Tambah'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?php echo e(isset($pengalaman_kerja) ? 'Edit' : 'Tambah'); ?> Data</h3>
      </div>
      
      <form action="<?php echo e(isset($pengalaman_kerja) ? route('backend.pengalaman_kerja.update', $pengalaman_kerja->id) : route('backend.pengalaman_kerja.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($pengalaman_kerja)): ?>
          <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        
        <div class="card-body">
          <div class="form-group mb-3">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama" class="form-control" value="<?php echo e(old('nama', $pengalaman_kerja->nama ?? '')); ?>" required>
          </div>
          
          <div class="form-group mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="<?php echo e(old('jabatan', $pengalaman_kerja->jabatan ?? '')); ?>" required>
          </div>
          
          <div class="form-group mb-3">
            <label>Tahun Masuk</label>
            <input type="number" name="tahun_masuk" class="form-control" value="<?php echo e(old('tahun_masuk', $pengalaman_kerja->tahun_masuk ?? '')); ?>" required>
          </div>
          
          <div class="form-group mb-3">
            <label>Tahun Keluar</label>
            <input type="number" name="tahun_keluar" class="form-control" value="<?php echo e(old('tahun_keluar', $pengalaman_kerja->tahun_keluar ?? '')); ?>" required>
          </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?php echo e(route('backend.pengalaman_kerja.index')); ?>" class="btn btn-secondary">Batal</a>
        </div>
      </form>
      
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projek\Projek\resources\views/backend/pengalaman_kerja/create.blade.php ENDPATH**/ ?>