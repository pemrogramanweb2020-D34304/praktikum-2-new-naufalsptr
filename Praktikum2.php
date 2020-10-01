<?php
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
    echo "<h1> Hasil </h1>";
	$user= [
		'Arsene Lupin'=>[
			'nama'=>'Arsene Lupin',
			'nik'=>'1234',
			'jenis_kelamin'=>'male',
			'tgl_lahir'=>'1902-03-23'
		],
		'Sherlock Holmes'=>[
			'nama'=>'Sherlock Holmes',
			'nik'=>'4321',
			'jenis_kelamin'=>'male',
			'tgl_lahir'=>'1876-08-16'
		],
		'Irene Adler'=>[
			'nama'=>'Irene Adler',
			'nik'=>'6789',
			'jenis_kelamin'=>'female',
			'tgl_lahir'=>'1884-10-07'
		],
    ];
    
$a=0;
$b=0;

foreach($user as $x){
    if(strtoupper($x['nama']) == strtoupper($nama)){
        $a=1;
        $b=$x;
    }
}

if($b){
    echo "<h2>".$nama."</h2>";
    echo "<h2> NIK: ".$b['nik']."</h2>";
    echo "<h2> Kelamin: ".$b['jenis_kelamin']."</h2>";
    echo "<h2> Tanggal Lahir: ".$b['tgl_lahir']."</h2>";

}
else{
    echo "<h2>[".$nama."] Tidak Ditemukan </h2>";
}



}
?>