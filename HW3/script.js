document.onreadystatechange = function() {

	if(document.readyState == "interactive"){

		var num = 16;                               
		var str = "John Smith";                      
		var arr = ["Saab", "Volvo", "BMW"];           
		var obj = {firstName:"John", lastName:"Smith"};  
		var x;

		alert("type of 1-st var: " + typeof num);
		alert("type of 2-nd var: " + typeof str);
		alert("type of 3-rd var: " + typeof arr);
		alert("type of 4-th var: " + typeof obj);
		alert("type of 5-th var: " + typeof x);


		var a = 30;
		var b = 50;

		alert(a+b);
		alert(a-b);
		alert(a*b);


		var ran = Math.abs(Math.floor(Math.random()*10)); 
		//document.getElementById("test").innerHTML = ran;
		alert("random " + ran);

	};
};

var dog = new (function(){
			this.legs = 4;
			this.furColor = "black";
			this.bark = function() {
				console.log("bau-bau");
			};
			
});

function multiply() {
			var a = 4; 
			var b = 3; 
			
			var c = a*b;
			document.getElementById("test").innerHTML = c;
			
};