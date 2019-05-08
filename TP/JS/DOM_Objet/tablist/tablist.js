//Page Areas
var doc = window.document;
var tab = doc.querySelector("#myTab");
var lst = doc.querySelector("#myList");
//Buttons
var sub = doc.querySelector("#generateTable");
//var rst = doc.querySelector("");
//Fields
var col = doc.querySelector("#cols");
var row = doc.querySelector("#rows"); 



function CheckCols (col) {
	if (col<=0 || col>5) {
		alert("Col in [1..5]");
		return 0;
	}
	return 1;
}

function generateRandomSortedArray (n,max){
	var out = [];
	for(var i=0;i<n;i++){
		out[i]=Math.floor((Math.random()*max+1));
	}
	return out.sort((a,b)=>a-b);
}

function OUTPUT (col, row) {
	var table = doc.createElement("table");
	var list = doc.createElement("ul");
	var arr = generateRandomSortedArray(col*row, 100);
	
	for(var i=0; i<row; i++) {
		r = table.insertRow(i);
		var rowTotal = 0;
		for(var j=0; j<col; j++) {
			c = r.insertCell(j);
			var tmp = arr.shift();
			c.innerHTML = tmp;
			rowTotal+=tmp;
		}
		var line = doc.createElement("li");
		line.innerHTML = rowTotal;
		list.appendChild(line);
	}
	tab.appendChild(table);
	lst.appendChild(list);
}

sub.addEventListener('click', () => {
	colv = col.value;
	rowv = row.value;

	if(CheckCols(colv)){
		OUTPUT(colv,rowv);
	}
});