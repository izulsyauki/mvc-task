<html>

<head>
	<title>Native MVC Example</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
	<!-- Container untuk data mahasiswa -->
	<div class="flex items-center justify-center min-h-screen">
		<div class="w-full max-w-4xl bg-white rounded-lg shadow-md p-8">

			<!-- judul -->
			<h3 class="text-2xl font-semibold text-center text-gray-700 mb-6">Data Mahasiswa</h3>

			<!-- table -->
			<div class="overflow-x-auto rounded-lg">
				<table class="w-full border border-gray-300">
					<thead>
						<tr class="bg-blue-500 text-white">
							<td class='px-4 py-2 text-left'>No</td>
							<td class='px-4 py-2 text-left'>NIM</td>
							<td class='px-4 py-2 text-left'>Nama</td>
							<td class='px-4 py-2 text-left'>Aksi</td>
						</tr>
					</thead>

					<tbody>
						<?php

						foreach ($rs as $mahasiswa => $list) {
							echo '
							<tr class="hover:bg-gray-100 border-b">
								<td class="px-4 py-2 text-blue-500"><a href="?act=tampil-data&i=' . $list['id'] . '" class="hover:underline">' . $list['id'] . '</a></td>
								<td class="px-4 py-2">' . $list['nim'] . '</td>
								<td class="px-4 py-2">' . $list['nama'] . '</td>
								<td class="px-4 py-2">
									<a href="?act=edit&id=' . $list['id'] . '"class="text-blue-500 hover:underline mr-2">Edit</a>
									<a href="?act=delete&id=' . $list['id'] . '"onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\');" class="text-red-500 hover:underline">Delete</a>
								</td>
							</tr>';
						}

						?>
				</table>
			</div>
		</div>
	</div>
</body>

</html>