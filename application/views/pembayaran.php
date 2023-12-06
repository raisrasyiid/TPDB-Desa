<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Halaman Pembayaran Payment Gateway</title>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-62Y_AcLg3LDmI8NN"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
    
<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/img/logo.png');?>" width="100" height="auto" class="d-inline-block align-top" alt="" loading="lazy">
                Aplikasi Pembayaran
            </a>
        </nav>



    <div class="container-fluid mt-4 p-4">
        <h2 class="text-center">Data Pembayaran SI Desa</h2>
        <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
            <input type="hidden" name="result_type" id="result-type" value=""></div>
            <input type="hidden" name="result_data" id="result-data" value=""></div>
            <label for="nama">Nama</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <label for="nama_desa">Nama Desa</label>
            <div class="form-group">
                <input type="text" class="form-control" name="nama_desa" id="nama_desa">
            </div>
            <label for="paket">Paket</label>
            <div class="form-group">
                <select name="paket" id="paket" class="form-control">
                    <option value="lite">paket lite</option>
                    <option value="premium">paket premium</option>
                    <option value="exslusive">paket exslusive</option>
                </select>
            </div>
            <label for="jumlah_bayar">Jumlah Bayar</label>
            <div class="form-group">
                <input type="text" class="form-control" name="jml_bayar" id="jml_bayar">
            </div>
            <button class="btn btn-primary" id="pay-button">Bayar</button>
        </form>
    </div>

<script type="text/javascript">
  $('#pay-button').click(function (event) {
    event.preventDefault();
    $(this).attr("disabled", "disabled");
  
    var nama = $('#nama').val();
    var nama_desa = $('#nama_desa').val();
    var paket = $('#paket').val();
    var jml_bayar = $('#jml_bayar').val();

  $.ajax({
    type: "POST",
    url: '<?=site_url()?>/snap/token',
    data: {
            nama:nama,
            nama_desa:nama_desa,
            paket:paket,
            jml_bayar:jml_bayar,
        },
    cache: false,

    success: function(data) {
      //location = data;

      console.log('token = '+data);
      
      var resultType = document.getElementById('result-type');
      var resultData = document.getElementById('result-data');

      function changeResult(type,data){
        $("#result-type").val(type);
        $("#result-data").val(JSON.stringify(data));
        //resultType.innerHTML = type;
        //resultData.innerHTML = JSON.stringify(data);
      }

      snap.pay(data, {
        
        onSuccess: function(result){
          changeResult('success', result);
          console.log(result.status_message);
          console.log(result);
          $("#payment-form").submit();
        },
        onPending: function(result){
          changeResult('pending', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        },
        onError: function(result){
          changeResult('error', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        }
      });
    }
  });
});

</script>

</body>
</html>