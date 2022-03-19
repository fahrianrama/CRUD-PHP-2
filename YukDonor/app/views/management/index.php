<!-- tabel darah -->
      
<br><br><br><br><br>
      <div class="container">
        <a href="<?= BASEURL;?>/index" class="btn btn-primary">Log Out</a>
      </div>

    <div class="container" style="background-color:rgb(240, 255, 255); color: black;">
    <h1 class="text-center">Data Stok Darah</h1><br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Golongan Darah</th>
            <th scope="col">Stok</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
        
        <?php foreach($data['darah'] as $darah) :?>
            <tr>
              <td><?= $darah['goldar'];?></td>
              <td><?= $darah['stok'];?></td>
              <td><button type="button" class="btn btn-primary tampilModalUbahDarah" data-toggle="modal" data-target="#FormUbahDarah" data-goldar="<?=$darah['goldar'];?>">Edit</button></td>
            </tr>
        </tbody>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
    <br><br>
<!-- tabel darah -->

<!-- tabel jadwal -->
<div class="container" style="background-color:rgb(240, 255, 255); color: black;">
  <h1 class="text-center">Data Jadwal</h1><br>
  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#FormBuatJadwal">Tambah Data</button>
  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Edit</th>
          <th scope="col">Hapus</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($data['jadwal'] as $jadwal) :?>
          <tr>
            <td><?= $jadwal['jadwalID'];?></td>
            <td><?= $jadwal['nama'];?></td>
            <td><?= $jadwal['lokasi'];?></td>
            <td><?= $jadwal['tanggal'];?></td>
            <td><button type="button" class="btn btn-primary tampilModalUbahJadwal" data-toggle="modal" data-target="#FormUbahJadwal" data-id="<?=$jadwal['jadwalID'];?>">Edit</button></td>
            <td><a href='<?= BASEURL;?>/management/hapusJadwal/<?=$jadwal['jadwalID']?>' class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button></td>
          </tr>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>
<br><br>
<!--/ tabel jadwal -->

<!-- tabel pendonor -->
<div class="container" style="background-color:rgb(240, 255, 255); color: black;">
  <h1 class="text-center">Data Pendonor</h1><br>
  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#FormBuatPendonor">Tambah Data</button>
  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">No HP</th>
          <th scope="col">Golongan Darah</th>
          <th scope="col">Usia</th>
          <th scope="col">Tanggal Donor</th>
          <th scope="col">Edit</th>
          <th scope="col">Hapus</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($data['pendonor'] as $pendonor) :?>
          <tr>
            <td><?= $pendonor['pendonorID'];?></td>
            <td><?= $pendonor['nama'];?></td>
            <td><?= $pendonor['jk'];?></td>
            <td><?= $pendonor['alamat'];?></td>
            <td><?= $pendonor['noHP'];?></td>
            <td><?= $pendonor['goldar'];?></td>
            <td><?= $pendonor['usia'];?></td>
            <td><?= $pendonor['tanggalDonor'];?></td>
            <td><button type="button" class="btn btn-primary tampilModalUbahPendonor" data-toggle="modal" data-target="#FormUbahPendonor" data-id="<?=$pendonor['pendonorID'];?>">Edit</button></td>
            <td><a href='<?= BASEURL;?>/management/hapusPendonor/<?=$pendonor['pendonorID']?>' class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button></td>
          </tr>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>

<!--/ tabel pendonor -->

<!-- modal form edit darah-->
<div class="modal fade" id="FormUbahDarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Stok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="panel panel-default">
            <div class="panel-body">
            <form method="POST" action="<?= BASEURL;?>/management/ubahstok">
                <input type="hidden" name="goldar" id="goldar">
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control" required/>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- /modal edit darah-->

<!-- modal form buat jadwal-->
<div class="modal fade" id="FormBuatJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="panel panel-default">
            <div class="panel-body">
            <form method="POST" action="<?= BASEURL;?>/management/tambahjadwal">
                <div class="form-group">
                    <label for="nama">Nama Kegiatan</label>
                    <input type="text" name="nama" id="nama" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required/>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- /modal buat jadwal-->

<!-- modal form edit jadwal-->
<div class="modal fade" id="FormUbahJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="panel panel-default">
            <div class="panel-body">
            <form method="POST" action="<?= BASEURL;?>/management/ubahjadwal">
              <input type="hidden" name="identitas" id="identitas">
                <div class="form-group">
                    <label for="nama2">Nama Kegiatan</label>
                    <input type="text" name="nama2" id="nama2" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="lokasi2">Lokasi</label>
                    <input type="text" name="lokasi2" id="lokasi2" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="tanggal2">Tanggal</label>
                    <input type="date" name="tanggal2" id="tanggal2" class="form-control" required/>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- /modal edit jadwal-->


<!-- modal buat data buat pendonor-->
<div class="modal fade" id="FormBuatPendonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="panel panel-default">
            <div class="panel-body">
            <form method="POST" action="<?= BASEURL;?>/management/tambahpendonor">
                <input type="hidden" name="goldar" id="goldar">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="kelamin" name="kelamin" required>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="noHP">No HP</label>
                    <input type="text" name="noHP" id="noHP" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="goldar">Golongan Darah</label>
                    <input type="text" name="goldar" id="goldar" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" name="usia" id="usia" class="form-control" required/>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- /modal buat data pendonor-->


<!-- modal form edit pendonor-->
<div class="modal fade" id="FormUbahPendonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="panel panel-default">
            <div class="panel-body">
            <form method="POST" action="<?= BASEURL;?>/management/ubahpendonor">
              <input type="hidden" name="identitas2" id="identitas2">
                <div class="form-group">
                    <label for="nama3">Nama</label>
                    <input type="text" name="nama3" id="nama3" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="kelamin2">Jenis Kelamin</label>
                    <select class="form-control" id="kelamin2" name="kelamin2" required>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat2">Alamat</label>
                    <input type="text" name="alamat2" id="alamat2" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="noHP2">No HP</label>
                    <input type="text" name="noHP2" id="noHP2" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="goldar2">Golongan Darah</label>
                    <input type="text" name="goldar2" id="goldar2" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="usia2">Usia</label>
                    <input type="number" name="usia2" id="usia2" class="form-control" required/>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- /modal edit pendonor-->