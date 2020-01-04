	function hitungPesan(){
											var nota = document.pemesanan;
											var jumlahBakso = 12000 * parseInt(nota.hargaBakso.value);
											var jumlahSoto = 10000 * parseInt(nota.hargaSoto.value);
											var jumlahMie = 15000 * parseInt(nota.hargaMie.value);
											var jumlahDegan = 5000 * parseInt(nota.hargaDegan.value);
											var jumlahCampur = 7000 * parseInt(nota.hargaCampur.value);
											var jumlahTotal = jumlahBakso + jumlahSoto + jumlahMie + jumlahDegan + jumlahCampur;
												if (jumlahTotal > 50000)
													{
														nota.Total.value = jumlahTotal;
														nota.Diskon.value = 10000;
														nota.Bayar.value = jumlahTotal - 10000; 
													}
												else
													{
														nota.Total.value = jumlahTotal;
														nota.Diskon.value = 0;
														nota.Bayar.value = jumlahTotal;
													}
											}
	function resetForm()
		{ 
			document.pemesanan.reset();
			}