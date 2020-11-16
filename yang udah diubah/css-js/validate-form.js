$(document).ready(function(){
  $('#step-1').ready(function(){
    $('#step-1 .float-right').addClass('hidden');
      function validateNextButton() {
        var buttonDisabled = $('#nama_lengkap').val().trim() === '' || $('#exampleInputnumber').val() == ''
        || $('#tanggal :selected').val() == '' || $('#bulan :selected').val() == '' || $('#tahun :selected').val() == ''
        || $('#jenis_kelamin').val().trim() === '' || $('#alamat').val().trim() === '' ||
        $('#no_hp').val() == '';
        if(buttonDisabled){
          $('#step-1 .float-right').addClass('hidden');
        }
        else{
          $('#step-1 .float-right').removeClass('hidden');
        }
      }
      $('#nama_lengkap').on('keyup', validateNextButton);
      $('#exampleInputnumber').on('keyup', validateNextButton);
      $('#tanggal :selected').on('keyup', validateNextButton);
      $('#bulan :selected').on('keyup', validateNextButton);
      $('#tahun :selected').on('keyup', validateNextButton);
      $('#jenis_kelamin').on('keyup', validateNextButton);
      $('#alamat').on('keyup', validateNextButton);
      $('#no_hp').on('keyup', validateNextButton);
      });
  });
$(document).ready(function(){
  $('#step-2').ready(function(){
    $('#step-2 .float-right').addClass('hidden');

    function validateNextButtonTwo() {
      var buttonDisabled = $('#nama_bank').val() == '' || $('#cabang_bank').val() == ''
      || $('#pemilik_rekening').val() == '' || $('#nomor_rekening ').val() == '' || $('#swift_code').val() == '';
      if(buttonDisabled){
        $('.float-right').addClass('hidden');
      }
      else{
        $('.float-right').removeClass('hidden');
      }
    }
    $('#nama_bank').on('keyup', validateNextButtonTwo);
    $('#cabang_bank').on('keyup', validateNextButtonTwo);
    $('#pemilik_rekening').on('keyup', validateNextButtonTwo);
    $('#nomor_rekening').on('keyup', validateNextButtonTwo);
    $('#swift_code').on('keyup', validateNextButtonTwo);
  });
})

$(document).ready(function(){
  $('#step-3').ready(function(){
    $('#step-3 .float-right').hide();
    function validateNextButtonThree(){
      var ktp = $("#ktp-user").val();
      var selfie = $('#user-selfie').val();
      var buttonDisabled = ktp == "" || selfie == "";
      if(buttonDisabled){
        $('#step-3 .float-right').hide();

      }else{
        // alert('test');
        $('#step-3 .float-right').show();

      }
    }
    $('#ktp-user').on('change',validateNextButtonThree);
    $('#user-selfie').on('change',validateNextButtonThree);


  })
})
$(document).ready(function(){
  $('#step-5').ready(function(){
    $('#step-5 .float-right').hide();
    function validateNextButtonFour() {
      var bukti_bayar = $('#bukti_bayar').val();
      var buttonDisabled = bukti_bayar == "";
      if(buttonDisabled){
        $('input[type="submit"]').hide();
      }
      else{
        $('input[type="submit"]').show();
      }
    }
    $('#bukti_bayar').on('change',validateNextButtonFour);

    $('.dropify-clear').click(function(){
      $('input[type="submit"]').hide();

    })
  })
})
