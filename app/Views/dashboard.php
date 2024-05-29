<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<div class="px-4 py-20 h-screen sm:ml-64">
    <main class="grid gap-5">
        <main class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="p-6 bg-green-900 border border-gray-200 rounded-lg shadow">
                <h5 class="mb-4 text-5xl font-bold tracking-tight text-green-50"> <?= count($nasabah) ?> </h5>
                <p class="mb-3 font-normal text-green-50"> Jumlah Nasabah </p>
                <a href="/nasabah" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                    Lebih lengkap
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            <div class="p-6 bg-green-900 border border-gray-200 rounded-lg shadow">
                <h5 class="mb-4 text-5xl font-bold tracking-tight text-green-50"> <?= count($sampah) ?> </h5>
                <p class="mb-3 font-normal text-green-50"> Jumlah Jenis Sampah </p>
                <a href="/sampah" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                    Lebih lengkap
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
        </main>

        <main class="grid gap-5 grid-cols-1 md:grid-cols-8">
            <div class="p-6 bg-green-800 border border-gray-200 rounded-lg shadow md:col-span-2">
                <h5 class="mb-2 text-5xl font-bold tracking-tight text-green-50"> <?= count($transaksi) ?> </h5>
                <p class="mb-3 font-normal text-green-50"> Jumlah Transaksi </p>
            </div>
            <div class="p-6 bg-green-800 border border-gray-200 rounded-lg shadow md:col-span-4">
                <h5 class="mb-2 text-5xl font-bold tracking-tight text-green-50">Rp<?= number_format($totalpenjualan, 2); ?></h5>
                <p class="mb-3 font-normal text-green-50"> Total Penjualan Sampah </p>
            </div>
            <div class="p-6 bg-green-800 border border-gray-200 rounded-lg shadow md:col-span-2">
                <h5 class="mb-2 text-5xl font-bold tracking-tight text-green-50"> <?= $totalberat ?> kg</h5>
                <p class="mb-3 font-normal text-green-50"> Total Sampah </p>
            </div>
        </main>

    </main>
</div>

<?= $this->endSection(); ?>