<!-- flashdata sweetalert -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>" data-title="<?= $this->session->flashdata('title') ?>" data-type="<?= $this->session->flashdata('type') ?>"></div>

<div class="col-12">
    <a href="#" class="btn btn-warning mt-3 mb-3">
        <i class="fas fa-plus"></i> Tambah
    </a>

    <div class="card card-accent-warning">
        <div class="card-header"><strong>Data Mobil</strong></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped text-center" style="width:100%" id="datamobil">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>