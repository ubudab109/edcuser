
<div class="row">
   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="card-widget">
          <h6 class="mb-2">Mining EDCCASH</h6>
          <h2 class="text-right"><i class="icon-size icon icon-energy   float-left text-warning text-warning-shadow"></i><span><?=angka($saldominingedccash); ?></span></h2>
          <p class="mb-0">Ripening:<span class="float-right"><?= rippeningeddcash($_SESSION['user_id'])?> EDCCASH</span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END -->
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card ">
      <div class="card-body">
        <div class="card-widget">
          <h6 class="mb-2">Mining EDCCB</h6>
          <h2 class="text-right"><i class="icon icon-energy icon-size float-left text-danger text-danger-shadow"></i><span><?=angka($saldominingedb)?></span></h2>
          <p class="mb-0">Ripening:<span class="float-right"><?= rippeningeddccb($_SESSION['user_id'])?> EDCCB</span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END -->
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="card-widget">
          <h6 class="mb-2">Mining EDCCASH</h6>
           <h2 class="text-right"><i class="icon-size fa fa-refresh <?php if($cloud_edccash_status=='1'){echo "fa-spin"; }?>    float-left text-warning text-warning-shadow"></i><span><?php if($cloud_edccash_status=='1'){echo "Aktif"; }else{echo"Mati";}?></span></h2>
           <p class="mb-0">Tanggal Berakhir Cloud:<span class="float-right"><?=tanggal($rwusers['tanggal_cloud_eddcash'])?></span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END -->
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="card-widget">
          <h6 class="mb-2">Mining EDCCB</h6>
          <h2 class="text-right"><i class="icon-size fa fa-refresh <?php if($cloud_edcb_status=='1'){echo "fa-spin"; }?>   float-left text-danger text-danger-shadow"></i><span><?php if($cloud_edcb_status=='1'){echo "Aktif"; }else{echo"Mati";}?></span></h2>
          <p class="mb-0">Tanggal Berakhir Cloud:<span class="float-right"><?=tanggal($rwusers['tanggal_cloud_eddcb'])?></span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END --> 
</div>

<div class="btn-list">
	<button type="button" data-toggle="modal" data-target="#bayar_cash" class="btn btn-warning"><i class="fe fe-credit-card mr-2"></i>Bayar Cloud EDCCASH</button>
    <button type="button" data-toggle="modal" data-target="#bayar_edccb" class="btn btn-danger"><i class="fe fe-credit-card mr-2"></i>Bayar Cloud EDCCB</button>
    
</div>

					<div class="row pt-2">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">History Pembayaran Cloud</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="bayarcloud" class="table table-striped table-bordered text-nowrap w-100">
												<thead>
													<tr>
														<th class="wd-15p">Tanggal</th>
														<th class="wd-15p">ID Transaksi</th>
														<th class="wd-20p">Jenis Cloud</th>
														<th class="wd-15p">Jumah Perpanjang(Bulan)</th>
														<th class="wd-10p">Total Bayar</th>
														
													</tr>
												</thead>
												
											</table>
										</div>
									</div>
									<!-- TABLE WRAPPER -->
								</div>
								<!-- SECTION WRAPPER -->
							</div>
						</div>
						<!-- ROW-1 CLOSED -->
<div class="row pt-2">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Ripening EDCCASH</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="ripeddcash" class="table table-striped table-bordered text-nowrap w-100">
												<thead>
													<tr>
														<th class="wd-15p">Tanggal Generate</th>
														<th class="wd-15p">Mining EDCCASH</th>
														
													</tr>
												</thead>
												
											</table>
										</div>
									</div>
									<!-- TABLE WRAPPER -->
								</div>
								<!-- SECTION WRAPPER -->
							</div>
						</div>
<div class="row pt-2">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Ripening EDCCB</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="ripededccb" class="table table-striped table-bordered text-nowrap w-100">
												<thead>
													<tr>
														<th class="wd-15p">Tanggal Generate</th>
														<th class="wd-15p">Mining EDCCB</th>
													</tr>
												</thead>
												
											</table>
										</div>
									</div>
									<!-- TABLE WRAPPER -->
								</div>
								<!-- SECTION WRAPPER -->
							</div>
						</div>

