<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<form action="<?= base_url('nasabah/update/').$nasabah['id_nasabah']?>" method="post">
    <div class="px-4 py-20 sm:ml-64">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Form Ubah Data Nasabah</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Pastikan data yang diubah sudah benar.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                        <div class="mt-2">
                            <input type="text" name="nama" id="nama" value="<?= old('nama', $nasabah['nama']) ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <?php if (isset($validation) && $validation->hasError('nama')): ?>
                                <div class="error"><?= $validation->getError('nama') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                        <div class="mt-2">
                            <textarea id="alamat" name="alamat" rows="3" class="block w-1/2 rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= old('alamat', $nasabah['alamat']) ?></textarea>
                            <?php if (isset($validation) && $validation->hasError('alamat')): ?>
                                <div class="error"><?= $validation->getError('alamat') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="total_sampah" class="block text-sm font-medium leading-6 text-gray-900">Berat Sampah</label>
                        <div class="mt-2">
                            <input type="text" name="total_sampah" id="total_sampah" value="<?= old('total_sampah', $nasabah['total_sampah']) ?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <?php if (isset($validation) && $validation->hasError('total_sampah')): ?>
                                <div class="error"><?= $validation->getError('total_sampah') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-center gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a href="<?= base_url('nasabah') ?>">Batal</a></button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>