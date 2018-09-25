<?php 
	class Hitung{
		public function nilai_kriteria($nilai){

			// 1 = Sangat Baik
			// 2 = Baik
			// 3 = Cukup
			// 4 = Kurang Baik
			if($nilai==1){
				return 80;
			}else if($nilai==2){
				return 60;
			}else if($nilai==3){
				return 40;
			}else if($nilai==4){
				return 20;
			}
		}

		public function nilai_kriteria_kv($nilai){
			if($nilai==1){
				return "Sangat Baik";
			}else if($nilai==2){
				return "Baik";
			}else if($nilai==3){
				return "Cukup Baik";
			}else if($nilai==4){
				return "Kurang Baik";
			}
		}

		public function nilai_kesehaan_luar_kv($nilai){
			if($nilai==1){
				return "Normal";
			}else if($nilai==2){
				return "Abnormal";
			}
		}

		public function nilai_kesehatan_luar($nilai){
			// 1 = Normal ; 2 = Abnormal 
			if($nilai==1){
				return 75;
			}else if($nilai==2){
				return 25;
			}
		}

		public function nilai_lari($nilai)
		{
			// 12 Menit / Meter
			if($nilai < 1800){
				return 20;
			}else if($nilai< 2000){
				return 40;
			}else if($nilai < 2200){
				return 60;
			}else if($nilai <  2400){
				return 80;
			}else if($nilai >= 2400){
				return 100;
			}
		}

		public function nilai_pull_up($nilai)
		{
			// 1 Menit / kali
			if($nilai <=8){
				return 20;
			}else if($nilai<=10){
				return 40;
			}else if($nilai<=12){
				return 60;
			}else if($nilai<=16){
				return 80;
			}else if($nilai>16){
				return 100;
			}
		}

		public function nilai_push_up($nilai)
		{
			// 1 Menit / Kali
			if($nilai <=25){
				return 20;
			}else if($nilai<=30){
				return 40;

			}else if($nilai<=35){
				return 60;
			}else if($nilai<=40){
				return 80;
			}else if($nilai>40){
				return 100;
			}
		}

		public function nilai_sit_up($nilai)
		{
			// 1 Menit / Kali
			if($nilai <=25){
				return 20;
			}else if($nilai<=30){
				return 40;

			}else if($nilai<=35){
				return 60;
			}else if($nilai<=40){
				return 80;
			}else if($nilai>40){
				return 100;
			}
		}

		public function nilai_shuttle_run($nilai)
		{
			// 16 Detik / Kali
			if($nilai <=4){
				return 20;
			}else if($nilai<=6){
				return 40;
			}else if($nilai<=8){
				return 60;
			}else if($nilai<=10){
				return 80;
			}else if($nilai>10){
				return 100;
			}
		}


		public function nilai_renang($nilai)
		{
			// 50 Meter / Detik
			if($nilai <=12){
				return 100;
			}else if($nilai <=14){
				return 80;
			}else if($nilai<=16){
				return 60;
			}else if($nilai<=18){
				return 40;
			}else if($nilai>20){
				return 20;
			}
		}
		public function nilai_tinggi($nilai)
		{
			if($nilai <=165){
				return 25;
			}else if($nilai> 165){
				return 75;
			}
		}
		public function nilai_berat($nilai)
		{
			if($nilai <=55 ){
				return 75;
			}else if($nilai > 55){
				return 25;
			}
		}

		
	}	
?>