<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WebMed</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ="
      crossorigin="anonymous"
    />

    <!--bootstrap-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="shortcut icon" href="images/favicon.png" />

    <!--font awesome-->
    <script
      src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
      data-auto-replace-svg="nest"
    ></script>
  </head>
  <body>
  <div class="top-container" id="top-container">
      <h2 class="hotline" id="makecall">Hotline: +8801xxxxxxxxx</h2>
    </div>
  <?php
    #echo "ok";
    function fun()
    {
      $conn = new mysqli("localhost","root", "", "medicine");
      // Check connection
      if ($conn->connect_error)
      {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "CREATE TABLE medinfo (
        DrugName VARCHAR(50),
        Form VARCHAR(50),
        Strength VARCHAR(50),
        Indication VARCHAR(90)
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table MyMED created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
        $newrow=0;
      if (($handle = fopen("medicine_info.csv", "r")) !== FALSE) 
      {
        while (($data = fgetcsv($handle, 500, ",")) !== FALSE) 
        {
          $newrow++;
              $p=$data[5];
              $q=$data[2];
              $r=$data[3];
              $s=$data[8];
              $sql = "INSERT INTO medinfo (DrugName,Form,Strength,Indication) VALUES ('$p', '$q', '$r','$s')";

          if ($conn->query($sql) === TRUE) 
          {
            echo "Done";
          } 
          else 
          {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          if($newrow>=1200)
          {
            break;
          }                
        }
        fclose($handle);
      }
    }
    function fun2()
    {
      $conn = new mysqli("localhost","root", "", "medicine");
// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE docinfo (
	DocID INT,
  DocName VARCHAR(50),
  DocSpeciality VARCHAR(50),
  DocEmail VARCHAR(50),
  DocPhone VARCHAR(90)
  )";
  
  if ($conn->query($sql) === TRUE) {
	echo "Table MyDOC created successfully";
  } else {
	echo "Error creating table: " . $conn->error;
  }

if (($handle = fopen("doc_info.csv", "r")) !== FALSE) 
{
  while (($data = fgetcsv($handle, 500, ",")) !== FALSE) 
  {
		$p=$data[0];
		$q=$data[1];
		$r=$data[2];
		$s=$data[3];
		$t=$data[4];
		$sql = "INSERT INTO docinfo (DocID,DocName,DocSpeciality,DocEmail,DocPhone) VALUES ('$p', '$q', '$r','$s','$t')";

	if ($conn->query($sql) === TRUE) 
	{
	  echo "Done";
	} 
	else 
	{
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
		  
  }
  fclose($handle);
}
    }
    fun();
    fun2();
  ?>
</body>
</html>
