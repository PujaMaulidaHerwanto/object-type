<?php


class makanan {

    public $nama;
    public $jenis;
    public $rasa;
    public $harga;

    public function getLabel(){
        return " $this->jenis, $this->rasa ";
    }
    public function __construct($nama = "Tiramisu" , $jenis = "Kue" , $rasa = "Kopi" , $harga = 25000){
        $this->nama = $nama; 
        $this->jenis = $jenis;
        $this->rasa = $rasa;
        $this->harga = $harga;
    }

}

class info {
    public function infoproduk( makanan $makanan ){
        $str = "{$makanan->nama} | {$makanan->getLabel()}, Rp. {$makanan->harga}";
        return $str;
    }

}

$roti = new makanan("Black Choco Almond","Donat","Coklat",5000);
$roti2 = new makanan("Roti Bakar","Roti","Stroberi",3000);
$roti3 = new makanan("Black Forest", "Kue", "Coklat");

echo "Kue : " .$roti->getLabel();
echo "<br>";
echo "Roti : " .$roti2->getLabel();
echo "<br>";
echo "Kue : " .$roti3->getLabel();
echo "<br>";

$info = new info();
echo $info->infoproduk ($roti2);

?>
