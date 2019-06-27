function yaTengo() 
{

		var yaTengo	 = new XMLHttpRequest();
			yaTengo.onreadystatechange = function(){
				if (yaTengo.readyState == 4 && yaTengo.status == 200) {
					document.getElementById('formulario').innerHTML = yaTengo.responseText;
					
				}
			}
			yaTengo.open("GET", 'html/yaTengo.html', true);
			yaTengo.send();
}