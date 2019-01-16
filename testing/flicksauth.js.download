/* ==========================================================================
 * Template: FLKTeam Fullpack Admin Theme
 * ---------------------------------------------------------------------------
 * Author: FLKTeam Auth JS
 * Email: 
 * Date : 30/1/2017
 * ========================================================================== */

/**
 * flicksCtrl Controller
 */

//app.controller('flicksController', function($scope, $http, API_URL) {
//    
//});


app.controller('flicksAuthController', ['$scope', '$http', '$timeout', function ($scope, $http, $timeout) {

    $scope.confirmLogin = function ($event) {
        //$event.preventDefault();
        if ($scope.frmlogin.$invalid) {
            swal('Error', 'Please fill all the required fields', 'error');
            return;
        } else {
            var form = $('#frmlogin');
                form.submit();
//            var urlPath = '/' + urlPrefix + 'login';
//            
//            var encodedString = '';
//            encodedString += 'email=' + encodeURIComponent($scope.login.email);
//            encodedString += '&password=' + encodeURIComponent($scope.login.password);
//            $http({
//                method : 'POST',
//                url : urlPath,
//                data : encodedString,
//                headers : {'Content-Type': 'application/x-www-form-urlencoded'}
//            })
//            .success(function (response) {
//                console.log("Response from server: " + JSON.stringify(response));
//            })
//            .error(function (error) {
//                console.log("An error occured: " + JSON.stringify(error));
//            });
        }
    };

}]);