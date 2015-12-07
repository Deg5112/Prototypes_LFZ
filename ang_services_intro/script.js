var app = angular.module('appleApp', []);
app.controller('getMovies', function($http, $log, $scope){
    var self = this;
    self.query;

    self.message = 'hello';
    self.constructUrl = function(query, self){

        var queryString = 'https://itunes.apple.com/search?term=' +  query    + '&callback=JSON_CALLBACK';

        self.getData(queryString);
    };
    self.getData = function(url){
        console.log(url);

        $http({
            url: url,
            dataType: 'json',
            method: 'POST',
            cache: false
        }).then(function(response){
                $scope.response = (response);
            }, function(response){
                $scope.response = (response);
        });
    };
});
// .controller('logController', function($scope, $log){
//    $scope.$log = $log;
//    $scope.$message = $scope.response;
//});

