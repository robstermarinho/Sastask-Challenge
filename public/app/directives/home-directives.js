angular.module('homeDirectives', [])
.directive('teacherOptions', ['userService', function(userService){
	return{
		restrict : 'AE',
		scope : {
			teacherquestions : '='
		},
		controller: 'TeacherOptionsController',
    	controllerAs: 'ctrl',
		templateUrl : 'app/partials/teacher-options.html'
	};
}])

.directive('questionsTeacher', function(){
	return {
		restrict : "E",
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


