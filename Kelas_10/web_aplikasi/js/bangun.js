		function tabung()
			{
				var phi = parseFloat(document.bangun.nil1.value);
				var r = parseFloat(document.bangun.nil2.value);
				var t = parseFloat(document.bangun.nil3.value);
				var hasil =  phi * r  * r * t;
				document.bangun.hasil.value= hasil;
			}
			
		function piramida()
			{
				var p = parseFloat(document.bangun.nilai1.value);
				var l = parseFloat(document.bangun.nilai2.value);
				var t = parseFloat(document.bangun.nilai3.value);
				var Hasil = (p * l * t )/3;
				document.bangun.Hasil.value= Hasil;
			}
			
		function balok()
			{
				var p = parseFloat(document.bangun.nila1.value);
				var  l = parseFloat(document.bangun.nila2.value);
				var t = parseFloat(document.bangun.nila3.value);
				var sama = p * l * t;
				document.bangun.sama.value= sama;
			}
			
			function resetForm()
			{ 
				document.bangun.reset();
				}