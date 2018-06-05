window.$ = window.jQquery = require('jquery');

const axios = require("axios");
const datetimepicker = require("jquery-datetimepicker");

// window.jQuery.datetimepicker.setLocale('en');

$.datetimepicker.setLocale('pt-BR');

$('#datepicker').datetimepicker({
	timepicker:false,
 	format:'d/m/Y',
 	disabledDates: [],
 	disabledWeekDays: [],
 	onSelectDate: (ct, t) => {
 		axios.post('/call/api/availableSchedules', {
 			_token: $('head > meta:nth-child(4)').prop('content'),
 			date: t.val()
 		})
 		.then((response) => {
 			console.log(datetimepicker);
 		})
 		.catch((error) => {
 			console.log('Erro ao obter horarios disponiveis. (error: ', error);
 		});
 	} 
});

$('#timepicker').datetimepicker({
    format: 'H:i',
    lang:'pt-BR',
    step: 30,
    minDate: 0,
    datepicker: false,
    allowBlank: true,
    // allowTimes: data
});