<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/partials/header');
?>
<div class="modal fade" id="add-template" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Outsourcing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="card-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" required="" placeholder="Masukkan Nama" onfocus="(this.type='text')">
            </div>
            <div class="form-group">
              <label>Badge</label>
              <input type="text" class="form-control" required="" placeholder="Masukkan Nomor Badge" onfocus="(this.type='text')">
            </div>
            <div class="row">
              <div class="form-group col-6">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" required="" placeholder="Masukkan Tempat Lahir" onfocus="(this.type='text')">
              </div>
              <div class="form-group col-6">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" required="" placeholder="Masukkan Tanggal Lahir" onfocus="(this.type='date')">
              </div>
            </div>
            <div class="form-group">
              <label>Grade</label>
              <input type="email" class="form-control" placeholder="Masukkan Grade" onfocus="(this.type='text')">
            </div>
            <div class="form-group">
              <label>Pendidikan</label>
              <select class="form-control">
                <option value="" disabled selected hidden>Masukkan Pendidikan</option>
                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
              </select>
            </div>
            <div class="row">
              <div class="form-group col-6">
                <label>Jenis Kelamin</label>
                <select class="form-control ">
                  <option value="" disabled selected hidden>Masukkan Jenis Kelamin</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label>Area Kerja</label>
                <select class="form-control">
                  <option value="" disabled selected hidden>Masukkan Area Kerja</option>
                  <option value="Non Pabrik">Non Pabrik</option>
                  <option value="Pabrik">Pabrik</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Status Kerja</label>
              <select class="form-control">
                <option value="" disabled selected hidden>Masukkan Status Kerja</option>
                <option value="PKWT">PKWT</option>
                <option value="PKWTT">PKWTT</option>
                <option value="THL">THL</option>
              </select>
            </div>

            <div class="row">
              <div class="form-group col-6">
                <label>Provinsi</label>
                <select class="form-control ">
                  <option value="" disabled selected hidden>Masukkan Provinsi</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label>Kabupaten</label>
                <select class="form-control ">
                  <option value="" disabled selected hidden>Masukkan Kabupaten</option>
                </select>
              </div>

              <div class="form-group col-6">
                <label>Kecamatan</label>
                <select class="form-control ">
                  <option value="" disabled selected hidden>Masukkan Kecamatan</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label>Desa</label>
                <input type="text" class="form-control" required="" placeholder="Masukkan Desa" onfocus="(this.type='text')">
              </div>
              <div class="form-group col-12 mb-0">
                <label>Alamat</label>
                <textarea class="form-control" required="" placeholder="Masukkan Alamat" onfocus="(this.type='text')"></textarea>
              </div>
              <div class="form-group col-12 my-0">
                <label>TMT Kerja</label>
              </div>
              <div class="form-group col-6">

                <input type="text" class="form-control" required="" placeholder="Start Date" onfocus="(this.type='date')">
              </div>
              <div class="form-group col-6">
                <input type="text" class="form-control" required="" placeholder="End Date" onfocus="(this.type='date')">
              </div>
              <div class="form-group col-12">
                <label>Kontrak Perjanjian</label>
                <select class="form-control">
                  <option value="" disabled selected hidden>Masukkan Kontrak Perjanjian</option>

                </select>
              </div>

              <div class="form-group col-6">
                <label>Klasifikasi</label>
                <select class="form-control">
                  <option value="" disabled selected hidden>Masukkan Klasifikasi</option>
                  <option>Level 1</option>
                  <option>Level 2</option>
                  <option>Level 3</option>
                  <option>Level 4</option>
                  <option>Regular </option>
                  <option>Shift</option>
                  <option>Pabrik/Kantor</option>
                  <option>Shift/Reguler</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label>Kualifikasi Kerja</label>
                <select class="form-control">
                  <option value="" disabled selected hidden>Masukkan Kualifikasi Kerja</option>
                </select>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">simpan</button>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('dist/partials/footer'); ?>