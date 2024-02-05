<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div ng-controller="keluhanController" ng-init="init()">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>Daftar Kerusakan</h2>
                    <button class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>Diagnosa</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Diagnosa</th>
                                    <th>Jenis Kerusakan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="item in datas">
                                    <td>{{$index+1}}</td>
                                    <td>{{item.tanggal}}</td>
                                    <td>{{item.kerusakan}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>