function empezar() 
{

		var empezar	 = new XMLHttpRequest();
			empezar.onreadystatechange = function(){
				if (empezar.readyState == 4 && empezar.status == 200) {
					document.getElementById('preguntas').innerHTML = empezar.responseText;
					document.getElementById('botonera').style.display = "none";
				}
			}
			empezar.open("GET", 'zung/items.html', true);
			empezar.send();
}