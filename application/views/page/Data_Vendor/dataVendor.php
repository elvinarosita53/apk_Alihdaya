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
                                    </th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Pemilik</th>
                                    <th>Alamat Perusahaan</th>
                                    <th>Email</th>
                                    <th>Status Kontrak</th>
                                </tr>
                            </thead>
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