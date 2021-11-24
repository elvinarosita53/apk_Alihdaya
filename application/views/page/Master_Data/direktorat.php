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
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add-template">ADD Template</a>
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
                                    <th>Nama</th>
                                    <th>Badge</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan</th>
                                    <th>Area Kerja</th>
                                    <th>Status Kerja</th>
                                    <th>Status Kontrak</th>
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



<?php $this->load->view('dist/partials/footer'); ?>