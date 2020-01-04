$(document).ready(function() {
	/*
		Australia: Sunday
		Canada: Sunday
		India: Sunday
		Ireland: Monday
		New Zealand: Sunday
		South Africa: Sunday
		United Kingdom: Monday
		United States: Sunday
*/
	$('#d-am').simplePicker({
		style: 'white',
		firstday: 0,
		days: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
		months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
		delimiter: '-',
		dateformat: function() {
			return 'dd' + this.delimiter + 'mm' + this.delimiter + 'yyyy'
		}
	})
	$('#d-hun').simplePicker({
		style: 'white',
		firstday: 0,
		days: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
		months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
		delimiter: '-',
		dateformat: function() {
			return 'dd' + this.delimiter + 'mm' + this.delimiter + 'yyyy'
		}
	})
	areaSetSyntax($('[name="htmlCode"]'),"application/x-httpd-php");
	$('.datePickerHolder-white').css('z-index',99);
	$('.datePickerHolder-white').css('z-index',99);
});

function areaSetSyntax(argument,mode) {
    var editor = CodeMirror.fromTextArea(argument[0], {
        mode: mode,
        tabMode: "indent",
        readOnly: true
    });
    editor.setOption("theme", "monokai");
    argument.next('div').css({
        'font-size': '16px',
        'text-align': 'left',
        'height': '500px'
    });

}
