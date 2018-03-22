angular.module(APP)
	.controller("header", function($scope, $ocLazyLoad){
		$ocLazyLoad.load('assets/js/grayscale.min.js');
	});