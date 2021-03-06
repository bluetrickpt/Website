(function () {
    var mod = angular.module('components');

    mod.controller('membersController', ['$scope', '$resource', function ($scope, $resource) {
        // Should retrieve this form the API
        $resource('/api/v1/users').query(
            function(data) {
                $scope.members = data;
            }, function(error) {
                alert("Error: " + error.statusText + " (" + error.status + ")");
            }
        );
    }]);
})();
