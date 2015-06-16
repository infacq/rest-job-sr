var angular = require('angular');
angular
	.module('jobApp', [require('angular-material')])
	.controller('MainCtrl', ['$rootScope', '$scope', '$mdToast', '$animate', '$http', '$timeout', '$q', '$log',
		function($rootScope, $scope, $mdToast, $animate, $http, $timeout, $q, $log) {
		'use strict';		
		// Initialize the scope variables
		$scope.$watch('file', function () {
			console.log($scope.file);
		});
	}]);