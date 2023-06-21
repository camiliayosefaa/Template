$(document).ready(function() {

	// Bar Chart

	Morris.Bar({
		element: 'bar-charts',
		data: [
			{ y: 'Jan', a: 80, b: 10, c:10 },
			{ y: 'Feb', a: 100,  b: 0, c:0 },
			{ y: 'Mar', a: 80,  b: 20, c:10 },
			{ y: 'Apr', a: 75,  b: 15, c:10 },
			{ y: 'May', a: 95,  b: 5, c:0 },
			{ y: 'June', a: 80,  b: 2, c:18 }
		],
		xkey: 'y',
		ykeys: ['a', 'b', 'c'],
		labels: ['Active User (%)', 'Total Absent (%)', 'Test Aja'],
		lineColors: ['#A1C2F1','#5A96E3', '#0A6EBD'],
		lineWidth: '3px',
		barColors: ['#A1C2F1','#5A96E3', '#0A6EBD'],
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
