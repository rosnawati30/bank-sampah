<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="px-4 py-10 sm:ml-64">
  <div class="container h-full px-6 py-6">
        <nav class="lg:flex lg:items-center lg:justify-between">
            <div class="max-w-screen-xl flex flex-wrap mx-2 p-4 ">
                 <h2 class="text-2xl font-bold leading-7 text-green-800 sm:truncate sm:text-3xl sm:tracking-tight">Ubah Data Sampah</h2>
            </div>    
        </nav>

        <div class="min-w-0 flex-1 px-4 py-4">
            <hr class="border-t-4 border-green-800 opacity-100 "></hr>
        </div>

        <form method="post" action="<?= base_url('/sampah/save'); ?>">
            <?= csrf_field(); ?>
            <input type="hidden" value="<?= isset($sampah['id_sampah']) ? $sampah['id_sampah'] : '' ?>" name="id_sampah">
                <div class="mx-auto space-y-5 p-4">
                    <div>
                        <label class="text-sm font-bold text-black">Kode Sampah</label>
                        <label class="text-sm font-bold text-red-600">*</label>
                            <div class="w-full inline-flex border">
                                 <div class="w-2/12 flex items-center justify-center bg-gray-100">
                                 <i class="fa fa-barcode" aria-hidden="true"></i>
                                 </div>
                             <input
                                type="text"
                                name="kode"
                                id="kode"
                                class="w-10/12 focus:outline-none focus:text-black p-2"
                                value="<?= isset($sampah['kode']) ? $sampah['kode'] : '' ?>" 
                                placeholder="Masukkan kode sampah" 
                                required="required"
                              />
                            </div>
                    </div>
                <div>
                <label class="text-sm font-bold text-black">Nama Sampah</label>
                <label class="text-sm font-bold text-red-600">*</label>
                    <div class="w-full inline-flex border">
                        <div class="w-2/12 flex items-center justify-center bg-gray-100">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                     </div>
                        <input
                            type="text"
                            name="item"
                            id="item"
                            class="w-10/12 focus:outline-none focus:text-black p-2"
                            value="<?= isset($sampah['item']) ? $sampah['item'] : '' ?>" 
                            placeholder="Masukkan nama sampah"
                            required="required"
                        />
                    </div>
                </div>
            <div>
            <label class="text-sm font-bold text-black">Harga Sampah</label>
            <label class="text-sm font-bold text-red-600">*</label>
                    <div class="w-full inline-flex border">
                        <div class="w-2/12 flex items-center justify-center bg-gray-100">
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                     </div>
                        <input
                            type="text"
                            name="harga"
                            id="harga"
                            class="w-10/12 focus:outline-none focus:text-black p-2"
                            value="<?= isset($sampah['harga']) ? $sampah['harga'] : '' ?>" 
                            placeholder="Masukkan harga sampah per kg" 
                            required="required"
                        />
                    </div>
                </div>

        </div>

        <div class="pb-12 pt-4 items-center justify-between sm:text-center">
        <a href="/sampah" class="text-white text-l bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-violet-300 font-bold rounded-lg px-4 py-[0.60rem] text-center mr-3 md:mr-0"
          >Kembali</a>
        <button class="text-white text-l bg-green-800 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-violet-300 font-bold rounded-lg px-4 py-2 text-center mr-3 md:mr-0"
            type="submit"
            id="save">Ubah</button>
        </form>
        </div>

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