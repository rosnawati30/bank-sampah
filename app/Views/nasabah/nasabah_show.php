<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="px-4 py-20 sm:ml-64">

    <div class="w-full flex items-center justify-between">
        <div class="flex-none">
            <button type="button" class="text-white bg-green-800 hover:bg-indigo-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 focus:outline-none">
            <a href="<?= base_url('nasabah_add') ?>">
                Tambah Data Nasabah
            </a>  
            </button>
        </div>

        <!-- di sini nanti buat naro notif kalo data berhasil ditambah, dihapus, diedit -->
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
                <?php $i = 1; ?>
                <?php $id_nasabah = 1; ?>
                <?php $nasabah = ['Fitri', 'Fedya', 'Rosnawati', 'Shierra'] ?>
                <?php foreach ($nasabah as $p): ?>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap w-16">
                        <?= $i++; ?>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $p; ?>
                    </th>
                    <td class="px-6 py-4">
                        Jalan Windah
                    </td>
                    <td class="px-6 py-4">
                        5 kg
                    </td>
                    <td class="px-6 py-4">
                        <a href="<?= base_url('nasabah_detail') ?>" class="font-medium text-green-600 hover:underline">Detail</a>
                        <a href="<?= base_url('nasabah_update') ?>" class="font-medium text-yellow-600 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection(); ?>