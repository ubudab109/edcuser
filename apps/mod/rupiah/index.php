<div class="row">
<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
  <div class="card">
    <div class="card-body">
      <div class="card-order">
        <h6 class="mb-2">Saldo Virtual</h6>
        <h2 class="text-right "><i class="pe-7s-cash icon-size float-left text-primary text-primary-shadow"></i><span>
          <?=rupiah($saldo_rupiah)?>
          </span></h2>
        <p class="mb-0">Jumlah dalam EDCC Blockchain<span class="float-right">
          <?=angka($saldo_rupiah/$rateedccb)?>
          </span></p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="btn-list">
	<button type="button" data-toggle="modal" data-target="#tukaridr"  class="btn btn-primary"><i class="fe fe-zap mr-2"></i>Tukar Saldo Virtual Ke Crypto asset <i class="ti-wallet mr-2"></i></button>
</div>

					<div class="row pt-2">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">History Transaksi</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="datarupiah" class="table table-striped table-bordered text-nowrap w-100">
												<thead>
													<tr>
														<th class="wd-15p">Tanggal</th>
														<th class="wd-15p">ID Transaksi</th>
														<th class="wd-20p">Total Rupiah</th>
														<th class="wd-15p">Total EDCC Blockchain</th>
														<th class="wd-10p">Fee</th>
														
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
<form action="index-menu-rupiah-page-tukar.html" enctype="multipart/form-data" method="post">
<div class="modal fade" id="tukaridr" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tukar Saldo Virtual Ke Crypto
          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body"> 
          
        <div class="form-group">
          <label for="saldorupiah">Masukan Rupiah</label>
          <input type="text" name="saldorupiah" onKeyUp="rupiah()" id="saldorupiah" class="form-control">
        </div> 
          <div class="form-group">
          <label for="exampleInputEmail1">Total EDCC Blockchain</label>
          <input type="text" readonly name="edcblockchain" id="edcblockchain" class="form-control">
        </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Fee EDCC Blockchain</label>
            <input type="text" readonly class="form-control" name="feetukar" id="feetukar" placeholder="0">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Fee Dalam IDR</label>
            <input type="text" readonly class="form-control" id="feeidrtukar" placeholder="0">
          </div>
        </div>
        <label class="text-danger">Rupiah yang di exchange akan langsung masuk kedalam akun saldo EDCC Blockchain</label>
          <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" name="password"  class="form-control" placeholder="Password">
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

<script>
function rupiah(){
    
    var rptukar=$("#saldorupiah").val();
    var edctukar=rptukar/rateedccb;
    var transaksiedc=feetransaksi*edctukar;
    var feeidr =transaksiedc*rateedccb;
      $("#feetukar").val(transaksiedc.toLocaleString("en-US"));
        $("#feeidrtukar").val(feeidr.toLocaleString("en-US"));
        $("#edcblockchain").val(edctukar.toLocaleString("en-US"));
    
    
    
    
}

$(document).ready(function() {
  var table =  $('#datarupiah').DataTable( {
        "processing": true,
        "serverSide": true,
		"ajax":"mod/rupiah/data/datarupiah.php",
		"order": [[ 0, "desc" ]]
		
    } );

} );    

</script>