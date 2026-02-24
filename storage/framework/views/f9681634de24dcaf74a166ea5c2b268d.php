

<?php $__env->startSection('title', isset($pengalaman_kerja) ? 'Edit Pengalaman Kerja' : 'Tambah Pengalaman Kerja'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title"><?php echo e(isset($pengalaman_kerja) ? 'Edit' : 'Tambah'); ?> Data Pengalaman Kerja</h3>
                </div>
                
                <form action="<?php echo e(isset($pengalaman_kerja) ? route('backend.pengalaman_kerja.update', $pengalaman_kerja->id) : route('backend.pengalaman_kerja.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php if(isset($pengalaman_kerja)): ?>
                        <?php echo method_field('PUT'); ?>
                    <?php endif; ?>
                    
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <strong>Gagal!</strong> Periksa kembali inputan Anda.
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="form-group mb-3">
                            <label for="nama">Nama Perusahaan</label>
                            <input type="text" name="nama" id="nama" class="form-control" 
                                   value="<?php echo e(old('nama', $pengalaman_kerja->nama ?? '')); ?>" 
                                   placeholder="Contoh: PT. Mencari Cinta Sejati" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" class="form-control" 
                                   value="<?php echo e(old('jabatan', $pengalaman_kerja->jabatan ?? '')); ?>" 
                                   placeholder="Contoh: Senior Web Developer" required>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="tahun_masuk">Tahun Masuk</label>
                                    <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control" 
                                           value="<?php echo e(old('tahun_masuk', $pengalaman_kerja->tahun_masuk ?? '')); ?>" 
                                           placeholder="YYYY" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="tahun_keluar">Tahun Keluar</label>
                                    <input type="number" name="tahun_keluar" id="tahun_keluar" class="form-control" 
                                           value="<?php echo e(old('tahun_keluar', $pengalaman_kerja->tahun_keluar ?? '')); ?>" 
                                           placeholder="YYYY" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Simpan Data
                        </button>
                        <a href="<?php echo e(route('backend.pengalaman_kerja.index')); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projek\Projek\resources\views/backend/pengalaman_kerja/create.blade.php ENDPATH**/ ?>