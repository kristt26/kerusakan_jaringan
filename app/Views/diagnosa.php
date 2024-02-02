<?= $this->extend('layout_home') ?>
<?= $this->section('home') ?>
<div ng-app='home' ng-controller="diagnosaController">
    <div ng-if="kriteria">
        <h2 class='series'><a href='dss' style="color:white;">&nbsp;</a></h2>
        <h2>Silahkan centang gejala yang anda temukan!
        </h2>
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="checkbox" ng-repeat="item in datas">
                    <label style="color: black;">
                        <input type="checkbox" value="" ng-model="item.check"> {{item.kode_gejala}}{{item.gejala}}
                    </label>
                </div>
            </div>
            <div class="panel-body text-right">
                <button type="button" class="btn btn-primary" ng-click="diagnosa(datas)">Diagnosa</button>
            </div>
        </div>
    </div>
    <div ng-if="!kriteria">
        <h2 class='series'><a href='dss' style="color:white;">&nbsp;</a></h2>
        <h2>Hasil Diagnosa Kerusakan</h2>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="checkbox" ng-repeat="item in datas">
                        <label style="color: black;">
                            <input type="checkbox" value="" ng-model="item.check"> {{item.gejala}}
                        </label>
                    </div>
                </div>
                <div class="panel-body text-right">
                    <button type="button" class="btn btn-primary">Diagnosa</button>
                </div>
            </div>
    </div>
</div>
<script src="<?= base_url() ?>/libs/angular/angular.min.js"></script>
<script src="<?= base_url() ?>/js/home.js"></script>
<script src="<?= base_url() ?>/js/services/helper.services.js"></script>
<script src="<?= base_url() ?>/js/services/auth.services.js"></script>
<script src="<?= base_url() ?>/js/services/admin.services.js"></script>
<script src="<?= base_url() ?>/js/services/pesan.services.js"></script>
<script src="<?= base_url() ?>/js/controllers/admin.controllers.js"></script>
<script src="<?= base_url() ?>/libs/angular-locale_id-id.js"></script>
<script src="<?= base_url() ?>/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>/libs/loading/dist/loadingoverlay.min.js"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<?= $this->endSection() ?>