<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>DataTables</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="card-body">
          <div class="btn-group my-2">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add-data">ADD Data</a>
            <a href="page/Outsourcing/add-template" class="btn btn-success" data-toggle="modal" data-target="#add-template">ADD Template</a>
          </div>
          <div class="table-responsive">
            <table class="table table-striped" id="table-2">
              <thead>
                <tr>
                  <th class="text-center">
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                      <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                    </div>
                  </th>
                  <th>Task Name</th>
                  <th>Progress</th>
                  <th>Members</th>
                  <th>Due Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                      <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>
                  <td>Create a mobile app</td>
                  <td class="align-middle">
                    <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                      <div class="progress-bar bg-success" data-width="100%"></div>
                    </div>
                  </td>
                  <td>
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                  </td>
                  <td>2018-01-20</td>
                  <td>
                    <div class="badge badge-success">Completed</div>
                  </td>
                  <td><a href="#" class="btn btn-secondary">Detail</a></td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                      <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>
                  <td>Redesign homepage</td>
                  <td class="align-middle">
                    <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                      <div class="progress-bar" data-width="0"></div>
                    </div>
                  </td>
                  <td>
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                  </td>
                  <td>2018-04-10</td>
                  <td>
                    <div class="badge badge-info">Todo</div>
                  </td>
                  <td><a href="#" class="btn btn-secondary">Detail</a></td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                      <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>
                  <td>Backup database</td>
                  <td class="align-middle">
                    <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                      <div class="progress-bar bg-warning" data-width="70%"></div>
                    </div>
                  </td>
                  <td>
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                  </td>
                  <td>2018-01-29</td>
                  <td>
                    <div class="badge badge-warning">In Progress</div>
                  </td>
                  <td><a href="#" class="btn btn-secondary">Detail</a></td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                      <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>
                  <td>Input data</td>
                  <td class="align-middle">
                    <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                      <div class="progress-bar bg-success" data-width="100%"></div>
                    </div>
                  </td>
                  <td>
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                  </td>
                  <td>2018-01-16</td>
                  <td>
                    <div class="badge badge-success">Completed</div>
                  </td>
                  <td><a href="#" class="btn btn-secondary">Detail</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>
</div>
<div class="modal fade" id="add-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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