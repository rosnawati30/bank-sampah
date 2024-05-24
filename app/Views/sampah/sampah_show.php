<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="px-4 py-20 sm:ml-64">

    <div class="w-full flex items-center justify-between">
        <div class="flex-none">
            <button type="button" class="text-white bg-green-800 hover:bg-indigo-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 focus:outline-none">
            <a href="sampah_add">
                Tambah Data Sampah
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
                        Item
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php $id_sampah = 1; ?>
                <?php $sampah = ['Ember', 'AC']; ?>
                <?php foreach ($sampah as $s): ?>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap w-16">
                        <?= $i++; ?>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $s; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $s; ?>
                    </td>
                    <td class="px-6 py-4">
                        2000
                    </td>
                    <td class="px-6 py-4">
                        <a href="nasabah_update/<?= $id_sampah; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ubah</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection(); ?>