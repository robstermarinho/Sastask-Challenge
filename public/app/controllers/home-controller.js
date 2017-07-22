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
			$scope.teacherid = reponse.data._id;

			// Is is a teacher get the questions
			if(reponse.data.role == "true"){
				userService.teacherQuestions($scope.teacherid).then(function(reponse){
					if(reponse.status == 200){
						$scope.teacher_questions = reponse.data;
					}
				});
			}
		}
	});

	// Get teacher questions
}]);



