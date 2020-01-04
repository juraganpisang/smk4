<?php
	class balok{
					public $panjang;
					public $lebar;
					public $tinggi;
					public $volume;
					public $luas;

					function hitung(){
						$volume=$this->panjang*$this->lebar*$this->tinggi;
						echo "Volume Balok = ".$volume;

					}
					function luas(){
						$luas=2*($this->panjang*$this->lebar + $this->panjang*$this->tinggi + $this->lebar*$this->tinggi);
						echo "Luas Permukaan Balok = ".$luas;

					}

				
			}
?>
<?php
	class kubus{
					public $sisi;
					public $volume;
					public $luas;

					function hitung(){
						$volume=$this->sisi*$this->sisi*$this->sisi;
						echo "Volume Kubus = ".$volume;

					}
					function luas(){
						$luas=6*($this->sisi*$this->sisi);
						echo "Luas Permukaan Kubus = ".$luas;

					}

				
			}
?>
<?php
	class kerucut{
					public $jari;
					public $tinggi;
					public $volume;
					public $luas;	

					function hitung(){
						$volume=3.14*$this->jari*$this->jari*$this->tinggi/3;
						echo "Volume Kerucut = ".$volume;

					}
					function luas(){
						$luas=(3.14*$this->jari*$this->jari)+(3.14*$this->jari*sqrt(pow($this->jari,2)+pow($this->tinggi,2)));
						echo "Luas Permukaan Tabung = ".$luas;

					}

				
			}
?>
<?php
	class limas{
					public $sisi;
					public $tinggi;
					public $volume;
					public $luas;

					function hitung(){
						$volume=$this->sisi*$this->sisi*$this->tinggi/3;
						echo "Volume Limas = ".$volume;

					}
					function luas(){
						$luas=2*($this->sisi*$this->tinggi);
						echo "Luas Permukaan Limas = ".$luas;

					}

				
			}
?>
<?php
	class tabung{
					public $jari;
					public $tinggi;
					public $volume;
					public $luas;

					function hitung(){
						$volume=2*3.14*$this->jari*$this->jari*$this->tinggi;
						echo "Volume Tabung = ".$volume;

					}
					function luas(){
						$luas=(2*3.14*$this->jari*$this->jari)+(3.14*(2*$this->jari)*$this->tinggi);
						echo "Luas Permukaan Tabung = ".$luas;

					}

				
			}
?>