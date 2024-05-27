<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bank Sampah </title>

    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/7296/7296308.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <div class="h-screen justify-center content-center bg-green-900">
        <div class="flex-col m-10 px-7 py-5 shadow-lg bg-white rounded-lg">
            <div class="flex mb-5 items-center">
                <p class="flex-none text-xl font-bold text-gray-900"> Tambah Transaksi Nasabah </p>
            </div>
            <form action="/transaksi/save" method="post" enctype="multipart/form-data">
                <div class="mb-6 w-full">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900"> Nama Nasabah </label>
                    <input type="text" name="nama" id="nama" value="<?= $nasabah['nama'] ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" disable readonly>
                    <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi'] ?>">
                    <input type="hidden" name="id_nasabah" value="<?= $nasabah['id_nasabah'] ?>">
                </div>
                <div class="mb-6 w-full">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Transaksi</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                    <input datepicker type="text" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10 p-2.5" disable readonly>
                    </div>
                </div>
                <div class="mb-6 w-full">                
                    <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900"> Jenis Sampah </label>
                    <select id="jenis" name="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
                    <?php foreach ($sampah as $s): ?>
                        <option value="<?= $s['id_sampah']; ?>" <?= isset($transaksi['transaksi.id_sampah']) && $s['id_sampah'] == $transaksi['transaksi.id_sampah'] ? "selected" : "" ?>> <?= $s['item']; ?> | Rp<?= number_format($s['harga'], 2); ?> </option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-6 w-full">
                    <label for="berat" class="block mb-2 text-sm font-medium text-gray-900"> Berat </label>
                    <input type="number" name="berat" id="berat" value="<?= $transaksi['berat']; ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="10000" disable readonly>
                </div>
                <div class="mt-12 w-full justify-center flex">
                    <button type="submit" class="text-white bg-green-900 w-1/2 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center"> Simpan </button>
                </div>
            </form>    

        </div>
    </div>

<script>
    window.onload = function() {
        var dateInput = document.getElementById('date');
        var today = new Date().toISOString().substr(0, 10);
        dateInput.value = today;
    };
</script>

</body>
</html>