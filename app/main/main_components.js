/**
 * Created by lossless on 11/29/16.
 */
var app = angular.module("myMain");
app.component("main", {
  templateUrl: "app/pages/main.php",
  controller: "MainCtrl"
});
app.component("cafe", {
  templateUrl: "app/pages/cafe.php",
  controller: "MainCtrl"
});
app.component("banya", {
  templateUrl: "app/pages/banya.php",
  controller: "MainCtrl"
});
app.component("map", {
  templateUrl: "app/pages/map.php",
  controller: "MainCtrl"
});
app.component("contacts", {
  templateUrl: "app/pages/contacts.php",
  controller: "ConctactsCtrl"
});
app.controller("MainCtrl", function () {

});
app.controller("ConctactsCtrl", function ($scope, $http) {
  $scope.clickedd = function () {
    var userMsg = {
      email: $scope.user_email,
      subject: $scope.user_subject,
      message: $scope.user_contain
    };
    $http({
      url: "app/php/sendmail.php",
      method: "POST",
      data: userMsg
    }).then(function (response) {
      console.log(response);
      $scope.noticeSendRequest = response.data;
    }, function (error) {
      console.log(error);
      $scope.noticeSendRequest = "Ошибка!";
    });
  };
});