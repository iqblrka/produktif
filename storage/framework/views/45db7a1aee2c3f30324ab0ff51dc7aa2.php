

<?php $__env->startSection('title', 'Pengalaman Kerja'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item active">Pengalaman Kerja</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Pengalaman Kerja</h3>
        <div class="card-tools">
          <a href="<?php echo e(route('backend.pengalaman_kerja.create')); ?>" class="btn btn-primary btn-sm">
            <i class="bi bi-plus"></i> Tambah Data
          </a>
        </div>
      </div>
      
      <div class="card-body">
        <?php if(session('success')): ?>
          <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Perusahaan</th>
              <th>Jabatan</th>
              <th>Tahun Masuk</th>
              <th>Tahun Keluar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $pengalaman_kerja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td><?php echo e($index + 1); ?></td>
              <td><?php echo e($item->nama); ?></td>
              <td><?php echo e($item->jabatan); ?></td>
              <td><?php echo e($item->tahun_masuk); ?></td>
              <td><?php echo e($item->tahun_keluar); ?></td>
              <td>
                <a href="<?php echo e(route('backend.pengalaman_kerja.edit', $item->id)); ?>" class="btn btn-warning btn-sm">
                  <i class="bi bi-pencil"></i>
                </a>
                <form action="<?php echo e(route('backend.pengalaman_kerja.destroy', $item->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
              <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projek\Projek\resources\views/backend/pengalaman_kerja/index.blade.php ENDPATH**/ ?>