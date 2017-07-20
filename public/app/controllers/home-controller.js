angular.module('sastask').controller('HomeController', 
	['$scope', 
	'$http', 
	'userService',
	function(
		$scope, 
		$http, 
		userService){

	$scope.title = "Home";
	$scope.events = {};
	$scope.single_event;
	$scope.current_user = {};
	
	
	// Get current user info
	userService.user().then(function(reponse){
		if(reponse.status == 200){
			$scope.current_user = reponse.data;
		}
	});


}]);



