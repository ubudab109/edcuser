<div class="row">
<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
  <div class="card">
    <div class="card-body">
      <div class="card-order">
        <h6 class="mb-2">Saldo EDCCASH</h6>
        <h2 class="text-right "><i class="pe-7s-cash icon-size float-left text-primary text-primary-shadow"></i><span>
          <?=angka($rwusers['saldo_eddcash'])?>
          </span></h2>
        <p class="mb-0">Jumlah dalam Rupiah<span class="float-right">
          <?=rupiah($saldodalrupiah)?>
          </span></p>
      </div>
    </div>
  </div>
</div>
 <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
  <div class="card">
    <div class="card-body">
      <div class="card-order">
        <h6 class="mb-2">Saldo Referral</h6>
        <h2 class="text-right "><i class="icon-size mdi mdi-poll-box   float-left text-warning text-warning-shadow"></i><span>
          <?=angka($saldoreff)?>
          </span></h2>
        <p class="mb-0">Jumlah dalam Rupiah<span class="float-right">
          <?=rupiah($saldoreff*$ratejualeddcash)?>
          </span></p>
      </div>
    </div>
  </div>
</div>

</div>
<div class="btn-list">
  <button type="button" data-toggle="modal" data-target="#redeem" class="btn btn-primary"><i class="fe fe-credit-card mr-2"></i>Redem Voucher</button>
    <?php   $qucek="select count(used_voucher) as voucer_aktif from gen_voucher where used_voucher='0' and users_id='$_SESSION[user_id]'";
          $rscek=mysqli_query($con,$qucek);
          $rwcek=mysqli_fetch_array($rscek);

            $cekaktif=$rwcek['voucer_aktif'];

    if($cekaktif=='0'){


    ?>

  <button type="button" data-toggle="modal" data-target="#generate" class="btn btn-primary"><i class="fe fe-upload mr-2"></i>Generate Voucher</button>
    <? }elseif($_SESSION['user_id']=='1807230001'){ ?>
    <button type="button" data-toggle="modal" data-target="#generate" class="btn btn-primary"><i class="fe fe-upload mr-2"></i>Generate Voucher</button>
    <? } ?>
</div>
<div class="row pt-2">
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">History Voucher</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="tabvoucer" class="table table-striped table-bordered text-nowrap w-100">
            <thead>
              <tr>
                <th class="wd-15p">Tanggal Dibuat</th>
                <th class="wd-15p">ID Transaksi</th>
                <th class="wd-20p">Kode Voucer</th>
                <th class="wd-15p">Balance</th>
                <th class="wd-10p">Digunakan Oleh</th>
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

<form action="index-menu-voucher-page-redeem.html" enctype="multipart/form-data" method="post">
  <div class="modal fade" id="redeem" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Generate Voucher </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Masukan Voucher</label>
            <input type="text" name="voucherkode" class="form-control">
          </div>
          <label class="text-danger">Voucher yang bisa di redem adalah voucer yang di buat mengunakan saldo utama bukan voucer referral</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Redem</button>
        </div>
      </div>
    </div>
  </div>
</form>
<form action="index-menu-voucher-page-generate.html" enctype="multipart/form-data" method="post">
  <div class="modal fade" id="generate" tabindex="-1" role="dialog" aria-labelledby="topup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Generate Voucher </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="typevoucer">Generate Voucer Dari</label>
            <select id="typevoucer" name="typevoucer" class="form-control">
              <option>Pilih Sumber Saldo</option>
              <option value="referral">Saldo Bonus Referral</option>
              <option value="saldo">Saldo EDCASH</option>
            </select>
          </div>
          <div id="formvoucer"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button style="display: none;"  id="generatevoc" type="submit" class="btn btn-primary">Generate</button>
        </div>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript">
 $("#typevoucer").change(function () {
  var jenis = $(this).val();

      $("#formvoucer").empty().append();
     var referralsaldo='<div class="form-group ">'+
          '<label for="saldoreferal">Saldo Referral</label>'+
          '<input type="text" readonly class="form-control"  id="saldoreff" placeholder="0" />'+
        '</div>'+
          '<div class="form-group">'+
          '<label for="voucerrefidr">Jumlah Voucher Rupiah </label>'+
          '<input type="text" class="form-control" readonly name="vouceridr" id="vouceridr" placeholder="0" />'+
        '</div>'+
            '<div class="form-group">'+
          '<label for="btctot">Jumlah EDCCASH</label>'+
          '<input type="text" class="form-control" readonly  name="edccashvoucer" id="edccashvoucer" placeholder="0" />'+
        '</div>'+
            '</div>';


     var saldoedccash='<div class="form-group ">'+
          '<label for="adressbtc">Saldo EDCCASH</label>'+
          '<input type="text" class="form-control" readonly  id="saldoedccash" placeholder="0" />'+
        '</div>'+
         '<div class="form-group">'+
          '<label for="vouceridr">Jumlah Voucher Rupiah</label>'+
          '<input type="text" class="form-control" readonly  name="vouceridr" id="vouceridr" placeholder="0" />'+
        '</div>'+
            '<div class="form-group">'+
          '<label for="edccashvoucer">Jumlah EDCCASH</label>'+
          '<input type="text" class="form-control" readonly  name="edccashvoucer" id="edccashvoucer" placeholder="0" />'+
        '</div>'+
            '</div>';

     var saldoref=<?=$saldoreff?>;
     var saldoeddcash=<?=$saldoedccash?>;
     var minimvoc=5000070;
     var edcd= minimvoc/<?=$ratejualeddcash?>;
      $("#generatevoc").hide();
    if(jenis=='referral'){
        $("#formvoucer").append(referralsaldo);
        $("#saldoreff").val(saldoref.toLocaleString("en-US"));
            $("#vouceridr").val(minimvoc.toLocaleString("en-US"));
            $("#edccashvoucer").val(edcd.toLocaleString("en-US"));
        if(saldoref<edcd){
            $("#generatevoc").hide();
           }else {
               $("#generatevoc").show();
           }


        }else if(jenis=='saldo'){
             $("#formvoucer").append(saldoedccash);
             $("#saldoedccash").val(saldoeddcash.toLocaleString("en-US"));
            $("#vouceridr").val(minimvoc.toLocaleString("en-US"));
            $("#edccashvoucer").val(edcd.toLocaleString("en-US"));

            if(saldoeddcash<edcd){
            $("#generatevoc").hide();
           }else {
               $("#generatevoc").show();
           }
        }
 });

     $(document).ready(function() {
  var table =  $('#tabvoucer').DataTable( {
        "processing": true,
        "serverSide": true,
		"ajax":"mod/voucher/data/datavoucer.php",
		"order": [[ 0, "desc" ]]

    } );

} );
</script>
