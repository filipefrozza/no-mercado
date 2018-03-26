APP = 'angular-route-php';
angular.module(APP, ['ngRoute', 'ngCookies', 'oc.lazyLoad']);

angular.module(APP).
	config(function($routeProvider, $locationProvider){
		$locationProvider.hashPrefix('');
		$routeProvider
			.when('/', {
	            templateUrl : 'app/index.html'
	        })
			.when('/tabela', {
				templateUrl: 'app/pagina/tabela/',
				controller: 'tabela',
                resolve: {
                    loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
                        return $ocLazyLoad.load('app/pagina/tabela/controller.js');
                    }]
                }
			})
			.when('/cadastro/:tipo', {
				templateUrl: 'app/pagina/cadastro/',
				controller: 'cadastro',
				resolve: {
                    loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
                        return $ocLazyLoad.load('app/pagina/cadastro/controller.js');
                    }]
				}
			})
			.otherwise({redirectTo: '/'});
		$locationProvider.html5Mode({
		  enabled: true,
		  requireBase: false
		});
	}).
	controller('main', function($scope, $ocLazyLoad){

	});