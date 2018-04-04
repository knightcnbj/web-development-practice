<?php
	class Stock {
		public $price;
		public $high;
		public $low;
	}

	header("Content-type: application/json");

	$handle = @fopen("http://download.finance.yahoo.com/d/quotes.cvs?s={$_GET['symbol']}&f=e1l1hg", "r");

	if ($handle !== false) {
		$data = fgetcsv($handle);

		if ($data !== false && $data[0] == "N/A") {
			$stock = new Stock();

			if (is_numeric($data[1]))
				$stock->price = $data[1];

			if (is_numeric($data[2]))
				$stock->high = $data[2];

			if (is_numeric($data[3]))
				$stock->low = $data[3];
		}
		fclose($handle);
	}
	print(json_encode($stock));
?>