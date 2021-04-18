<?php
$hasil = 0;

if(isset($_POST['bil1']) && isset($_POST['bil2']) && isset($_POST['operator'])){

	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];
	$operator = $_POST['operator'];

	if ($operator == 'tambah') {
		$hasil = $bil1 + $bil2;
	}elseif ($operator == 'kurang') {
		$hasil = $bil1 - $bil2;
	}elseif ($operator == 'kali') {
		$hasil = $bil1 * $bil2;
	}elseif ($operator == 'bagi') {
		$hasil = $bil1 / $bil2;
	}
}

?>

<h1>Kalkulator Sederhana</h1>
<form method="post">
	<span>Bil 1 : </span>
	<input type="text" name="bil1" required>
	</br>
	</br>
	<span>Bil 2 : </span>
	<input type="text" name="bil2" required>
	</br>
	</br>
	<span>Hasil : </span>
	<input type="text" value="<?php echo($hasil); ?>" readonly>
	</br>
	</br>
	<span>operator</span>
	<select name="operator" required>
		<option value="tambah">+ (tambah)</option>
		<option value="kurang">- (kurang)</option>
		<option value="kali">* (kali)</option>
		<option value="bagi">/ (bagi)</option>
	</select>
	<button type="submit">=</button>
</form>