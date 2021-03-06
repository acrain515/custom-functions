DS3 Finds Monthly Avg Write
<?php 

  date_default_timezone_set('America/New_York');

  require_once('../../connection.php');
	require_once('../../functions.php');
	
	$today= strtotime(date("Y-m-15 H:i:s"));
	$firstStr= strtotime("-3 months",$today);
  $first= date("Y-m-01 00:00:00",$firstStr);
	$lastStr= strtotime(date("Y-m-d", strtotime("-2 months", $today)));
	$last= date("Y-m-01 00:00:00",$lastStr);

	
	echo 'Start First: ' . $first . '</br>';
	echo 'Start Last: ' . $last . '</br>';
	
	$filename = 'ds3-finds-monthly-avg-source.php';

  $myfile = fopen($filename, "w") or die("Unable to open file!");
  //fwrite($myfile, "<?php \n\n");
	//fwrite($myfile, "  $");
	//fwrite($myfile, "datas= array(");
	
	for($x=0;$x<4;$x++) {
	
	  $month= date("M",$firstStr);

    echo 'Month: ' . $month . '</br>';	

	  $result= $mysqli->query("Select count(*) as THE_COUNT from Simple 
	  where RATE_CODE='DS3'
		and SAVINGS>'0'
	  and DS3_ORDER>'$first' and DS3_ORDER<'$last'");
	  $row= $result->fetch_assoc();
	
	  $count= $row['THE_COUNT'];
    echo 'Current Count: ' . $count . '</br>';
		
	  $result= $mysqli->query("Select sum(SAVINGS) as SAVINGS from Simple 
	  where RATE_CODE='DS3'
		and SAVINGS>'0'
	  and DS3_ORDER>'$first' and DS3_ORDER<'$last'");
	  $row= $result->fetch_assoc();
	
	  $savings= round($row['SAVINGS']);

    if($count==0) { $average= 0; }	
    else {	$average= round($savings/$count); }
		
		fwrite($myfile,"['");
		fwrite($myfile,$month);
		fwrite($myfile,"',");
		fwrite($myfile,$average);
		fwrite($myfile,",");
		fwrite($myfile,$average);
		fwrite($myfile,",");
		
		//COLORS THE LAST BAR ORANGE
		if($x==3) { fwrite($myfile,"'color: #FB670F',"); }
		else { fwrite($myfile,"'color: #40C9FB',"); }
		
		fwrite($myfile,"750");
		
		if($x==3) { fwrite($myfile,"]");}
		else { fwrite($myfile,"],"); }
	
	  
	  $firstStr= strtotime("+1 month", $firstStr);
		$first= date("Y-m-01 00:00:00",$firstStr);
		$lastStr= strtotime("+1 month",$lastStr);
		$last= date("Y-m-01 00:00:00",$lastStr);
	
	  echo 'First: ' . $first . '</br>';
		echo 'Last: ' . $last . '</br>';
	

	  echo '</br>';
	}
		
	//fwrite($myfile,");");
	
	fclose($myfile); 
	
	nextUrl("axcent-a-write.php");
	
?>