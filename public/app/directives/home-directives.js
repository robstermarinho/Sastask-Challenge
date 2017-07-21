angular.module('homeDirectives', [])
.directive('teacherOptions', ['userService', function(userService){
	return{
		restrict : 'AE',
		scope : {
			teacherid : '@'
		},
		link: function (scope, element, attr) {
			attr.$observe('teacherid', function(id) {
				userService.teacherQuestions(id).then(function(reponse){
					if(reponse.status == 200){
						scope.teacher_questions = reponse.data;
					}
				});
			});
		},
		templateUrl : 'app/partials/teacher-options.html'
	};
}])
.directive('questionsTeacher', function(){
	return {
		restrict : "E",
		scope : {
			id : '@',
		},
		controller: function($scope, userService) {
			$scope.aaa = "3333333";
			userService.teacherQuestions(id).then(function(reponse){
				if(reponse.status == 200){
					$scope.teacher_questions = reponse.data;
				}
			});
		},
		templateUrl : 'app/partials/questions-teacher.html'
	};
})
.directive('studentOptions', function(){
	return {
		restrict : 'E',
		templateUrl : 'app/partials/student-options.html',
		scope : {
			student_id : '@'
		}
	};
});


