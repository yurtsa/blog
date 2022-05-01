<?php
	function getCats() : array{
		$sql="SELECT id_cat, title FROM cats ORDER BY 'ASC'";
		$cats=dbQuery($sql);
		return $cats->fetchAll();
	}
?>