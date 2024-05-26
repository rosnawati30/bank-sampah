<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>

<div class="px-4 py-20 sm:ml-64">

    <div class="w-full flex items-center justify-between">
        <div class="flex-none">
            <button type="button" class="text-white bg-green-800 hover:bg-green-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-4 focus:outline-none">
            <a href="sampah/create">
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
            <?php if(is_countable($sampah) && count($sampah) > 0): ?>
            <?php $i = 1; ?>
            <?php foreach($sampah as $row): ?>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap w-16">
                        <?= $i++; ?>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $row->kode ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $row->item ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $row->harga ?>
                    </td>
                    <td class="px-6 py-4 items-center justify-center">
                        <a href="<?= base_url('sampah/update/'.$row->id_sampah) ?>" class="pr-2 text-blue-600 dark:text-blue-500 hover:text-blue-800">
                            <i class="fa fa-pencil-square" style="font-size: 24px;" aria-hidden="true"></i>
                        </a>
                        <a href="<?= base_url('sampah/delete/'.$row->id_sampah) ?>" onclick="if(confirm('Apa kamu yakin ingin menghapus <?= $row->item ?>?') === false) event.preventDefault()" title="Hapus Sampah" class="text-red-600 dark:text-red-500 hover:text-red-800">
                            <i class="fa fa-trash" style="font-size: 24px;" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

 <!-- toast-->
 <?php if (!empty($session->getFlashdata('success'))) : ?>
 <!--success message-->
 <div x-data="{ nofifiction: true }" class="fixed bottom-2 right-2">
    <div x-show="nofifiction" x-transition class="flex items-center justify-between max-w-xs p-4 bg-white border rounded-md shadow-sm">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
        clip-rule="evenodd" />
      </svg>
        <p class="ml-3 text-sm font-bold text-green-600"><?php echo $session->getFlashdata('success'); ?></p>
    </div>
    <span @click="nofifiction=false;" class="inline-flex items-center cursor-pointer ml-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </span>
    </div>
  </div>
  <?php endif; ?>

  <?php if (!empty($session->getFlashdata('error'))) : ?>
  <!--error message-->
  <div x-data="{ nofifiction: true }" class="fixed bottom-2 right-2">
    <div x-show="nofifiction" x-transition class="flex items-center justify-between max-w-xs p-4 bg-white border rounded-md shadow-sm">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-600" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
    ` </svg>
        <p class="ml-3 text-sm font-bold text-red"><?php echo $session->getFlashdata('error'); ?></p>
    </div>
    <span @click="nofifiction=false;" class="inline-flex items-center cursor-pointer ml-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </span>
    </div>
  </div>
<?php endif; ?> 
<?= $this->endSection(); ?>