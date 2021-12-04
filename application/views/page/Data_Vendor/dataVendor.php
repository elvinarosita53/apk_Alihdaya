<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Tabel Vendor</h1>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="card-body">
                    <div class="btn-group my-2">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add-data">ADD Data</a>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add-template">ADD Template</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-2">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                    <th>Aksi</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Pemilik</th>
                                    <th>Alamat Perusahaan</th>
                                    <th>Email</th>
                                    <th>Status Kontrak</th>
                                    
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                </td>
                                <td>Create a mobile app</td>
                                <td class="align-middle">
                                    <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                        <div class="progress-bar bg-success" data-width="100"></div>
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
                            <tbody>

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
                <h5 class="modal-title" id="exampleModalLabel">Form Vendor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="text" class="form-control" required="" placeholder="Masukkan Nama" onfocus="(this.type='text')">
                        </div>
                        <div class="form-group">
                            <label>Nama Pemilik/Direktur</label>
                            <input type="text" class="form-control" required="" placeholder="Masukkan Nomor Badge" onfocus="(this.type='text')">
                        </div>
                        <div class="form-group">
                            <label>Email Perusahaan</label>
                            <input type="email" class="form-control" placeholder="Masukkan Grade" onfocus="(this.type='text')">
                        </div>
                        <div class="form-group ">
                            <label>Alamat</label>
                            <textarea class="form-control" required="" placeholder="Masukkan Alamat" onfocus="(this.type='text')"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 my-0">
                                <label>TMT Kerja</label>
                            </div>
                            <div class="form-group col-6">

                                <input type="text" class="form-control" required="" placeholder="Start Date" onfocus="(this.type='date')">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" required="" placeholder="End Date" onfocus="(this.type='date')">
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