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
        $http.jsonp(url).then(function(response){
            $log.info(response.data);
            $log.info(response.data.results[0].artworkUrl30);

            var img = $('<img>').attr('src', response.data.results[0].artworkUrl30);
            $log.log(img);
            $('body').append(img);
            }, function(response){
        });
    };
});

