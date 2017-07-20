var sastask = angular.module('sastask', 
	['ui.bootstrap', // Handle bootstrap functions in AngularJS
	'ngRoute',
    'homeDirectives'])
.config(function($routeProvider, $locationProvider){

    $locationProvider.hashPrefix('!');

    //Home page
    $routeProvider.when('/',{
        templateUrl: 'app/partials/home.html',
        controller: 'HomeController'
    });

    //Event page
    $routeProvider.when('/event/:eventId',{
        templateUrl: 'app/partials/event.html',
        controller: 'EventController'
    });
});