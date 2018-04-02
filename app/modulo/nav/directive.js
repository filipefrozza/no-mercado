angular.module(APP)
	.directive('appNav', function(){
		return {
			restrict: 'AE',
			templateUrl: 'app/modulo/nav/template.html',
			controller: 'nav',
			replace: true
		}
	})
	.directive('scrollAncora', function(){
		return {
			restrict: 'AE',
			link: function(s,e,a){
				$(e).on('click', function (){
        			$('html, body').animate({scrollTop: $(a.href).offset().top}, 'slow');
			        console.log("teste");
			    });
			}
		}
	});
