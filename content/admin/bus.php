<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bus</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Bus</h4>
                    <button type="button" class="btn btn-success tombolTambah" data-toggle="modal" data-target="#formModal"><i class="fa fa-plus"></i> Tambah</button>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Kelas</th>
                                    <th>Harga</th>
                                    <th>No.Plat Polisi</th>
                                    <th>Supir</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                // $no = 1;
                                // $result = $conn->query("SELECT * FROM bus INNER JOIN supir on bus.supir=supir.id_spr ORDER BY id_bus DESC");
                                // foreach ($result as $value) :

                                ?>
                                <tr>
                                    
                                </tr>
                                <?php 
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="formModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judulModalLable">Tambah Data Bus</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="config/processBus.php?action=addBus" method="post">
                    <input type="hidden" name="id_bus" id="id">
                    <div class="form-group">
                        <label class="control-label" for="kel"> Kelas : </label>
                        <select class="form-control" name="kelas" id="kel">
                            <option>-- Pilih Kelas --</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Patas Ac">Patas Ac</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Eksekutif">Eksekutif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="hrg"> Harga : </label>
                        <input type="text" name="harga" class="form-control" id="hrg" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="npol"> No.Plat Polisi : </label>
                        <input type="text" name="no_pol" class="form-control" id="npol" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="supir"> Supir : </label>
                        <select class="form-control" name="supir" id="supir">
                        <option>-- Pilih Supir --</option>
                       
                        </select>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success"> Tambah Data</button>
            </div>
            </form>

        </div>
    </div>
</div>
<script src="assets/js/plugins-init/jquery.min.js"></script>