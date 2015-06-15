var angular = require('angular');
angular
	.module('jobApp', [require('angular-material'), require('ng-file-upload')])
	.controller('MainCtrl', ['$rootScope', '$scope', '$mdToast', '$animate', '$http', '$timeout', '$q', '$log', 'Upload',
		function($rootScope, $scope, $mdToast, $animate, $http, $timeout, $q, $log, Upload) {
		'use strict';
		console.log($rootScope);
		// Initialize the scope variables
		$scope.$watch('files', function () {
			$scope.upload($scope.files);
		});
		$scope.upload = function (files) {			
			if (files && files.length) {
				for (var i = 0; i < files.length; i++) {
					var file = files[i];
					Upload.upload({
						url: 'http://sr-recruit.herokuapp.com/resumes',
						fields: {
							'name': $scope.appname,
							'email': $scope.appemail,
							'about': $scope.appabout
						},
						file: file,
						method: 'POST',
						sendFieldsAs: 'form',
						headers: {
							'Access-Control-Allow-Origin': '*',
							'Content-Type': file.type
						},
						withCredentials: true
					}).progress(function (evt) {
						var progressPercentage = parseInt(100 * evt.loaded / evt.total);
						$scope.log = 'progress: ' + progressPercentage + '% ' +
									evt.config.file.name + '\n' + $scope.log;
					}).success(function (data, status, headers, config) {
						$scope.log = 'file ' + config.file.name + 'uploaded. Response: ' + JSON.stringify(data) + '\n' + $scope.log;
						$scope.$apply();
					});
				}
			}
		};
	}]);