var n = document.getElementById("n");
var a = document.getElementById("a");
var b = document.getElementById("b");
var res = document.getElementById("resultat");
var cal = document.querySelectorAll("input")[3];

function C(n,k){
	var all = document.querySelectorAll("abbr");
	var find = "C("+n+","+k+")";
	for(i=0;i<all.length;i++){
		if(all[i].getAttribute("title")==find){
			return all[i].innerHTML;
		}
	}
}

function f(n,a,b) {
	var out=0;
	for(k=0;k<=n;k++){
		out += C(n,k)*Math.pow(a,n-k)*Math.pow(b,k);
	}
	return out;
}

function updateRes () {
	res.value = f(n.value,a.value,b.value);
	var lis = li(n.value,a.value,b.value);
	ul.childNodes[1].innerHTML = lis[0];
	ul.childNodes[3].innerHTML = lis[1];
	ul.childNodes[5].innerHTML = lis[2];
}


//Question 6
var ul = document.querySelector("ul");
function li(n,a,b){
	var out = ["","",""];
	for(k=0;k<=n;k++){
		out[0] +="C("+n+","+k+")."+a+"<sup>"+(n-k)+"</sup>."+b+"<sup>"+(k)+"</sup>";
		out[1] += C(n,k)+"."+a+"<sup>"+(n-k)+"</sup>."+b+"<sup>"+(k)+"</sup>";
		out[2] += C(n,k)*Math.pow(a,n-k)*Math.pow(b,k);
		if(k!=n) {
			out[0]+="+";
			out[1]+="+";
			out[2]+="+";
		}
	}
	return out;
}


//Question 7
var radios = document.getElementsByName("sierpinski");
function radio () {
	for(i=0;i<radios.length;i++){
		if(radios[i].checked) return radios[i].value;
	}
}
function color () {
	var option = radio();
	var all = document.querySelectorAll("abbr");
	for(i=0;i<all.length;i++){
		if(all[i].innerHTML%2!=0){
			if(option=="o"){
				all[i].classList.add("impaire");
			} else {
				all[i].classList.remove("impaire");
			}
		}
	}
}

//Question 8
var span = document.querySelector("span");
span.innerHTML = "<a href='https://fr.wikipedia.org/wiki/Triangle_de_Sierpi%C5%84ski' target='_blank'>Triangle de Sierpiński</a>"



//MAIN
cal.onclick = window.onload = updateRes;
radios[0].onchange = radios[1].onchange = color;