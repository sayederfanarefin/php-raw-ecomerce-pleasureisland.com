/* =*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*

	#Code{LAB} | Coming Soon Template HTML5 BY afrussel
	@Author		   afrussel
	@Type          Javascript

	TABLE OF CONTENTS
	---------------------------
	
		01. Countdown

=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=* */
/* ================================= */
/* ::::::::: 1. Countdown :::::::::: */
/* ================================= */
$('#countdown_dashboard').countDown({
		targetDate: {
			'day': 		10,
			'month': 	5,
			'year': 	2015,
			'hour': 	00,
			'min': 		01,
			'sec': 		0
		},
		omitWeeks: true
});