<html>

<head>
	<title>Data Mahasiswa</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
	<!-- Wrapper Utama -->
	<div class="flex items-center justify-center min-h-screen">
		<!-- Container Card -->
		<div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
			<!-- Judul -->
			<h3 class="text-3xl font-semibold text-center text-blue-600 mb-6">
				Data Mahasiswa
			</h3>

			<!-- Isi Data Mahasiswa -->
			<div class="space-y-4 text-gray-700">
				<div class="flex items-center">
					<span class="font-bold w-24">ID:</span>
					<span class="flex-1 border-b border-gray-200 pb-1"><?php echo $rs['id']; ?></span>
				</div>
				<div class="flex items-center">
					<span class="font-bold w-24">NIM:</span>
					<span class="flex-1 border-b border-gray-200 pb-1"><?php echo $rs['nim']; ?></span>
				</div>
				<div class="flex items-center">
					<span class="font-bold w-24">Nama:</span>
					<span class="flex-1 border-b border-gray-200 pb-1"><?php echo $rs['nama']; ?></span>
				</div>
			</div>

			<!-- Tombol Kembali -->
			<div class="mt-6 text-center">
				<a href="javascript:history.back()"
					class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition duration-300">
					Kembali
				</a>
			</div>
		</div>
	</div>
</body>

</html>