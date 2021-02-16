<!DOCTYPE html>
<html>
<body>

<h2>My First JavaScript</h2>

<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>


<template>
	<div class="user">
		<hi>{{ user.name }}</hi>		
	</div>
</template>

<style scoped>
	h1 {
		font-size: 2rem;
	}
	
</style>

<script>
	export default {
		name: "User",
		data() {
			return {
				user: { name: 'noobman' }
			}
		}
	}
</script>

<h2>JavaScript Statements</h2>

<p>Multiple statements on one line is allowed.</p>

<p id="demo1"></p>

<script>
var a, b, c;
a = 5; b = 6; c = a + b;
document.getElementById("demo1").innerHTML = c;
</script>

<h2>JavaScript Strings</h2>

<p>Strings are written inside quotes. You can use single or double quotes:</p>

<p id="demo2"></p>

<script>
var carName1 = "Volvo XC60";  // Double quotes
var carName2 = 'Volvo XC60';  // Single quotes

document.getElementById("demo2").innerHTML =
carName1 + " " + carName2; 
</script>

<h2>Create JSON string from a JavaScript object.</h2>

<p id="demo3"></p>

<script>
var obj = { "name":"John", "age":30, "city":"New York"};
var myJSON = JSON.stringify(obj);
document.getElementById("demo3").innerHTML = myJSON;
</script>

<h2>JavaScript Class</h2>

<p>In this example we demonstrate a simple class definition and how to use it.</p>

<p id="demo4"></p>

<script>
class Car {
  constructor(brand) {
    this.carname = brand;
  }
}

mycar = new Car("Ford");
junjiecar = new Car("Mitsubhisi");

document.getElementById("demo4").innerHTML = mycar.carname;
document.getElementById("demo4").innerHTML = junjiecar.carname;
</script>

<p>Click the button to create a FORM and an INPUT element.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  var x = document.createElement("FORM");
  x.setAttribute("id", "myForm");
  document.body.appendChild(x);

  var y = document.createElement("INPUT");
  y.setAttribute("type", "text");
  y.setAttribute("value", "Donald");
  document.getElementById("myForm").appendChild(y);
}
</script>

</body>
</html> 

