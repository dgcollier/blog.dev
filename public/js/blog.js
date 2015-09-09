(function() {
    "use strict";

    // This should be the actual name of your module
    var app = angular.module("blog", []);

    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", token);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller("ManagePostsController", ["$http", "$log", "$scope", function($http, $log, $scope) {
        $scope.posts = [];

        $http.get('/posts/list').then(function(response) {
            $log.info("Request complete.");
            $log.info(response);
            $scope.posts = response.data;

        }, function(response) {
            $log.error("Request failed.");

            $log.debug(response);
        });

        $scope.deletePost = function(index) {
            console.log(index);
            $scope.posts.splice(index, 1);
            $http.delete('/posts/' + index).then(function(response) {
                $log.info("Post deleted.");
                $log.info(response);
                $scope.posts = response.data;
            });
        };

        $scope.formatDate = function(date){
            var dateOut = new Date(date);
            return dateOut;
        }; 
    }]);
})();