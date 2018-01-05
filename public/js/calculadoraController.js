var app=angular.module("calculadora",[]);
app.controller("calculadoraController",function($scope){
    $scope.productos="";
    $scope.addItem=function(){
        $scope.productos.push($scope.addMe);
    }
});