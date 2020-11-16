
    
    $("#topupselec").change(function () {
  var jenis = $(this).val();
        
    
        
      $("#formtopup").empty().append();  
        var vbtcform='<div class="form-group">'+
          '<label for="exampleInputEmail1">Alamat email Tujuan Voucher</label>'+
          '<input type="text" class="form-control" readonly  id="emailbtc" placeholder="Email" />'+
        '</div>'+
            '<div class="form-group">'+
          '<label for="novoucher">No Voucher</label>'+
          '<input type="text" class="form-control" name="novoucher" id="novoucher" placeholder="Nomor Voucher Bitcoin" />'+
        '</div>'+
        '<div class="form-group">'+
          '<label for="exampleInputEmail1">Nilai Voucher</label>'+
          '<input type="text" class="form-control" onKeyUp="ratevbtc()" name="vbtctot" id="vbtctot" placeholder="Jumlah Rupiah Voucher" />'+
        '</div>'+ 
        '<div class="form-group">'+
          '<label for="exampleInputEmail1">Jumlah EDCCASH</label>'+
          '<input type="text" class="form-control" readonly name="totaleddcc" id="totaleddcc" placeholder="0" />'+
        '</div>'+
        '<div class="form-row">'+
           
        '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE IDR</label>'+
          '<input type="text" class="form-control" readonly id="feeidr" name="feeidr"  placeholder="0" />'+
        '</div>'+
            '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE EDCCASH</label>'+
          '<input type="text" class="form-control" readonly name="feeedc"  id="feeedc" placeholder="0" />'+
        '</div>'+
            '</div>';
        var btcform='<div class="form-group ">'+
          '<label for="exampleInputEmail1">Alamat Bitcoin</label>'+
          '<input type="text" class="form-control"  id="addressbtc" placeholder="Nomor Voucher Bitcoin" />'+
        '</div>'+
            '<div class="form-group">'+
          '<label for="exampleInputEmail1">Jumlah BTC</label>'+
          '<input type="text" class="form-control" onKeyUp="ratebtc()" name="btctot"  id="btctot" placeholder="0" />'+
        '</div>'+
        '<div class="form-group">'+
          '<label for="exampleInputEmail1">Jumlah EDCCASH</label>'+
          '<input type="text" class="form-control" readonly name="totaleddcc" id="totaleddcc" placeholder="Nomor Voucher Bitcoin" />'+
        '</div>'+
        '<div class="form-row">'+
           
        '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE IDR</label>'+
          '<input type="text" class="form-control" readonly name="feeidr"  id="feeidr" placeholder="0" />'+
        '</div>'+
            '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE EDDCASH</label>'+
          '<input type="text" class="form-control" readonly name="feeedc"  id="feeedc" placeholder="0" />'+
        '</div>'+
            '</div>';
        
        var prizmform='<div class="form-group ">'+
          '<label for="exampleInputEmail1">Adress PRIZM</label>'+
          '<input type="text" class="form-control" readonly id="addressprizm" />'+
        '</div>'+
            '<div class="form-group ">'+
          '<label for="exampleInputEmail1">Public Key PRIZM</label>'+
          '<input type="text" class="form-control" readonly  id="keyprizm" />'+
        '</div>'+
            '<div class="form-group">'+
          '<label for="exampleInputEmail1">Jumlah PRIZM</label>'+
          '<input type="number" class="form-control" onKeyUp="rateprizm()" name="totalprizm"  id="totalprizm" placeholder="0" />'+
        '</div>'+
        '<div class="form-group">'+
          '<label for="exampleInputEmail1">Jumlah EDCCASH</label>'+
          '<input type="text" class="form-control" readonly name="totaleddcc" id="totaleddcc" placeholder="0" />'+
        '</div>'+
        '<div class="form-row">'+
           
        '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE IDR</label>'+
          '<input type="text" class="form-control" readonly name="feeidr" id="feeidr" placeholder="0" />'+
        '</div>'+
            '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE EDDCASH</label>'+
          '<input type="text" class="form-control" readonly name="feeedc"  id="feeedc" placeholder="0" />'+
        '</div>'+
            '</div>';
        
        var edccb='<div class="form-group">'+
          '<label for="exampleInputEmail1">Jumlah EDCCB</label>'+
          '<input type="text" class="form-control" onKeyUp="toprateedccb()" name="edccbtot"  id="edccbtot" placeholder="0" />'+
        '</div>'+
        '<div class="form-group">'+
          '<label for="totaleddcc">Jumlah EDCCASH</label>'+
          '<input type="text" class="form-control" readonly name="totaleddcc" id="totaleddcc" placeholder="0" />'+
        '</div>'+
        '<div class="form-row">'+
           
        '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE IDR</label>'+
          '<input type="text" class="form-control" readonly name="feeidr"  id="feeidr" placeholder="0" />'+
        '</div>'+
            '<div class="form-group col-md-6">'+
          '<label for="exampleInputEmail1">FEE EDDCASH</label>'+
          '<input type="text" class="form-control" readonly name="feeedc"  id="feeedc" placeholder="0" />'+
        '</div>'+
            '</div>';
        
        if(jenis=='btc'){
        $("#formtopup").append(btcform);
        
        }else if(jenis=='voucherbtc'){
            
             $("#formtopup").append(vbtcform);
        }else if(jenis=='prizm'){
            
             $("#formtopup").append(prizmform);     
        }else if(jenis=='edccb'){
             $("#formtopup").append(edccb);  
           
        }
        
         $("#emailbtc").val(emailbtc);
        $("#addressbtc").val(addressbtc);
        $("#addressprizm").val(addressprizm);
        $("#keyprizm").val(keyprizm);
        
        
});
    
    function sendbalance(){
        var jlsend=$("#totaleddcc").val();
        var feesend=jlsend*feetransaksi;
        var feidr= feesend*rateedccb;
		var totsend=jlsend-feesend;
        $("#feesend").val(feesend.toLocaleString("en-US"));
        $("#feeidrsend").val(feidr.toLocaleString("en-US"));
        $("#totsend").val(totsend.toLocaleString("en-US"));
        
    }
    
    function rateprizm(){
        
        var totalprizm= $("#totalprizm").val();
		var rppriz=totalprizm*ratepriz;
        var eddcget=rppriz/rateedccasdsikon;
        var feedcc= eddcget*feetransaksi;
        var feidr= feedcc*ratejualedccash;
        $("#totaleddcc").val(eddcget.toLocaleString("en-US"));
        $("#feeidr").val(feidr.toLocaleString("en-US"));
        $("#feeedc").val(feedcc.toLocaleString("en-US"));
        
    }


