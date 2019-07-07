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

	function tambah($data)
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

?>