document.getElementById("myBtn").addEventListener("click", addNumber);

function addNumber() {
	let ctn = parseInt(document.getElementById("myNum").innerHTML);
	document.getElementById("myNum").innerHTML = ctn + 1;
}
