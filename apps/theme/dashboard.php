



<div class="col-md-12 col-xl-12">
  <div class="card card-collapsed">
    <div class="card-header bg-danger">
      <h3 class="card-title">Pengumuman</h3>
      <div class="card-options"> <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> </div>
    </div>
    <div class="card-body"> Sesuai hasil rapat dengan Satuan Tugas Waspada Investasi (Satgas Waspada Investasi) Otoritas Jasa Keuangan (OJK) pada tanggal 18 Juni 2019, maka dengan ini kami mengumumkan bahwa EDCCASH tidak pernah menjanjikan profit apapun. Apabila ada pihak yang menjanjikan profit atas EDCCASH, maka hal tersebut bukanlah dari kami dan bukan merupakan tanggung jawab kami. </div>
    <div class="card-footer bg-danger br-br-3 br-bl-3">
      <div class="text-white">Management EDCCASH</div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="card-order">
          <h6 class="mb-2">Saldo EDCCASH</h6>
          <h2 class="text-right "><i class="pe-7s-cash icon-size float-left text-primary text-primary-shadow"></i><span><?=angka($rwusers['saldo_eddcash'])?></span></h2>
          <p class="mb-0">Jumlah dalam Rupiah<span class="float-right"><?=rupiah($saldodalrupiah)?></span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END -->
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card ">
      <div class="card-body">
        <div class="card-widget">
          <h6 class="mb-2">Saldo EDCCB</h6>
          <h2 class="text-right"><i class="pe-7s-cash icon-size float-left text-success text-success-shadow"></i><span><?=angka($rwusers['saldo_eddcblockchain'])?></span></h2>
          <p class="mb-0">Jumlah dalam Rupiah<span class="float-right"><?=rupiah($saldoedccbrupiah)?></span></p>
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
          <h2 class="text-right"><i class="icon-size icon icon-energy   float-left text-warning text-warning-shadow"></i><span><?=angka($rwusers['saldo_minig_edccash'])?></span></h2>
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
          <h2 class="text-right"><i class="icon icon-energy icon-size float-left text-danger text-danger-shadow"></i><span><?=angka($rwusers['saldo_minig_edcb'])?></span></h2>
          <p class="mb-0">Ripening:<span class="float-right"><?= rippeningeddccb($_SESSION['user_id'])?> EDCCB</span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END --> 
</div>
<div class="row">
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="card">
      <div class="card-body">
        <div class="widget text-center"> <small class="text-muted">Mining EDCCASH Saat Ini</small>
          <h2 id="minedccash" class="mb-2 mt-0"></h2>
          <div id="circle-2" class="mt-3 mb-3 chart-dropshadow-warning"></div>
          <div class="chart-circle-value-3 text-warning fs-20"><i id="miningeddcash">0</i></div>
          <p class="mb-0"><span class="dot-label bg-warning mr-2"></span>Tanggal Berakhir Cloud: <?=tanggal($rwusers['tanggal_cloud_eddcash'])?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END -->
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="card">
      <div class="card-body">
        <div class="widget text-center"> <small class="text-muted">Mining EDCCB Saat Ini</small>
          <h2 id="minedccb" class="mb-2 mt-0"></h2>
          <div id="circle-3" class="mt-3 mb-3 chart-dropshadow-danger"></div>
          <div class="chart-circle-value-3 text-danger fs-20"><i id="miningeddcb"></i></div>
          <p class="mb-0"><span class="dot-label bg-danger mr-2"></span>Tanggal Berakhir Cloud: <?=tanggal($rwusers['tanggal_cloud_eddcb'])?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- COL END --> 
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-lg-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Rate Harga</h3>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover  mb-0 text-nowrap">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Aset</th>
              <th>Harga Jual</th>
              <th>Harga Beli</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>EDCC Blockchain</td>
              <td><?=rupiah(rateaset('edccb','jual'))?></td>
              <td><?=rupiah(rateaset('edccb','beli'))?></td>
            
            </tr>
              <tr>
              <td>2</td>
              <td>EDCCASH</td>
              <td><?=rupiah(rateaset('eddccash','jual'))?></td>
              <td><?=rupiah(rateaset('eddccash','beli'))?></td>
            
            </tr>
            <tr>
              <td>3</td>
              <td>PRIZM </td>
              <td><?=rupiah(rateaset('prizm','jual'))?></td>
              <td><?=rupiah(rateaset('prizm','beli'))?></td>
              
            </tr>
            <tr>
              <td>4</td>
              <td>BTC </td>
              <td><?=rupiah(rateaset('btc','jual'))?></td>
              <td><?=rupiah(rateaset('btc','beli'))?></td>
             
            </tr>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12 col-lg-6">
  <div class="card">
    <div class="card-header"> </div>
    <div class="card-body">
      <div id="carousel-indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-indicators" data-slide-to="1" ></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" alt="" src="../assets/images/media/banner1.png" data-holder-rendered="true"> </div>
          <div class="carousel-item"> <img class="d-block w-100" alt="" src="../assets/images/media/banner2.png" data-holder-rendered="true"> </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
</div><!-- COL END -->


<!-- CHART-CIRCLE JS--> 
<script src="../assets/js/circle-progress.min.js"></script> 
<script>
   
    function progressmining() {
   var a =  new Date(new Date().setHours(0,0,0,0));
var b = new Date();
var difference = (b - a) / 1000;
var menit= Math.floor(difference/60);

    var p = menit/1440;
	var saldoedccash =<?=$saldoedccash?>;
	var saldoedccb =<?=$saldoedccb?>;
	var persenhari=0.005;
	
miningedccash=saldoedccash*persenhari/1440*menit;

//alert(saldoedccash);

miningedccb=saldoedccb*persenhari/1440*menit;
        
document.getElementById("minedccb").innerHTML =miningedccb.toFixed(3);
document.getElementById("minedccash").innerHTML =miningedccash.toFixed(3);    
	
document.getElementById("miningeddcash").innerHTML =menit;
document.getElementById("miningeddcb").innerHTML =menit;
	//alert(p);

	/* Circle-progress-2 */
	$('#circle-2').circleProgress({
		value: p,
		size: 200,
		fill: {
		  color: ["#f7b731"]
		}
    });
    /* Circle-progress-2 closed */

	/* Circle-progress-3 */
	$('#circle-3').circleProgress({
		value: p,
		size: 200,
		fill: {
		  gradient: ["#f5334f"]
		}
    });
	/* Circle-progress-3 closed */
        
     }
    
    $(document).ready(function(){
  // we call the function
  progressmining();
   setInterval(progressmining,60000); 

        
});

  
 
</script>