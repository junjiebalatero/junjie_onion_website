<!DOCTYPE html>
<html ng-app="kodApp">
    <head>
    <meta charset="utf-8">
    <title>Kod</title>   
      <center><h2>Kod Search:&emsp;<input ng-model="query" type="text"/></h2></center><br>
        <script src="lib/jquery-1.10.2.min.js"></script>
        <script src="lib/angular.min.js"></script>          
         <script>
        var kodApp = angular.module('kodApp', []);
        kodApp.controller('kodCtrl', ['$scope', '$http', function(scope, http) {
            http.get('kods.json').success(function (data) {
                scope.kods = data;
            });                      
        }]);
        </script>        
   </head>   
<link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   <body ng-controller="kodCtrl">
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
                  <tr ng-repeat="kod in kods | filter:query">
                     <th>{{ kod.no }}</th> 
                     <th>{{ kod.song }}</th>    
                     <th>{{ kod.artist }}</th>                   
                     <th>{{ kod.description }}</th>  
                  </tr>
            </table>         
    </body>
</html>
