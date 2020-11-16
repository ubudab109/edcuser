						<?php
							$user_id = $_SESSION['user_id'];
							$qu_user = "SELECT * FROM users_edc WHERE users_id = $user_id";
							$rs_user = mysqli_query($con, $qu_user);
							$rw_user = mysqli_fetch_array($rs_user);

							// echo"<pre>";
							// var_dump($rw_user);
							// echo"</pre>";

							$date = date('d', strtotime($rw_user['tanggal_lahir']));
							$month = date('m', strtotime($rw_user['tanggal_lahir']));
							$year = date('Y', strtotime($rw_user['tanggal_lahir']));
						?>
						<?php
							echo $_SESSION['info'];
							unset($_SESSION['info']);
						?>
						<div class="row">
							<div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile">

												<h3 class="username text-dark mb-2"><?= $rw_user['username'] ?></h3>
												<p class="mb-1 text-muted">Level <?=$level?></p>
												<div class="text-center mb-4">
													<?php
for ($x = 1; $x <= $level; $x++) {
  echo '<i class="fa fa-star text-warning"></i>';
}
?>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<form action="index-menu-profile-page-ubah_password.html" method="post">
										<div class="card-header">
											<div class="card-title">Edit Password</div>
										</div>
										<div class="card-body">

											<div class="form-group">
												<label class="form-label">Password Lama</label>
												<input type="password" id="password_lama" name="password_lama" class="form-control">
												<small id="error_password_lama" class="text-danger"></small>
											</div>
											<div class="form-group">
												<label class="form-label">Password Baru</label>
												<input type="password" id="password_baru1" name="password_baru1" class="form-control">
											</div>
											<div class="form-group">
												<label class="form-label">Confirm Password</label>
												<input type="password" id="password_baru2" name="password_baru2" class="form-control">
											</div>
											<small id="error_password_baru" class="text-danger"></small>
										</div>
										<div class="card-footer text-right">
											<!-- <a href="#" class="btn btn-primary">Updated</a> -->
											<button type="submit" class="btn btn-primary">Update</button>
											<!-- <a href="#" class="btn btn-danger">Cancel</a> -->
											<button type="reset" class="btn btn-danger">Cancel</button>
										</div>
									</form>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">Tutup Akun</div>
									</div>
									<div class="card-footer text-right">
										<h4 class="text-left" style="font-weight:bold;">
											Jika Anda menutup Akun, saldo Anda akan dikonversi dengan harga 1000 rupiah per 1 Koin EDCCASH. Akun Anda akan dihapus dari sistem.
										</h4>
										<button type="submit" data-id="<?= $_SESSION['user_id']; ?>" data-toggle="modal" data-target="#confirmation" class="btn btn-danger tutup">Tutup Akun</button>
										<!-- </form> -->
									</div>
							</div>
							</div>
							<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			                    <!-- <h4 class="modal-title" id="myModalLabel">Tutup Akun</h4> -->
			                </div>
			                <div class="modal-body">
			                    <p>Jika Anda menutup Akun, saldo Anda akan dikonversi dengan harga <b><i class="title"></i></b> 1000 rupiah
