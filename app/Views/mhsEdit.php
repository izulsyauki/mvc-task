<html>

<head>
    <title>Edit Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
            <h3 class="text-2xl font-semibold text-center text-gray-700 mb-6">Edit Data Mahasiswa</h3>
            <form method="post" action="/mvc-example/?act=update" class="space-y-4">
                <input type="hidden" name="id" value="<?php echo $rs['id']; ?>">

                <!-- Input NIM -->
                <div>
                    <label for="nim" class="block text-sm font-medium text-gray-700 mb-1">NIM</label>
                    <input type="text" name="nim" id="nim" value="<?php echo $rs['nim']; ?>" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <!-- Input Nama -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?php echo $rs['nama']; ?>" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300">Update</button>
            </form>
        </div>
    </div>
</body>

</html>