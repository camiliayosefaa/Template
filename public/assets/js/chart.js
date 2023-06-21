$(document).ready(function() {

	// Bar Chart

	Morris.Bar({
		element: 'bar-charts',
		data: [
			{ y: 'Jan', a: 100, b: 0 },
			{ y: 'Feb', a: 100,  b: 0 },
			{ y: 'Mar', a: 80,  b: 20 },
			{ y: 'Apr', a: 75,  b: 25 },
			{ y: 'May', a: 95,  b: 5 },
			{ y: 'June', a: 80,  b: 20 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Active User (%)', 'Total Absent (%)'],
		lineColors: ['#f43b48','#453a94'],
		lineWidth: '3px',
		barColors: ['#AEE2FF','#453a94'],
		resize: true,
		redraw: true
	});

	// Line Chart

	Morris.Line({
		element: 'line-charts',
		data: [
			{ y: 'Jan', a: 100, b: 0 },
			{ y: 'Feb', a: 100,  b: 0 },
			{ y: 'Mar', a: 80,  b: 20 },
			{ y: 'Apr', a: 75,  b: 25 },
			{ y: 'May', a: 95,  b: 5 },
			{ y: 'June', a: 80,  b: 20 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Active User (%)', 'Total Absent (%)'],
		lineColors: ['#AEE2FF','#453a94'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});

});
