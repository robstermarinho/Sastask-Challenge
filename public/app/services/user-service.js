angular.module('sastask').service('userService', ['$http','$q', function ($http, $q) {

	// Get the information for logged user
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

	// Get the teacher questions
	this.teacherQuestions = function(teacher_id){
		return $q(function(resolve, reject){
			$http.get('/api/teachers/' + teacher_id + '/questions')
			.then(function successCallback(response) {
				resolve(response);
			}, function errorCallback(error) {
				reject(error);
			});
		});	
	}
}]);