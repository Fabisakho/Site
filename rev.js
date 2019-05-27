var app = angular.module('myApp', new Array());
				app.controller('exp', function($scope) 
				{
				  $scope.personnes = new Array();
				  $scope.personnesFiltres= new Array();
				  $scope.printWarning=false;
				  $scope.filtreParNom= true;
				  $scope.ajouter = function(nom,prenom, age, sexe, role) 
				  {
				  if (role != null && sexe!= null && age!= null && nom!= null && prenom!= null){
					$scope.personnes.push ({'nom': nom, 'prenom':prenom, 'age':age, 'sexe':sexe, 'role':role});
					$scope.printWarning=false;
					}else{
					$scope.printWarning=true;}
				  };

				  $scope.filtreLAge=function(filtreAge){
					$scope.personnesFiltres= []
					for(i=0;i <$scope.personnes.length;i++){
						if($scope.personnes[i].age==filtreAge){
							$scope.personnesFiltres.push($scope.personnes[i]);
						}
					}
				  };
				  $scope.filtreLeSexe=function(filtreSexe){
					$scope.personnesFiltres= []
					for(i=0;i <$scope.personnes.length;i++){
						if ($scope.personnes[i].sexe==filtreSexe){
							$scope.personnesFiltres.push($scope.personnes[i]);
						}
					}
						
				  };
				});