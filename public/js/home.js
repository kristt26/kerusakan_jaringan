angular.module('home', [
    'helper.service',
    'admin.service',
    'auth.service',
    'message.service',
    'ngLocale',
])
    .controller('diagnosaController', diagnosaController)
    .factory('diagnosaService', diagnosaService);

function diagnosaController($scope, diagnosaService, pesan) {
    $scope.kriteria = true;
    $.LoadingOverlay('show');
    diagnosaService.get().then(res=>{
        $scope.datas = res
        $scope.gejalas = angular.copy($scope.datas);
        $.LoadingOverlay('hide');
    })
    $scope.diagnosa = (param)=>{
        $.LoadingOverlay('show');
        diagnosaService.diagnosa(param.filter(x=>x.check)).then(res=>{
            $scope.hasil = res.sort(function(a, b) {
                return b.nilai - a.nilai;
            });
            console.log($scope.hasil);
            $scope.kriteria = false;
            $.LoadingOverlay('hide');
        })
    }
    $scope.ulang = ()=>{
        $scope.gejalas = angular.copy($scope.datas);
        $scope.hasil = [];
        $scope.kriteria = true;
    }
}

function diagnosaService($http, $q, helperServices, AuthService, pesan) {
    var controller = helperServices.url + 'diagnosa/';
    var service = {};
    service.data = [];
    return {
        get: get,
        diagnosa: diagnosa
    };

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: helperServices.url + 'gejala/' + 'read',
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                service.data = res.data;
                def.resolve(res.data);
            },
            (err) => {
                pesan.error(err.data.message);
                def.reject(err);
            }
        );
        return def.promise;
    }

    function diagnosa(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + 'post',
            data: param,
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                def.resolve(res.data);
            },
            (err) => {
                $.LoadingOverlay('hide');
                pesan.error(err.data.messages.error);
                def.reject(err);
            }
        );
        return def.promise;
    }
}