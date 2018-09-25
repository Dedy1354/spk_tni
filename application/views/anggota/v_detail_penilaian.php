<!-- 2 columns form -->
<form class="form-horizontal" action="#">
	<div class="panel panel-flat border-top-xlg border-top-success">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6">
				<fieldset>
					<legend class="text-semibold"><i class="icon-person position-left"></i> Data Diri</legend>

					<div class="form-group">
						<label class="col-lg-5 control-label">ID Personel  </label>
						<div class="col-lg-7">
							<input  type="text" readonly class="form-control" value="<?php echo $data->personel_id;?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label">Nama  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $data->nama;?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label">Pangkat  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $data->pangkat;?>">
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend class="text-semibold"><i class="icon-reading position-left"></i> Kriteria</legend>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Moral  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[1];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Perilaku Disiplin  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[2];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Sikap Militer  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[3];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Loyalitas  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[4];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Prakarsa  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[5];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Kemauan Bekerja  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[6];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Kerja Sama  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[7];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Ketabahan  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[8];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Prestasi Kerja  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[9];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Kemauan Melakukan Tugas  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[10];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Kemauan Untuk Maju  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[11];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Kewibawaan  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[12];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Daya Tangkap  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[13];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Kemauan Sosialisasi  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[14];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Tanggung Jawab  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria[15];?>">
						</div>
					</div>
				</fieldset>

				<fieldset>
					
					<legend class="text-semibold"><i class="icon-reading position-left"></i> Postur & Jasmani</legend>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Lari  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[1];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Pull Up  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[2];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Sit Up  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[3];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Push Up  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[4];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Shuttle Run  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[5];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Renang  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[6];?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-5 control-label"> Tinggi  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[7];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-5 control-label"> Berat  </label>
						<div class="col-lg-7">
							<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[8];?>">
						</div>
					</div>
				</fieldset>
			</div>

			<div class="col-md-6">
				<fieldset>
                	<legend class="text-semibold"><i class="icon-reading position-left"></i> KESEHATAN</legend>
                		<div class="form-group">
							<label class="col-lg-5 control-label">Kepala, Muka, Leher, Kulit Kepala :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[9];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Hidung :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[10];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Sinus - Sins :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[11];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Mulut, Tenggorkan Tonsil :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[12];?>">
							</div>
						</div>


						<div class="form-group">
							<label class="col-lg-5 control-label">Telinga :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[13];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Membrana Tympani :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[14];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Mata :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[15];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Optalmoscopi :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[16];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Pupil(Bentuk,Reaksi) :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[17];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Gerakan Mata Bidang Lihat :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[18];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Dada dan Paru :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[19];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Jantung :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[20];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Abdomen & Visceria (Hernia) :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[21];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Anus & Rectrum :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[22];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Sistem Endokrin :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[23];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Sistem Genito Urinaria :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[24];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Extremitas Atas (Keadaan Otot) :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[25];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Extremitas Bawah (Idem) :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[26];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Kaki :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[27];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Kulit (Kelenjar Limphe) :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[28];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Verteblaris dan Pelvis :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[29];?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-5 control-label">Neurologi (Keseimbangan) :</label>
							<div class="col-lg-7">
								<input type="text" readonly class="form-control" value="<?php echo $kriteria_sub[30];?>">
							</div>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
</form>
<!-- /2 columns form -->