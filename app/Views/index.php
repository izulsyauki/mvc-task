<html>

<head>
	<title>Native MVC Example</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class='bg-gray-100'>
	<!-- wrapper utama -->
	<div class="flex items-center justify-center min-h-screen">

		<!-- container untuk form input -->
		<div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
			<h3 class="text-2xl font-semibold text-center text-gray-700 mb-6">Isikan data Anda di sini</h3>

			<!-- form input -->
			<form method="post" action="/mvc-example/?act=simpan" class="space-y-4">

				<!-- Input NIM -->
				<div>
					<label for="exampleInputNim" class="block text-sm font-medium text-gray-700 mb-1">NIM</label>
					<input type="text" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none" id="exampleInputNim" name="nim" placeholder="NIM">
				</div>

				<!-- Input Nama -->
				<div>
					<label for="exampleInputNama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
					<input type="text" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none" id="exampleInputNama" name="nama" placeholder="Nama">
				</div>

				<button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300">Submit</button>
			</form>

			<!-- link untuk melihat hasil input -->
			<div class="text-center mt-6">
				<a href="/mvc-example/?act=tampil-data" class="text-blue-500 hover:underline">Lihat Hasil Input</a>
			</div>

		</div>
	</div>
</body>

</html>