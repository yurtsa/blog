<?php	
    function saveLog() : bool {
		$day=date("Y-m-d");
		$fileLog=$day.".txt";
		$time=date("H:i:s");
		$someContent=$time."|".$_SERVER['REMOTE_ADDR']."|".$_SERVER['PHP_SELF']."|".$_SERVER['QUERY_STRING']."|".$_SERVER['HTTP_USER_AGENT']."\n";
		$file=fopen("logs/$fileLog", "a");
		fwrite($file, $someContent);
		fclose($file);
		return true;
	}

	function readAllLog() {
		foreach (glob("logs/*.txt") as $filename) {
			echo "<a href='?date=$filename'>$filename</a> размер " . filesize($filename) . "<br>\n";
		}
	}

	function readLog($fileGet){
		$file=fopen($fileGet, "r");
		while (($buffer = fgets($file, 4096)) !== false) {
			if(strpos($buffer, "%"))
			echo "<hr><b>$buffer</b><hr>";
			else
			echo "$buffer<hr>";
		}
		fclose($file);
    }