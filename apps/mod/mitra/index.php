					
<div class="row p-5">
    <label for="topup">Referral Link</label>
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<input type="text" value="https://edccash.com/apps/register_user.php?referral=<?=$_SESSION['username']?>" readonly class="form-control">
						
</div><!-- COL END -->
</div>


					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="card-order">
										<h6 class="mb-2">Level</h6>
										<h2 class="text-right "><i class="fa fa-star text-warning icon-size float-left text-warning text-warning-shadow"></i><span><?=$level?></span></h2>
										<p class="mb-0"><span class="float-right"></span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card ">
								<div class="card-body">
									<div class="card-widget">
										<h6 class="mb-2">Rippening Referral</h6>
										<h2 class="text-right"><i class="mdi mdi-cube icon-size float-left text-success text-success-shadow"></i><span><?=rippeningrefreal($_SESSION['user_id'])?></span></h2>
										<p class="mb-0"><span class="float-right"></span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="card-widget">
										<h6 class="mb-2">Saldo Bonus Referral</h6>
										<h2 class="text-right"><i class="icon-size mdi mdi-poll-box   float-left text-warning text-warning-shadow"></i><span><?=angka($saldoreff)?></span></h2>
										<p class="mb-0"><span class="float-right"></span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card ">
								<div class="card-body">
									<div class="card-widget">
										<h6 class="mb-2">Jumlah Referral</h6>
										<h2 class="text-right"><i class="mdi mdi-account-multiple icon-size float-left text-danger text-danger-shadow"></i><span><?=totalref($_SESSION['user_id'])?></span></h2>
										<p class="mb-0"><span class="float-right"></span></p>
									</div>
								</div>
							</div>
						</div><!-- COL END -->
					</div>

					<div class="row pt-2">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Daftar Mitra</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="table-anggota" class="table table-striped table-bordered text-nowrap w-100">
											<thead>
												<tr>
													<th class="wd-15p">User id</th>
													<th class="wd-15p">Username</th>
													<th class="wd-20p">Email</th>
													<th class="wd-15p">Saldo eddcash</th>
													<th class="wd-10p">Saldo eddcblockchain</th>
													<th class="wd-25p">Member</th>
													<th class="wd-10p">Aksi</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
								<!-- TABLE WRAPPER -->
							</div>
							<!-- SECTION WRAPPER -->
						</div>
					</div>
					<!-- ROW-1 CLOSED -->
						
						
						<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
								
                    		<div class="modal-dialog modal-lg">
                    		  	  	<div class="modal-content">
                    		  	  	  	<div class="modal-header">
											<h4 class="modal-title">Detail</h4>
                    		  	  	  	  	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
                    		  	  	  	</div>
                    		  	  	  	<div class="modal-body">
											<div class="container-fluid">
												<div class="row">
													<div class="col-12 col-md-12">
														
														<div class="card">
															<div class="card-body">
															
																<div class="row">
																	<div class="col-md-4 col-sm-12 text-center">
																		<!-- <img src="" alt=""> -->
																		<i class="fa fa-user ml-5" style="font-size:170px"></i>
																	</div>
																	<div class="col-md-8 col-sm-12">
																		<div class="row ml-1">
																			<!-- <div class="col-4">Username</div>
																			<div class="col-8">: </div> -->
																			<h3 class="display-5" id="username"></h3>
																		</div>
																		<div class="row">
																			<div class="col-4">Email</div>
																			<div class="col-8" id="email_users"></div>
																		</div>
																		<div class="row">
																			<div class="col-4">Nama Lengkap</div>
																			<div class="col-8" id="nama_lengkap"></div>
																		</div>
																		<div class="row">
																			<div class="col-4">Saldo Eddcash</div>
																			<div class="col-8" id="saldo_eddcash"></div>
																		</div>
																		<div class="row">
																			<div class="col-4">Saldo EddcBlockchain</div>
																			<div class="col-8" id="saldo_eddcb"></div>
																		</div>
																		<div class="row">
																			<div class="col-4">Member</div>
																			<div class="col-8" id="jumlah_member"></div>
																		</div>
																	</div>
																</div>

															</div>
														</div>

													</div>
												</div>
											</div>
											<div class="my-5 mx-5">
												<div class="row" style="width:100%">
													<div class="col-12 table-responsive">
													<table  class="table table-striped table-bordered nowrap" >
														<thead>
															<tr>
																<th>Username</th>
																<th>Email</th>
																<th>Saldo Eddcash</th>
																<th>Saldo Eddcblockchain</th>
																<th>Member</th>
																<th>Aksi</th>
															</tr>
														</thead>
														<tbody id="table-member"></tbody>
													</table>
													</div>
												</div>
											</div>
                    		  	  	  	</div>
                    		  	  	  	<div class="modal-footer">
                    		  	  	  	  	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    		  	  	  	</div>
                    		  	  	</div>
								  <!-- /.modal-content -->
                    		</div>
                    	</div>
						<!-- /.modal-dialog -->
						


<script>
	$(document).ready(function() {
      $('#table-anggota').DataTable( {
         "processing": false,
         "serverSide": true,
         "ajax": "mod/mitra/data_user.php",
         "pagingType": "simple_numbers",
         "leftColumns": 1,
         "rightColumns": 1,
         "columnDefs": [
          {
            "targets": [0],
            "visible": false
          },
        ]
      });
      $.fn.DataTable.ext.pager.numbers_length = 5;
    } );
</script>
	  

<script>
	function clickButton(id) {
		
		$.ajax({
			type: "GET",
			dataType: "json",
			url: "mod/mitra/detail_user.php",
			data: "id="+id,
			success: function(result) {


				
				let user 			= result['user'];
				let username 		= user['username'];
				let users			= user['users_id'];
				let email			= user['email_users'];
				let nama_lengkap	= user['nama_lengkap'];
				let eddcash			= user['saldo_eddcash'];
				let eddcblockchain	= user['saldo_eddcblockchain'];
				
				let jumlah_member	= result['total'];



				$("#username").text(username);
				$("#email_users").text(`: ${email}`);
				$("#nama_lengkap").text(`: ${nama_lengkap}`);
				$("#saldo_eddcash").text(`: ${eddcash}`);
				$("#saldo_eddcb").text(`: ${eddcblockchain}`);
				$("#jumlah_member").text(`: ${jumlah_member}`);

				$("#table-member").html("");
				$.each(result['member'], function (i, val) { 
					 
					$('#modal-default').modal('show');


					//  $("#table-member");

					 $("#table-member").append(`
					 	<tr>
							<td>${val['username']}</td>
							<td>${val['email_users']}</td>
							<td>${val['saldo_eddcash']}</td>
							<td>${val['saldo_eddcblockchain']}</td>
							<td id="jumlah_member">${result['hitung'][i]}</td>
							<td><a href='#' id="Mymodal" class='btn btn-success' data-toggle='modal' data-target='#modal-default' onclick='clickButton(${val['users_id']})'>Detail</a></td>
						</tr>
					`);
				});

			}
		});
	}

	

</script>