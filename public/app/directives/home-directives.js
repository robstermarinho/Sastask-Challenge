angular.module('homeDirectives', [])
.directive('teacherOptions', function(){
	var ddo = {};
	ddo.restrict = 'E';
	ddo.templateUrl = 'app/partials/teacher-options.html';
	return ddo;
})
.directive('studentOptions', function(){
	var ddo = {};
	ddo.restrict = 'E';
	ddo.templateUrl = 'app/partials/student-options.html';
	return ddo;
});


