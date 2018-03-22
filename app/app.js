APP = 'angular-route-php';
angular.module(APP, ['ngRoute', 'ngCookies']);

angular.module(APP).
	config(function($routeProvider, $locationProvider){
		$locationProvider.hashPrefix('');
		$routeProvider
			.when('/', {
	            templateUrl : 'app/index.html'
	        })
			.when('/tabela', {
				templateUrl: 'app/pagina/tabela/',
				controller: 'tabela'
			})
			.otherwise({redirectTo: '/'});
		$locationProvider.html5Mode({
		  enabled: true,
		  requireBase: false
		});
	}).
	controller('main', function($scope){
		
	});