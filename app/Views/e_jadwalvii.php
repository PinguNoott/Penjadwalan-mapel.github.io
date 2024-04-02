<div class="container">
  <form action="<?= base_url('home/aksi_e_jadwalvii') ?>" method="POST">
  <table>
    <br>
    <br>
    <br>
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">

    <div class="mb-3 mt-3">
        <label for="w" class="form-label">Waktu</label>
        <input type="text" class="form-control" id="w" placeholder="Enter Waktu"   name="w" value="<?= $satu->waktu ?>">
      </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
<script>
    $(function() {
        $("#w").timepicker({
            timeFormat: 'HH:mm',
            controlType: 'select',
            showButtonPanel: false,
            showTime: false,
            showHour: true,
            showMinute: true,
            showSecond: false
        });
    });
</script>

      <div class="mb-3 mt-3">
        <label for="mp" class="form-label">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mp" placeholder="Enter Mata Pelajaran"   name="mp" value="<?= $satu->mata_pelajaran ?>">
      </div>

      <div class="mb-3 mt-3">
        <label for="ng" class="form-label">Nama Guru</label>
        <input type="text" class="form-control" id="ng" placeholder="Enter Nama Guru"   
        name="ng" value="<?= $satu->nama_guru ?>">
      </div>
 
      <input type="hidden" name="id" value="<?= $satu->id_vii ?>">
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</table>

   