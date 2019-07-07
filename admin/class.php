<?php  
	$conn = mysqli_connect("localhost","root","","mobilhonda");

	function query($query)
	{
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambahbrio($data)
	{
		global $conn;
		// ambil data tiap elemen
		$tipe 			= $data["tipe"];
		$harga 			= $data["harga"];
		$spesifikasi	= $data["spesifikasi"];
		$gambar			= $data["gambar"];

		// Query insert data
		$query = "INSERT INTO brio VALUES ('','$tipe','$harga','$spesifikasi','$gambar')";
  		mysqli_query($conn, $query); //ini fungsi intinya insert data
  		return mysqli_affected_rows($conn);
	}

	function tambahmobilio($data)
	{
		global $conn;

		// 3. Ambil data dari setiap elemen post
	    $tipe         = htmlspecialchars( $data['tipe']);
	    $harga        = htmlspecialchars($data['harga']);
	    $spesifikasi  = htmlspecialchars($data['spesifikasi']);
	    $foto         = htmlspecialchars($data['foto']);

		//4. Query Insert Data
	    $query = "INSERT INTO mobilio VALUES ('','$tipe','$harga','$spesifikasi','$foto')";
	    mysqli_query($conn, $query);
	    // 5. Beri info kalau data sukses atau error
	    return mysqli_affected_rows($conn);

	}

	function tambahbrv($data)
	{
		global $conn;
		// 1. Cek inputan tiap elemen
		$tipe 			= $_POST['tipe'];
		$harga			= $_POST['harga'];
		$spesifikasi	= $_POST['spesifikasi'];
		$gambar			= $_POST['gambar'];
		// 2. Query Insert Data
		$query = "INSERT FROM brv VALUES ('','$tipe','$harga','$spesifikasi','$gambar')";
		mysqli_query($conn, $query);
	}

?>