<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<head>
<?php 

  require_once('../connection.php'); 
	include('../cookie.php');
  date_default_timezone_set('America/New_York');
	
?>

  <style>
    body { 
		  margin:0;padding:0;background-image:url('../images/grad2.jpg');background-repeat:no-repeat;
		  font-family:Arial;color:#222;font-size:12px;
		}
    a { text-decoration: none;color: #333; }
    #header { width:100%;height:40px;margin:0;padding:0;background:#fff;color#777;box-shadow:0 1px 4px rgba(0, 0, 0, 0.5); }
    #navbar { width:980px;margin:0 auto;padding:5px;background:#fff; }
    #logo { float:left; }
    #logo td { border: 0;padding:0;text-align:left;width:100px; }
    #menu { float:right; }
    #menu td { padding: 6px 16px; }
    #menu a { color: #222; text-decoration: none;font-size: 16px; }
    #menu a:hover { color: #ff0073; }
    #navbar table { border-collapse:collapse; }
    #main { width:1000px;background:#fff;margin:40px auto;padding:20px 20px 40px 20px;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.5), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    min-height:600px; }
		
		h2 { font-size:26px; }
		
	</style>
	
	
</head>
<body>
<body>
  <div id="header">
    <div id="navbar">
      <div id="logo">
        <table>
          <tr><td><a href="index.php"><img src="../images/ulogo.png" height="28" border="0"></a></td></tr>
        </table>
      </div>
      
    </div>
  </div>
<div id="main">
<h2> Import Circuits </h2>


</br>
<div id="form">
<form enctype="multipart/form-data" action="import-ent-insert.php" method="post">
<input size="50" type="file" name="filename"></br></br>
<input type="submit" name="submit" value="UPLOAD">
</form>

</br></br>
Notes: </br></br>
First field must be LEC_CKT</br>
Second field must be BAN </br>
If ENT_SMB_FLAG field is not submitted or blank, ENT will be assumed </br>
If RESEARCH_STATUS field is not submitted, PENDING REVIEW will be assumed </br> 
Dbb field INTERNAL_CKT can be labeled as INTERNAL_CKT or EXCHANGE_CARRIER_CIRCUIT_ID </br>
Dbb field RATE_CODE can be labeled as RATE_CODE or BANDWIDTH </br>
Dbb field INV_CKT_STATUS can be labeled as INV_CKT_STATUS or CKT_STATUS_DESC  </br>
Dbb field CLLI can be labeled as CLLI or Z_CLLI </br>
Dbb field BILL_ACCT can be labeled as BILL_ACCT or SUB_ID </br>
Dbb field MRC can be labeled as MRC or AMOUNT_PAID </br>
Dbb field VENDOR can be labeled as VENDOR or VENDOR_GRP </br>
Dbb field BILL_SYS can be labeled as BILL_SYS or BILLING_SYS </br>
Dbb field VENDOR_CFA can be labeled as VENDOR_CFA or CFA </br>
Dbb field RESEARCH_STATUS can be labeled as RESEARCH_STATUS or OVERVIEW_STATUS </br>


</div>
</div>
</body>
</html>
