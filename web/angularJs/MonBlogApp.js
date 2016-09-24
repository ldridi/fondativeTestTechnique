/**
 * config the app with "MonBlogApp"
 * change configuration of angularJs to seperate code between Twig format
 */
var app = angular.module('MonBlogApp',[])
    .config(function($interpolateProvider){

        $interpolateProvider.startSymbol('#').endSymbol('#');

    });