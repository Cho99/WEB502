
app.controller('MainCtrls',function($rootScope, $scope){
    $scope.openDialog = function() {

        $mdDialog.show({
            // clickOutsideToClose: true,
            // scope: $scope,        // use parent scope in template
            // preserveScope: true,  // do not forget this if use parent scope
            templateUrl: "views/form/formtest.html"
        });
    };
});