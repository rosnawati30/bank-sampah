<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="px-4 py-20 sm:ml-64">
    <div class="justify-center content-center">
        <div class="flex-col px-3 py-1 bg-white">
            
            <div class="flex mb-2 items-center">
                <p class="flex-none text-lg font-bold text-gray-900"> Detail Nasabah </p>
            </div>

            <div class="relative overflow-x-auto text-md">
                <table>
                    <tr>
                        <td class="pr-6 py-1 font-semibold"> Nama </td>
                        <td class=""> <?= $nasabah['nama'] ?> </td>
                    </tr>
                    <tr>
                        <td class="pr-6 py-1 font-semibold"> Alamat </td>
                        <td class=""> <?= $nasabah['alamat'] ?> </td>
                    </tr>
                    <tr>
                        <td class="pr-6 py-1 font-semibold"> Total Sampah </td>
                        <td class=""> <?= $nasabah['total_sampah'] ?> kg </td>
                    </tr>
                </table>                
            </div>

            <div class="w-full flex items-center justify-between">
                <div class="flex-none mt-2 mb-2">
                    <button data-modal-target="popup-modal" onclick="showberat()" data-modal-toggle="popup-modal" type="button" class="text-white bg-green-800 hover:bg-indigo-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 focus:outline-none">
                        Tambah Transaksi
                    </button>

                    <!-- Modal Timbang -->
                    <form action="/transaksi/create/<?= $nasabah['id_nasabah']  ?>" method="POST">
                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0 0 12 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 0 1-2.031.352 5.988 5.988 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971Zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0 2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 0 1-2.031.352 5.989 5.989 0 0 1-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971Z" />
                                        </svg>
                                        <h3 class="mb-5 text-md font-normal text-gray-500"> Letakkan sampah pada timbangan. Klik "Lanjut" jika berat sudah stabil. </h3>
                                        <h3 class="mb-5 text-3xl font-semibold text-gray-900"><span id="displayweight"></span> kg</h3>
                                        <button type="submit" value="Save" data-modal-hide="popup-modal" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Lanjut
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <?php if(session()->getFlashdata('pesan')) : ?>
                    <div id="toast-success" class="flex w-full items-center max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow" role="alert">
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
                <?php endif; ?>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Sampah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Berat (kg)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($transaksi as $t): ?>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap w-16">
                                <?= $i++; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $t['jenis_sampah'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $t['berat'] ?>
                            </td>
                            <td class="px-6 py-4">
                                Rp<?= number_format($t['total_harga'], 2); ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= date('d M Y', strtotime($t['created_at'])) ?>
                            </td>
                            <td class="px-6 py-4">
                                <form action="/transaksi/delete/<?= $t['id_transaksi']; ?>" method="post" class="inline-block">
                                    <?php csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" onclick="return confirm('Yakin untuk menghapus transaksi ini?')" data-modal-target="popup-modal delete"data-modal-toggle="popup-modal delete" class="font-medium text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    function showberat()
    {
        $(document).ready(function(){
        setInterval(function(){
            $("#displayweight").load("<?=site_url('transaksi/weight');?>");
        }, 1000);
    });
    }
</script>

<?= $this->endSection(); ?>