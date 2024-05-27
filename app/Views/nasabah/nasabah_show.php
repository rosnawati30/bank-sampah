<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="px-4 py-20 sm:ml-64">
    <div class="justify-center content-center">
    <div class="flex-col px-3 py-1 bg-white">

    <div class="w-full flex items-center justify-between">
        <div class="flex-none">
            <button type="button" class="text-white bg-green-800 hover:bg-indigo-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 focus:outline-none">
            <a href="<?= base_url('nasabah/add') ?>">
                Tambah Data Nasabah
            </a>  
            </button>
            <!-- di sini nanti buat naro notif kalo data berhasil ditambah, dihapus, diedit -->
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div id="toast-success" class="flex w-full items-center max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal"><?= session()->getFlashdata('pesan'); ?></div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Sampah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nasabah as $index => $p): ?>
                <tr class="bg-white border-b">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap w-16">
                        <?= $index + 1 ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $p['nama'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $p['alamat'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $p['total_sampah'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <a href="<?= base_url('nasabah/detail/').$p['id_nasabah']; ?>" class="font-medium text-green-600 hover:underline">Detail</a>
                        <a href="<?= base_url('nasabah/edit/').$p['id_nasabah']; ?>" class="font-medium text-yellow-600 hover:underline">Edit</a>
                        <a href="<?= base_url('nasabah/delete/').$p['id_nasabah']; ?>" class="font-medium text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>


<?= $this->endSection(); ?>