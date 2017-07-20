angular.module('homeDirectives', [])
.directive('teacherOptions', function(){
	return{
		restrict : 'AE',
		scope : {
			teacherid : '@'
		},
		templateUrl : 'app/partials/teacher-options.html',

	};
})
.directive('questionsTeacher', function(){
	return {
		restrict : "E",
		scope : {
			teacherid : '@',
		},
		controller: function($scope, userService) {
			$scope.aaa = "3333333";
			userService.teacherQuestions(teacherid).then(function(reponse){
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


