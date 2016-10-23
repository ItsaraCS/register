angular.module('mainApp', ['ngRoute']);

angular.module('mainApp')
.config(function($routeProvider){
	$routeProvider
		.when(
			'/', {
				controller: 'mainController',
				templateUrl: 'assets/partials/partials_page/main.php'
			}
		)
		.when(
			'/addMember', {
				controller: 'addMemberController',
				templateUrl: 'assets/partials/partials_page/add_member.php'
			}
		)
		.when(
			'/editMember', {
				controller: 'editMemberController',
				templateUrl: ''
			}
		)
		.when(
			'/removeMember', {
				controller: 'removeMemberController',
				templateUrl: ''
			}
		)
		.otherwise({
			redirectTo: '/'
		});
})
.controller('mainController', function($scope){
	console.log("Controller of this page: mainController");
})
.controller('addMemberController', function($scope){
	console.log("Controller of this page: addMemberController");
});