
var app = angular.module('myModule', [])
					.controller('myController', function($scope, $http){
						$http.get('users-listing').then(function(response){
							$scope.res = response.data;
						})
					});

jQuery(document).ready(function() {
  angular.bootstrap(document.getElementById('book-list'), [
    'myModule'
  ]);
});