function toprateedccb(){
        
        var totaledccb= $("#edccbtot").val();
		var rppedccb=totaledccb*rateedccb;
        var eddcget=rppedccb/rateedccasdsikon;
        var feedcc= eddcget*feetransaksi;
        var feidr= feedcc*ratejualedccash;
        $("#totaleddcc").val(eddcget.toLocaleString("en-US"));
        $("#feeidr").val(feidr.toLocaleString("en-US"));
        $("#feeedc").val(feedcc.toLocaleString("en-US"));
    
    
        
    }


     function ratevbtc(){
       
        var totalvbtc= $("#vbtctot").val();
        var eddcget=totalvbtc/rateedccasdsikon;
		var feedcc= eddcget*feetransaksi;
		var feidr= feedcc*ratejualedccash;
        
        $("#totaleddcc").val(eddcget.toLocaleString("en-US"));
        $("#feeidr").val(feidr.toLocaleString("en-US"));
        $("#feeedc").val(feedcc.toLocaleString("en-US"));
        
    }
    function ratebtc(){
        
        
        var totalbtc= $("#btctot").val();
        var btcidr=totalbtc*ratebit;
        var eddcget=btcidr/rateedccasdsikon;
		var feedcc=eddcget*feetransaksi;
        var feidr= feedcc*ratejualedccash;
        
        
        $("#totaleddcc").val(eddcget.toLocaleString("en-US"));
        $("#feeidr").val(feidr.toLocaleString("en-US"));
        $("#feeedc").val(feedcc.toLocaleString("en-US"));
        
        
    }
    
   
    