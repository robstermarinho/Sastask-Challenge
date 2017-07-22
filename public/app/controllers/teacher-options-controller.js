angular.module('sastask').controller('TeacherOptionsController', 
	['$scope', '$http', 'userService', '$uibModal', function($scope, $http, userService, $uibModal){

		var ctrl = this;
		var editQuestionModal = null;
		$scope.editQuestion = function(question){

			editQuestionModal = $uibModal.open({
				animation: true,
				ariaLabelledBy: 'modal-title',
				ariaDescribedBy: 'modal-body',
				templateUrl: 'editQuestion.html',
				controller: 'editQuestionController',
				size: 'lg',
				resolve: {
					question: function () {
						return question;
					}
				}
			}).result.catch(function(res) {
				  if (!(res === 'cancel' || res === 'escape key press')) {
				    throw res;
				  }
			});		
		};
		$scope.deleteQuestion = function(){
			alert("edit");
		};

		$scope.newQuestion = function(){
			alert("edit");
		};
	}])
.controller('editQuestionController', ['$scope', '$http', 'userService', '$uibModal','question',  function($scope, $http, userService, $uibModal, question){
	$scope.title = "Editar Questão";
	$scope.name = "edit-question";
}]);



