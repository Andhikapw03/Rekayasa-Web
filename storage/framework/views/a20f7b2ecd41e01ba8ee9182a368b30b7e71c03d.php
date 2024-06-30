<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <?php if(!$addMahasiswa): ?>
                    <button wire:click="create()" class="btn btn-primary btn-sm float-end">Tambah Data Mahasiswa</button>
                <?php endif; ?>
            </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">KOTA</th>
                    <th scope="col">KOTA</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col"> ACTION </th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <?php echo e($data->nim); ?>

                            </td>
                            <td>
                                <?php echo e($data->nama); ?>

                            </td>
                            <td>
                                <?php echo e($data->alamat); ?>

                            </td>
                            <td>
                                <?php echo e($data->kota); ?>

                            </td>
                            <td>
                                <?php echo e($data->umur); ?>

                            </td>
                            <td>
                                <?php echo e($data->kelas); ?>

                            </td>
                            <td>
                                <?php echo e($data->jurusan); ?>

                            </td>
                            <td>
                                <button wire:click="edit('<?php echo e($data->nim); ?>')" class="btn btn-primary btn-sm">Edit</button>
                                <button wire:click="destroy('<?php echo e($data->nim); ?>')" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" align="center">
                                Data Mahasiswa Kosong
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
              </table>
        <div class="col-md-12 mb-2">

        <?php if(session()->has('success')): ?>

        <div class="alert alert-success" role="alert">

        <?php echo e(session()->get('success')); ?>


        </div>

        <?php endif; ?>


        <?php if(session()->has('error')): ?>

        <div class="alert alert-danger" role="alert">

        <?php echo e(session()->get('error')); ?>


        </div>

        <?php endif; ?>


        <?php if($addMahasiswa): ?>

        <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php endif; ?>


        <?php if($updateMahasiswa): ?>

        <?php echo $__env->make('livewire.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php endif; ?>

        </div>
</div>
<?php /**PATH /Users/Andhika/UAS-Rekayasa-Web/resources/views/livewire/mahasiswa.blade.php ENDPATH**/ ?>