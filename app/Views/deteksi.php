<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div ng-controller="keluhanController" ng-init="init()">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>Daftar Kerusakan</h2>
                    <button class="btn btn-primary btn-sm" ng-click="show()"><i class="fa fa-plus" aria-hidden="true"></i>Diagnosa</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Diagnosa</th>
                                    <th>Jenis Kerusakan</th>
                                    <!-- <th>Action</th> -->
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
    <div class="modal fade" id="tambahDiagnosa" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 ng-if="kriteria" class="modal-title">Pilih Gejala yang anda temui</h3>
                    <h3 ng-if="!kriteria" class="modal-title">Hasil Diagnosa Kerusakan</h3>
                </div>
                <div class="modal-body">
                    <div ng-if="kriteria">
                        <div class="form-check" ng-repeat="item in gejalas">
                            <input class="form-check-input" type="checkbox" ng-model="item.check" value="" id="gejala{{$index}}">
                            <label class="form-check-label" for="gejala{{$index}}">
                                {{item.kode_gejala}}{{item.gejala}}
                            </label>
                        </div </div>

                    </div>
                    <div ng-if="!kriteria">
                        <div class="alert alert-danger" role="alert">
                            <h3>Hasi diagnosa kerusakan adalah: <strong>{{hasil[0].kerusakan}}</strong> <br>Dengan nilai perhitungan Naïve Bayes sebesar: <strong>{{hasil[0].nilai}}</strong></h3>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" ng-click="hide(kriteria ? 'batal':'kembali')">{{kriteria ? 'Batal':'Kembali'}}</button>
                        <button ng-if="kriteria" type="button" class="btn btn-info btn-sm" ng-click="diagnosa(gejalas)">Diagnosa</button>
                        <button ng-if="!kriteria" type="button" class="btn btn-primary btn-sm" ng-click="save()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>