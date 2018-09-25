<!-- Wizard with validation -->
<div class="panel panel-white">
	<legend class="text-bold text-center">
		<h4>Penilaian Anggota TNI Berprestasi</h4>		
	</legend>
	
	<form class="form-validation form-horizontal" action="<?php echo $action;?>" method="POST">
		<fieldset class="step" id="validation-step1">
			<h6 class="form-wizard-title text-semibold">
				<span class="form-wizard-count">1</span>
				Kriteria Umum
				<small class="display-block">Tell us a bit about yourself</small>
			</h6>

			<div class="panel-body">

				<div class="form-group">
						<label class="col-lg-3 control-label"><strong>Nama : </strong></label>
						<div class="col-lg-9">
							<input type="text" name="kriteria" class="form-control" readonly value="<?php echo $personel->nama; ?>">
						</div>
					</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Moral :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="moral" type="radio" value="1" <?php echo ($kriteria[1]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="moral" type="radio" value="2" <?php echo ($kriteria[1]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="moral" type="radio" value="3" <?php echo ($kriteria[1]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="moral" type="radio" value="4" <?php echo ($kriteria[1]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Perilaku Disiplin :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="perilaku_disiplin" type="radio" value="1" <?php echo ($kriteria[2]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="perilaku_disiplin" type="radio" value="2" <?php echo ($kriteria[2]==2)?'checked':'' ?> >
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="perilaku_disiplin" type="radio" value="3" <?php echo ($kriteria[2]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="perilaku_disiplin" type="radio" value="4" <?php echo ($kriteria[2]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Sikap Militer :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="sikap_militer" type="radio" value="1" <?php echo ($kriteria[3]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="sikap_militer" type="radio" value="2" <?php echo ($kriteria[3]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="sikap_militer" type="radio" value="3" <?php echo ($kriteria[3]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="sikap_militer" type="radio" value="4" <?php echo ($kriteria[3]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Loyalitas :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="loyalitas" type="radio" value="1" <?php echo ($kriteria[4]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="loyalitas" type="radio" value="2" <?php echo ($kriteria[4]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="loyalitas" type="radio" value="3" <?php echo ($kriteria[4]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="loyalitas" type="radio" value="4" <?php echo ($kriteria[4]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Prakarsa :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="prakarsa" type="radio" value="1" <?php echo ($kriteria[5]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="prakarsa" type="radio" value="2" <?php echo ($kriteria[5]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="prakarsa" type="radio" value="3" <?php echo ($kriteria[5]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="prakarsa" type="radio" value="4" <?php echo ($kriteria[5]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Kemauan Bekerja :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="kemauan_bekerja" type="radio" value="1" <?php echo ($kriteria[6]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_bekerja" type="radio" value="2" <?php echo ($kriteria[6]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_bekerja" type="radio" value="3" <?php echo ($kriteria[6]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_bekerja" type="radio" value="4" <?php echo ($kriteria[6]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Kerja Sama :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="kerja_sama" type="radio" value="1" <?php echo ($kriteria[7]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kerja_sama" type="radio" value="2" <?php echo ($kriteria[7]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kerja_sama" type="radio" value="3" <?php echo ($kriteria[7]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kerja_sama" type="radio" value="4" <?php echo ($kriteria[7]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Ketabahan :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="ketabahan" type="radio" value="1" <?php echo ($kriteria[8]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="ketabahan" type="radio" value="2" <?php echo ($kriteria[8]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="ketabahan" type="radio" value="3" <?php echo ($kriteria[8]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="ketabahan" type="radio" value="4" <?php echo ($kriteria[8]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Prestasi Kerja :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="prestasi_kerja" type="radio" value="1" <?php echo ($kriteria[9]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="prestasi_kerja" type="radio" value="2" <?php echo ($kriteria[9]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="prestasi_kerja" type="radio" value="3" <?php echo ($kriteria[9]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="prestasi_kerja" type="radio" value="4" <?php echo ($kriteria[9]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Kemauan Melakukan Tugas :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="kemauan_melakukan_tugas" type="radio" value="1" <?php echo ($kriteria[10]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_melakukan_tugas" type="radio" value="2" <?php echo ($kriteria[10]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_melakukan_tugas" type="radio" value="3" <?php echo ($kriteria[10]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_melakukan_tugas" type="radio" value="4" <?php echo ($kriteria[10]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Kemauan Untuk Maju :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="kemauan_untuk_maju" type="radio" value="1" <?php echo ($kriteria[11]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_untuk_maju" type="radio" value="2" <?php echo ($kriteria[11]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_untuk_maju" type="radio" value="3" <?php echo ($kriteria[11]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_untuk_maju" type="radio" value="4" <?php echo ($kriteria[11]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Kewibawaan :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="kewibawaan" type="radio" value="1" <?php echo ($kriteria[12]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kewibawaan" type="radio" value="2" <?php echo ($kriteria[12]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kewibawaan" type="radio" value="3" <?php echo ($kriteria[12]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kewibawaan" type="radio" value="4" <?php echo ($kriteria[12]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Daya Tangkap :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="daya_tangkap" type="radio" value="1" <?php echo ($kriteria[13]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="daya_tangkap" type="radio" value="2" <?php echo ($kriteria[13]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="daya_tangkap" type="radio" value="3" <?php echo ($kriteria[13]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="daya_tangkap" type="radio" value="4" <?php echo ($kriteria[13]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Kemauan Sosialisasi :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="kemauan_sosialisasi" type="radio" value="1" <?php echo ($kriteria[14]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_sosialisasi" type="radio" value="2" <?php echo ($kriteria[14]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_sosialisasi" type="radio" value="3" <?php echo ($kriteria[14]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="kemauan_sosialisasi" type="radio" value="4" <?php echo ($kriteria[14]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-3 control-label"><strong>Tanggung Jawab :</strong></label>
					<div class="col-lg-9">
						<label class="radio-inline">
							<input class="styled required" name="tanggung_jawab" type="radio" value="1" <?php echo ($kriteria[15]==1)?'checked':'' ?>>
							Sangat Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="tanggung_jawab" type="radio" value="2" <?php echo ($kriteria[15]==2)?'checked':'' ?>>
							Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="tanggung_jawab" type="radio" value="3" <?php echo ($kriteria[15]==3)?'checked':'' ?>>
							Cukup Baik
						</label>

						<label class="radio-inline">
							<input class="styled" name="tanggung_jawab" type="radio" value="4" <?php echo ($kriteria[15]==4)?'checked':'' ?>>
							Kurang Baik
						</label>
					</div>
				</div>
			</div>
		</fieldset>

		<fieldset class="step" id="validation-step2">
			<h6 class="form-wizard-title text-semibold">
				<span class="form-wizard-count">2</span>
				Kriteria Postur dan Jasmani
				<small class="display-block">Let us know about your degree</small>
			</h6>
			<div class="panel-body">
				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong> Lari :</strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="lari" placeholder="Nilai Antara 500 - 5000 Meter" type="number" 
							min="500" max="5000"
							onchange="if(this.value>5000){this.value='5000';}else if(this.value<500){this.value='500';}"
							value="<?php echo $kriteria_sub[1];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>12 Menit / Meter</strong></label>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong>Pull Up :</strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="pull_up" placeholder="Nilai Antara 0 - 30" type="number" 
							min="0" max="30" 
   							onchange="if(this.value>30){this.value='30';}else if(this.value<0){this.value='0';}"
							value="<?php echo $kriteria_sub[2];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>1 Menit / Kali</strong></label>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong>Sit Up : </strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="sit_up" placeholder="Nilai Antara 0 - 80 Kali" type="number" 
							min="0" max="80" 
   							onchange="if(this.value>80){this.value='30';}else if(this.value<0){this.value='0';}"
							value="<?php echo $kriteria_sub[3];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>1 Menit / Kali</strong></label>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong>Push Up :</strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="push_up" placeholder="Nilai Antara 0 - 80 Kali" type="number" 
							min="0" max="80" 
   							onchange="if(this.value>80){this.value='80';}else if(this.value<0){this.value='0';}"
							value="<?php echo $kriteria_sub[4];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>1 Menit / Kali</strong></label>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong>Shuttle Run :</strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="shuttle_run" placeholder="Nilai Antara 0 - 20 Kali" type="number" 
							min="0" max="20" 
   							onchange="if(this.value>20){this.value='20';}else if(this.value<0){this.value='0';}"
							value="<?php echo $kriteria_sub[5];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>16 Detik / Kali</strong></label>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong>Renang :</strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="renang" placeholder="Nilai Antara 5 - 300 Detik" type="number"
							min="5" max="300" 
   							onchange="if(this.value>300){this.value='300';}else if(this.value<5){this.value='5';}"
							value="<?php echo $kriteria_sub[6];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>50 Meter / Detik</strong></label>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong>Tinggi :</strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="tinggi" placeholder="Nilai Antara 150 - 220 CM" type="number" 
							min="150" max="220" 
   							onchange="if(this.value>220){this.value='220';}else if(this.value<150){this.value='150';}"
							value="<?php echo $kriteria_sub[7];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>CM</strong></label>
					</div>
				</div>

				<div class="form-group">
					<div class="form-group">
						<label class="col-lg-4 control-label"><strong>Berat :</strong></label>
						<div class="col-lg-6">
							<input class="form-control required" name="berat" placeholder="Nilai Antara 35 - 90 KG" type="number" 
							min="35" max="90" 
   							onchange="if(this.value>90){this.value='90';}else if(this.value<35){this.value='35';}"
							value="<?php echo $kriteria_sub[8];?>">
						</div>
						<label class="col-lg-2 control-label"><strong>KG</strong></label>
					</div>
				</div>

			</div>
		</fieldset>

		<fieldset class="step" id="validation-step3">
			<h6 class="form-wizard-title text-semibold">
				<span class="form-wizard-count">3</span>
				Kesehatan
				<small class="display-block">We are almost done now</small>
			</h6>


			<div class="panel-body">
				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Kepala, Muka, Leher, Kulit Kepala :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="kepala" type="radio" value="1" <?php echo ($kriteria_sub[9]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="kepala" type="radio" value="2" <?php echo ($kriteria_sub[9]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Hidung :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="hidung" type="radio" value="1" <?php echo ($kriteria_sub[10]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="hidung" type="radio" value="2" <?php echo ($kriteria_sub[10]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Sinus - Sins :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="sinus" type="radio" value="1" <?php echo ($kriteria_sub[11]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="sinus" type="radio" value="2" <?php echo ($kriteria_sub[11]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Mulut, Tenggorkan Tonsil :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="mulut" type="radio" value="1" <?php echo ($kriteria_sub[12]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="mulut" type="radio" value="2" <?php echo ($kriteria_sub[12]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>


				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Telinga :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="telinga" type="radio" value="1" <?php echo ($kriteria_sub[13]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="telinga" type="radio" value="2" <?php echo ($kriteria_sub[13]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Membrana Tympani :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="membrana" type="radio" value="1" <?php echo ($kriteria_sub[14]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="membrana" type="radio" value="2" <?php echo ($kriteria_sub[14]==2)?'checked':'' ?>> 
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Mata :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="mata" type="radio" value="1" <?php echo ($kriteria_sub[15]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="mata" type="radio" value="2" <?php echo ($kriteria_sub[15]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Optalmoscopi :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="optalmoscopi" type="radio" value="1" <?php echo ($kriteria_sub[16]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="optalmoscopi" type="radio" value="2" <?php echo ($kriteria_sub[16]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Pupil(Bentuk,Reaksi) :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="pupil" type="radio" value="1" <?php echo ($kriteria_sub[17]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="pupil" type="radio" value="2" <?php echo ($kriteria_sub[17]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Gerakan Mata Bidang Lihat :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="gerakan_mata" type="radio" value="1" <?php echo ($kriteria_sub[18]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="gerakan_mata" type="radio" value="2" <?php echo ($kriteria_sub[18]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Dada dan Paru :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="dada_paru" type="radio" value="1" <?php echo ($kriteria_sub[19]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="dada_paru" type="radio" value="2" <?php echo ($kriteria_sub[19]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Jantung :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="jantung" type="radio" value="1" <?php echo ($kriteria_sub[20]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="jantung" type="radio" value="2" <?php echo ($kriteria_sub[20]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Abdomen & Visceria (Hernia) :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="abdomen" type="radio" value="1" <?php echo ($kriteria_sub[21]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="abdomen" type="radio" value="2" <?php echo ($kriteria_sub[21]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Anus & Rectrum :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="anus" type="radio" value="1" <?php echo ($kriteria_sub[22]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="anus" type="radio" value="2" <?php echo ($kriteria_sub[22]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Sistem Endokrin :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="endokrin" type="radio" value="1" <?php echo ($kriteria_sub[23]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="endokrin" type="radio" value="2" <?php echo ($kriteria_sub[23]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Sistem Genito Urinaria :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="genito_urinaria" type="radio" value="1" <?php echo ($kriteria_sub[24]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="genito_urinaria" type="radio" value="2" <?php echo ($kriteria_sub[24]==2)?'checked':'' ?>> 
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Extremitas Atas (Keadaan Otot) :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="extremitas_atas" type="radio" value="1" <?php echo ($kriteria_sub[25]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="extremitas_atas" type="radio" value="2"<?php echo ($kriteria_sub[25]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Extremitas Bawah (Idem) :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="extremitas_bawah" type="radio" value="1" <?php echo ($kriteria_sub[26]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="extremitas_bawah" type="radio" value="2" <?php echo ($kriteria_sub[26]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Kaki :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="kaki" type="radio" value="1" <?php echo ($kriteria_sub[27]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="kaki" type="radio" value="2" <?php echo ($kriteria_sub[27]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Kulit (Kelenjar Limphe) :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="kulit" type="radio" value="1" <?php echo ($kriteria_sub[28]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="kulit" type="radio" value="2" <?php echo ($kriteria_sub[28]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Verteblaris dan Pelvis :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="verteblaris_pelvis" type="radio" value="1" <?php echo ($kriteria_sub[29]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="verteblaris_pelvis" type="radio" value="2" <?php echo ($kriteria_sub[29]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Neurologi (Keseimbangan) :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="neurologi" type="radio" value="1" <?php echo ($kriteria_sub[30]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="neurologi" type="radio" value="2" <?php echo ($kriteria_sub[30]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Gigi :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="gigi" type="radio" value="1" <?php echo ($kriteria_sub[31]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="gigi" type="radio" value="2" <?php echo ($kriteria_sub[31]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Tensi :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="tensi" type="radio" value="1" <?php echo ($kriteria_sub[32]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="tensi" type="radio" value="2" <?php echo ($kriteria_sub[32]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Nadi :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="nadi" type="radio" value="1" <?php echo ($kriteria_sub[33]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="nadi" type="radio" value="2" <?php echo ($kriteria_sub[33]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Lingkar Dada :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="lingkar_dada" type="radio" value="1" <?php echo ($kriteria_sub[34]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="lingkar_dada" type="radio" value="2"<?php echo ($kriteria_sub[34]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong> Lingkar Perut :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="lingkar_perut" type="radio" value="1" <?php echo ($kriteria_sub[35]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="lingkar_perut" type="radio" value="2" <?php echo ($kriteria_sub[35]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Warna Kulit :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="warna_kulit" type="radio" value="1" <?php echo ($kriteria_sub[36]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="warna_kulit" type="radio" value="2" <?php echo ($kriteria_sub[36]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Warna Mata :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="warna_mata" type="radio" value="1" <?php echo ($kriteria_sub[37]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="warna_mata" type="radio" value="2" <?php echo ($kriteria_sub[37]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Urine :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="urine" type="radio" value="1" <?php echo ($kriteria_sub[38]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="urine" type="radio" value="2" <?php echo ($kriteria_sub[38]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Faeces :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="faeces" type="radio" value="1" <?php echo ($kriteria_sub[39]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="faeces" type="radio" value="2" <?php echo ($kriteria_sub[39]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Darah :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="darah" type="radio" value="1" <?php echo ($kriteria_sub[40]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="darah" type="radio" value="2" <?php echo ($kriteria_sub[40]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-5 control-label"><strong>Serologis :</strong></label>
					<div class="col-lg-7">
						<label class="radio-inline">
							<input class="styled required" name="serologis" type="radio" value="1" <?php echo ($kriteria_sub[41]==1)?'checked':'' ?>>
							Normal
						</label>

						<label class="radio-inline">
							<input class="styled" name="serologis" type="radio" value="2" <?php echo ($kriteria_sub[41]==2)?'checked':'' ?>>
							Abnormal
						</label>
					</div>
				</div>

			</div>
		</fieldset>

		<div class="form-wizard-actions">
			<button class="btn btn-default" id="validation-back" type="reset">Back</button>
			<button class="btn btn-info" id="validation-next" type="submit">Next</button>
		</div>
	</form>
</div>
<!-- /wizard with validation -->


<script type="text/javascript">
	<?php if ($this->session->flashdata('error')){?>
		toastr.error("<?php echo $this->session->flashdata('error');?>");
	<?php } else if ($this->session->flashdata('success')) {?>
		toastr.success("<?php echo $this->session->flashdata('success');?>");
	<?php }?>
</script>