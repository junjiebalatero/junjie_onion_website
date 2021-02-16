<!DOCTYPE html>
<html ng-app="megaVisionApp">
    <head>
    <meta charset="utf-8">
    <title>Mega Vision</title>   
      <center><h3>Megavision Search:&emsp;<input ng-model="query" type="text"/></h3></center><br>
        <script src="lib/jquery-1.10.2.min.js"></script>
        <script src="lib/angular.min.js"></script>          
         <script>
        var megaVisionApp = angular.module('megaVisionApp', []);
        megaVisionApp.controller('megaVisionCtrl', ['$scope', '$http', function(scope, http) {
            http.get('megaVisions.json').success(function (data) {
                scope.megaVisions = data;
            });                      
        }]);
        </script>        
   </head>   
<link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   <body ng-controller="megaVisionCtrl">
   <style>
        table, th, td {
            border: 1px solid black;
        }
   </style>   
         <table class="table table-striped" style="width:100%">  
                  <tr>
                    <th>Song No.</th>  
                     <th>Song</th>    
                     <th>Artist</th>                    
                     <th>Description</th>                                           
                  </tr>
                  <tr ng-repeat="megaVision in megaVisions | filter:query">
                     <th>{{ megaVision.no }}</th> 
                     <th>{{ megaVision.song }}</th>    
                     <th>{{ megaVision.artist }}</th>                   
                     <th>{{ megaVision.description }}</th>  
                  </tr>
            </table>         
    </body>
</html>
