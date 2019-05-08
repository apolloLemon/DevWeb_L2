var div = document.querySelector("div");
var N = document.getElementById("t");

function C(n,k) {
	if(k==0 || k==n) return 1;
	return C(n-1,k-1)+C(n-1,k);
}

function makeTable() {
	div.innerHTML = "";
	n = N.value;
	var table = document.createElement("table");
	for(i=0;i<=n;i++){
		var line = document.createElement("tr");
		for(j=0;j<=i;j++){
			var cell = document.createElement("td");
			cell.innerHTML = C(i,j);
			cell.setAttribute('title',"C("+i+","+j+")");
			line.appendChild(cell);
		}
		table.appendChild(line);
	}
	div.appendChild(table);
}

window.onload = makeTable;
N.oninput = makeTable;