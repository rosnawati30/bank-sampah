<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="px-4 py-20 sm:ml-64">

    <div class="w-full flex items-center justify-between">
        <div class="flex-none">
            <button type="button" class="text-white bg-green-800 hover:bg-indigo-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 focus:outline-none">
            <a href="nasabah/create">
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
                        <a href="nasabah/detail/<?= $p['id_nasabah']; ?>" class="font-medium text-green-600 hover:underline">Detail</a>
                        <a href="nasabah/edit/<?= $p['id_nasabah']; ?>" class="font-medium text-yellow-600 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>