<main id="main" class="main">
    <br>
    <br>
    <br>
    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard') ?>">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">


          <div class="card">
            <div class="card-body">
                 <a href="<?= base_url('home/tambahjadwalxii') ?>">
                  <button class="btn btn-success">+ Tambah</button>
               </a>
              
            
                  <h1 align="center">Jadwal Mata Pelajaran</h1>

<div class="container mt-3">
    <h2>XII</h2>
    <p></p>
    <h3>Blok:</h3>
    <input type="text" id="blokSMP" value="1">
    <button onclick="updateBlok('SMP')">Update</button>
</div>

<!-- Tabel 2 -->
<div class="container mt-3">        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Jurusan</th>
        <th>Mata Pelajaran</th>
        <th>Nama Guru</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php

  $no=1;
  foreach ($frede as $clay){
      ?>
      <tr>
         <td><?= $no++ ?></td>
        <td><?=  $clay->waktu ?></td>
        <td><?=  $clay->jurusan ?></td>
        <td><?=  $clay->mata_pelajaran ?></td>
        <td><?=  $clay->nama_guru ?></td>
        <td>
          <a href="<?= base_url('home/edit_jadwalxii/'.$clay->id_xii) ?>">
        <button class="btn btn-primary">Edit</button>
      </a>
      <a href="<?= base_url('home/hapus_jadwalxii/'.$clay->id_xii) ?>">
        <button class="btn btn-primary">Hapus</button>
        </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
 </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