<form action="index-menu-cloud-page-bayarcloudedcash.html" enctype="multipart/form-data" method="post">
<div class="modal fade" id="bayar_cash" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bayar Cloud EDCCASH
          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body"> 
          
        <div class="form-group">
          <label for="saldoedcash">Saldo EDCC  Blockchain</label>
          <input type="text" readonly value="<?=number_format($saldoedccb,3)?>" id="saldoedcash" class="form-control">
        </div> 
          <div class="form-group">
          <label for="bulana">Bayar Cloud (Bulan)</label>
          <input type="text" required min="1" onKeyUp="total_cloudb()" name="bulan" id="bulanb" class="form-control">
        </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cloudidr">Harga Cloud IDR Perbulan</label>
            <input type="text" readonly class="form-control"  id="cloudidrb" placeholder="0">
          </div>
          <div class="form-group col-md-6">
            <label for="cloudedcb">Harga Cloud EDCC Blockcain Perbulan</label>
            <input type="text" readonly class="form-control" id="cloudcash" placeholder="0">
          </div>
        </div>
          <div class="form-group">
          <label for="totalcloudedcash">Total Biaya Cloud</label>
          <input type="text" readonly name="totalcloudedcash" id="totalcloudedcash" class="form-control">
        </div>
        <label class="text-danger">Masa aktif cloud anda akan langsung di perpanjang dan saldo akan di potong pastikan saldo anda cukup</label>
          <div class="form-group">
          <label for="password">Password</label>
          <input type="password" required name="password"  class="form-control" placeholder="Password">
        </div> 
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Proses</button>
      </div>
    </div>
  </div>
</div>
</form>

<div class="modal fade" id="bayar_edccb" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bayar Cloud EDCC Blockchain
          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body"> 
          
        
        <p>Pembayaran Cloud EDCC Blockchain dilakukan secara otomatis setiap bulan nya pastikan saldo anda mencukupi untuk perpanjang Cloud Untuk Bulan Berikut nya</p>
<ol>
<li>Minimum Saldo EDCC Blockchain 1343 EDCCB Dengan Biaya 2,5% Perbulan</li>
<li>Jika Saldo di atas 10413 EDCCB Maka Biaya Cloud 1% dari Jumlah Saldo</li>
</ol>
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script>
var hargacloudidr=300000;
var hargacloudedcb=hargacloudidr/rateedccb;

function total_clouda(){
    
    var jlbulan=$("#bulana").val();
    var totalbayar=jlbulan*hargacloudedcb;
    $("#totalcloudedcb").val(totalbayar.toLocaleString("en-US"));
     $("#cloudidr").val(hargacloudidr.toLocaleString("en-US"));
     $("#cloudedcb").val(hargacloudedcb.toLocaleString("en-US"));
}

    var hargacloudcash=hargacloudidr/rateedccb;
    function total_cloudb(){
     
         var jlbulanb=$("#bulanb").val();
        
    var totalbayarb=jlbulanb*hargacloudcash;
    $("#totalcloudedcash").val(totalbayarb.toLocaleString("en-US"));
     $("#cloudidrb").val(hargacloudidr.toLocaleString("en-US"));
     $("#cloudcash").val(hargacloudedcb.toLocaleString("en-US"));
    }

 $(document).ready(function() {
  var table =  $('#bayarcloud').DataTable( {
        "processing": true,
        "serverSide": true,
		"ajax":"mod/cloud/data/databayar.php",
		"order": [[ 0, "desc" ]]
		
    } );

} );   
    
    
    $(document).ready(function() {
  var table =  $('#ripeddcash').DataTable( {
        "processing": true,
        "serverSide": true,
		"ajax":"mod/cloud/data/dataripeningeddcash.php",
		"order": [[ 0, "desc" ]]
		
    } );

} );    
    
    $(document).ready(function() {
  var table =  $('#ripededccb').DataTable( {
        "processing": true,
        "serverSide": true,
		"ajax":"mod/cloud/data/dataripeningedccb.php",
		"order": [[ 0, "desc" ]]
		
    } );

} );    
</script>