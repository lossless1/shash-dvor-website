/**
 * Created by lossless on 11/29/16.
 */
angular.module("myMain").config(function ($locationProvider, $routeProvider) {
    $routeProvider.when("/main", {
        template: "<main></main>"
    }).when("/contacts", {
        template: "<contacts></contacts>"
    }).when("/map", {
        template: "<map></map>"
    }).when("/cafe", {
        template: "<cafe></cafe>"
    }).when("/banya",{
        template: "<banya></banya>"
    }).otherwise("/main");
    //$locationProvider.html5Mode(true);
});