per 1 Koin EDCCASH. Akun Anda akan dihapus dari sistem.</p>
			                    <p>Apakah Anda ingin melanjutkan?</p>
			                </div>
											<form method="post" action="index-menu-profile-page-aksi_tutup_akun.html">
												<input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			                    <button type="submit" class="btn btn-danger btn-ok">Tutup</button>
			                </div>
										</form>
			            </div>
			        </div>
			    </div>

							<div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
								<div class="card">
									<!-- <form action="index-menu-profile-page-edit_profile.html" method="post"> -->
									<form action="#" method="post">
										<div class="card-header">
											<h3 class="card-title">Profile</h3>
										</div>
										<div class="card-body">

											<div class="form-group">
												<label for="email">Email</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="email address" value="<?= $rw_user['email_users']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?= $rw_user['username']; ?>" readonly>
											</div>
                                        	<div class="form-group">
												<label for="nama_lengkap">Nama Lengkap(Sesuai KTP)</label>
												<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="nama Lengkap" value="<?= $rw_user['nama_lengkap'] ?>" readonly>
											</div>
                                        	<div class="form-group">
												<label for="no_ktp">Nomor KTP</label>
												<input type="number" class="form-control" id="no_ktp" name="no_ktp" placeholder="no ktp" value="<?= $rw_user['no_ktp'] ?>" readonly>
											</div>
											<div class="form-group">
												<label class="form-label">Tanggal Lahir(Sesuai KTP)</label>
												<div class="row">
													<div class="col-md-4">
														<select class="form-control" name="tanggal" disabled>
															<option value="0" <?= $date == "0" ? "selected" : ""; ?>>Date</option>
															<option value="1" <?= $date == "1" ? "selected" : ""; ?>>01</option>
															<option value="2" <?= $date == "2" ? "selected" : ""; ?>>02</option>
															<option value="3" <?= $date == "3" ? "selected" : ""; ?>>03</option>
															<option value="4" <?= $date == "4" ? "selected" : ""; ?>>04</option>
															<option value="5" <?= $date == "5" ? "selected" : ""; ?>>05</option>
															<option value="6" <?= $date == "6" ? "selected" : ""; ?>>06</option>
															<option value="7" <?= $date == "7" ? "selected" : ""; ?>>07</option>
															<option value="8" <?= $date == "8" ? "selected" : ""; ?>>08</option>
															<option value="9" <?= $date == "9" ? "selected" : ""; ?>>09</option>
															<option value="10" <?= $date == "10" ? "selected" : ""; ?>>10</option>
															<option value="11" <?= $date == "11" ? "selected" : ""; ?>>11</option>
															<option value="12" <?= $date == "12" ? "selected" : ""; ?>>12</option>
															<option value="13" <?= $date == "13" ? "selected" : ""; ?>>13</option>
															<option value="14" <?= $date == "14" ? "selected" : ""; ?>>14</option>
															<option value="15" <?= $date == "15" ? "selected" : ""; ?>>15</option>
															<option value="16" <?= $date == "16" ? "selected" : ""; ?>>16</option>
															<option value="17" <?= $date == "17" ? "selected" : ""; ?>>17</option>
															<option value="18" <?= $date == "18" ? "selected" : ""; ?>>18</option>
															<option value="19" <?= $date == "19" ? "selected" : ""; ?>>19</option>
															<option value="20" <?= $date == "20" ? "selected" : ""; ?>>20</option>
															<option value="21" <?= $date == "21" ? "selected" : ""; ?>>21</option>
															<option value="22" <?= $date == "22" ? "selected" : ""; ?>>22</option>
															<option value="23" <?= $date == "23" ? "selected" : ""; ?>>23</option>
															<option value="24" <?= $date == "24" ? "selected" : ""; ?>>24</option>
															<option value="25" <?= $date == "25" ? "selected" : ""; ?>>25</option>
															<option value="26" <?= $date == "26" ? "selected" : ""; ?>>26</option>
															<option value="27" <?= $date == "27" ? "selected" : ""; ?>>27</option>
															<option value="28" <?= $date == "28" ? "selected" : ""; ?>>28</option>
															<option value="29" <?= $date == "29" ? "selected" : ""; ?>>29</option>
															<option value="30" <?= $date == "30" ? "selected" : ""; ?>>30</option>
															<option value="31" <?= $date == "31" ? "selected" : ""; ?>>31</option>
														</select>
													</div>
													<div class="col-md-4">
														<select class="form-control" name="bulan" disabled>
															<option value="0" <?= $month == "0" ? "selected" : ""; ?>>Mon</option>
															<option value="1" <?= $month == "1" ? "selected" : ""; ?>>Jan</option>
															<option value="2" <?= $month == "2" ? "selected" : ""; ?>>Feb</option>
															<option value="3" <?= $month == "3" ? "selected" : ""; ?>>Mar</option>
															<option value="4" <?= $month == "4" ? "selected" : ""; ?>>Apr</option>
															<option value="5" <?= $month == "5" ? "selected" : ""; ?>>May</option>
															<option value="6" <?= $month == "6" ? "selected" : ""; ?>>June</option>
															<option value="7" <?= $month == "7" ? "selected" : ""; ?>>July</option>
															<option value="8" <?= $month == "8" ? "selected" : ""; ?>>Aug</option>
															<option value="9" <?= $month == "9" ? "selected" : ""; ?>>Sep</option>
															<option value="10" <?= $month == "10" ? "selected" : ""; ?>>Oct</option>
															<option value="11" <?= $month == "11" ? "selected" : ""; ?>>Nov</option>
															<option value="12" <?= $month == "12" ? "selected" : ""; ?>>Dec</option>
														</select>
													</div>
													<div class="col-md-4">
														<select class="form-control" name="tahun" disabled>
															<option value="0" <?= $year == "0" ? "selected" : ""; ?>>Year</option>
															<option value="2018" <?= $year == "2018" ? "selected" : ""; ?>>2018</option>
															<option value="2017" <?= $year == "2017" ? "selected" : ""; ?>>2017</option>
															<option value="2016" <?= $year == "2016" ? "selected" : ""; ?>>2016</option>
															<option value="2015" <?= $year == "2015" ? "selected" : ""; ?>>2015</option>
															<option value="2014" <?= $year == "2014" ? "selected" : ""; ?>>2014</option>
															<option value="2013" <?= $year == "2013" ? "selected" : ""; ?>>2013</option>
															<option value="2102" <?= $year == "2102" ? "selected" : ""; ?>>2102</option>
															<option value="2012" <?= $year == "2012" ? "selected" : ""; ?>>2012</option>
															<option value="2011" <?= $year == "2011" ? "selected" : ""; ?>>2011</option>
															<option value="2010" <?= $year == "2010" ? "selected" : ""; ?>>2010</option>
															<option value="2009" <?= $year == "2009" ? "selected" : ""; ?>>2009</option>
															<option value="2008" <?= $year == "2008" ? "selected" : ""; ?>>2008</option>
															<option value="2007" <?= $year == "2007" ? "selected" : ""; ?>>2007</option>
															<option value="2006" <?= $year == "2006" ? "selected" : ""; ?>>2006</option>
															<option value="2005" <?= $year == "2005" ? "selected" : ""; ?>>2005</option>
															<option value="2004" <?= $year == "2004" ? "selected" : ""; ?>>2004</option>
															<option value="2003" <?= $year == "2003" ? "selected" : ""; ?>>2003</option>
															<option value="2002" <?= $year == "2002" ? "selected" : ""; ?>>2002</option>
															<option value="2001" <?= $year == "2001" ? "selected" : ""; ?>>2001</option>
															<option value="1999" <?= $year == "1999" ? "selected" : ""; ?>>1999</option>
															<option value="1998" <?= $year == "1998" ? "selected" : ""; ?>>1998</option>
															<option value="1997" <?= $year == "1997" ? "selected" : ""; ?>>1997</option>
															<option value="1996" <?= $year == "1996" ? "selected" : ""; ?>>1996</option>
															<option value="1995" <?= $year == "1995" ? "selected" : ""; ?>>1995</option>
															<option value="1994" <?= $year == "1994" ? "selected" : ""; ?>>1994</option>
															<option value="1993" <?= $year == "1993" ? "selected" : ""; ?>>1993</option>
															<option value="1992" <?= $year == "1992" ? "selected" : ""; ?>>1992</option>
															<option value="1991" <?= $year == "1991" ? "selected" : ""; ?>>1991</option>
															<option value="1990" <?= $year == "1990" ? "selected" : ""; ?>>1990</option>
															<option value="1989" <?= $year == "1989" ? "selected" : ""; ?>>1989</option>
															<option value="1988" <?= $year == "1988" ? "selected" : ""; ?>>1988</option>
														</select>
													</div>
												</div>
											</div>
                                        	<div class="form-group">
												<label for="jenis_kelamin" name="jenis_kelamin">Jenis Kelamin</label>
												<div class="col-md-4">
													<select class="form-control" name="jenis_kelamin" disabled>
														<option value="0" <?= $rw_user['jenis_kelamin'] == 0 ? "selected" : ""?>>Laki-Laki</option>
														<option value="1" <?= $rw_user['jenis_kelamin'] == 1 ? "selected" : "" ?>>Perempuan</option>
													</select>
												</div>
											</div>
                                        	<div class="form-group">
												<label class="form-label" name="alamat">Alamat</label>
												<textarea class="form-control" rows="6" name="alamat" readonly><?= $rw_user['alamat']; ?></textarea>
											</div>
                                        	<div class="form-group">
												<label for="no_hp">Nomor Handphone</label>
												<input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="nomor Hp" value="<?= $rw_user['no_hp']; ?>" readonly>
											</div>
                                        	<div class="form-group">
												<label for="nama_bank">Nama Bank</label>
												<input type="text" class="form-control" id="nama_bank" name="nama_bank" placeholder="nama bank" value="<?= $rw_user['nama_bank']; ?>" readonly>
											</div>
                                        	<div class="form-group">
												<label for="cabang_bank">Cabang</label>
												<input type="text" class="form-control" id="cabang_bank" name="cabang_bank" placeholder="cabang bank" value="<?= $rw_user['cabang_bank']; ?>" readonly>
											</div>
                                        	<div class="form-group">
												<label for="pemilik_rekening">Nama Pemilik Rekening (sesuai KTP)</label>
												<input type="text" class="form-control" id="pemilik_rekening" name="pemilik_rekening" placeholder="nama pemilik rekening" value="<?= $rw_user['pemilik_rekening']; ?>" readonly>
											</div>
                                     		<div class="form-group">
												<label for="no_rekening">Nomor Rekening</label>
												<input type="text" class="form-control" id="no_rekening" name="nomor_rekening" placeholder="email address" value="<?= $rw_user['nomor_rekening']; ?>" readonly>
											</div>
                                     		<div class="form-group">
												<label for="swift_code">Swift Code</label>
												<input type="text" class="form-control" id="swift_code" name="swift_code" placeholder="swift code" value="<?= $rw_user['swift_code']; ?>" readonly>
											</div>
										</div>

										<div class="card-footer">
											<!-- <a href="#" class="btn btn-success mt-1">Update</a> -->
											<!-- <button type="submit" class="btn btn-success mt-1">Update</button> -->
										</div>
									</form>
								</div>

								<div class="card">
									<form action="index-menu-profile-page-edit_dokumen.html" method="post" enctype="multipart/form-data">
										<div class="card-header">
											<h3 class="card-title">KYC Dokumen</h3>
										</div>
										<div class="card-body p-5">
											<div class="memberblock mb-0 py-5">
												<div class="row my-5">
													<div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
														<a href="" class="member"><img src="../assets/images/uploads/ktp/<?= $rw_user['foto_ktp']; ?>" alt="" height="198px">
														<div class="memmbername">KTP</div>
														</a>
                                                    	<input type="file" class="dropify" data-max-file-size="1M" name="foto_ktp" />
                                                     	<div class="memmbername">KTP</div>
													</div>
													<div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
														<a href="" class="member"><img src="../assets/images/uploads/selfie/<?= $rw_user['foto_selfie']; ?>" alt="" height="198px">
														<div class="memmbername">Selfie</div>
														</a>
                                                    	<input type="file" class="dropify" data-max-file-size="1M" name="foto_selfie" />
                                    					<div class="memmbername">Selfie</div>
													</div>
												</div>
											</div>
										</div>
                                    	<div class="card-footer">
											<!-- <a href="#" class="btn btn-success mt-1">Update</a> -->
											<button type="submit" class="btn btn-success mt-1">Update</button>
										</div>
									</form>
								</div>
							</div>
						</div>

	<script>
    	setTimeout(() => {
    	  // let alert = document.querySelector(".alert");
    	  let alert = $(".alert");
    	  alert.remove();
    	}, 4000);
	</script>

	<script>
		$(document).ready(()=> {
			$("#password_lama").keyup(()=> {
				let password_lama = $("#password_lama").val();
				if (password_lama == "") {
					$("#error_password_lama").html("");
				} else {
					$.ajax({
						url		: "cek_pass_lama.php",
						type	: "POST",
						data	: "password"+password_lama,
						success	: (res) => {
							if (res > 0) {
								$("#error_password_lama").html("password lama cocok");
							} else {
								$("#error_password_lama").html("password lama tidak cocok");
							}
						}
					});
				}
			});
		})

		// var buttonDel = document.getElementsByClassName('tutup');
		// Array.from(buttonDel).forEach(function(el){
		//  el.addEventListener('click',function(e){
		//   if(!confirm('Yakin ingin menutup akun Anda?')){
		//    e.preventDefault();
		//   }
		// });
		// });
 </script>
