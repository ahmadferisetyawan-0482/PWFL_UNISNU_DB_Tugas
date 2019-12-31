<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Chart using codeigniter and morris.js</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/morris.js/morris.css">
</head>

<body>
	<h2>Chart using Codeigniter and Morris.js</h2>

	<div id="graph"></div>

	<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
	<script src="<?= base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
	<script>
		Morris.Bar({
			element: 'graph',
			data: <?= $data; ?>,
			xkey: 'year',
			ykeys: ['purchase', 'sale', 'profit'],
			labels: ['Purchase', 'Sale', 'Profit']
		});
	</script>
</body>

</html>
