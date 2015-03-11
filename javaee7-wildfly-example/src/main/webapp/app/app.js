angular.module("javaeeExample", []);
angular.module("javaeeExample").controller('mainController', function ($http, $scope) {
    $scope.workshopParticipants = [];

    $http.get('ws/example').success(function (workshopParticipants) {
        $scope.workshopParticipants = $scope.workshopParticipants.concat(workshopParticipants);
    });

    function loadStatic(n) {
        $http.get('workshopParticipants/participant-' + n + '.json').success(function (participant) {
            $scope.workshopParticipants.push(participant);
            loadStatic(n + 1);
        });
    }

    loadStatic(0);
});