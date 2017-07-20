angular.module('sastask').service('userService', ['$http','$q', function ($http, $q) {

	this.user = function(){
		return $q(function(resolve, reject){
			$http.get('/current_user')
			.then(function successCallback(response) {
				resolve(response);
			}, function errorCallback(error) {
				reject(error);
			});
		});	
	}
}]);