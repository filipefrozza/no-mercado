angular.module(APP)
	.factory('authenticate', function(){
		var logar = function(user, cookies){
			return;
		};

		var cadastrar = function(user){
			return;
		};

		return {
			logar: logar,
			cadastrar: cadastrar
		};
	});