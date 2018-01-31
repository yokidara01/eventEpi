<!DOCTYPE>
<html>
<head>
    <title></title>

            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<?php
session_start();
if(!$_SESSION["co"]=="true"){
 header('Location: '."error.php");
}
?>
<body>
<?php
 
     $link = new \PDO(   'mysql:host=94.23.106.33:8443;dbname=eventepi;charset=utf8mb4',
                        'root',
                        'mysql',
                        array(
                            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );


    $sql =  'SELECT * FROM user ';
   
 
?>
<div class="container">
    <div class="row">
        <div class="span5">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Email</th>
                      <th>Etablissement</th>   
                      <th>profession</th>
                      <th>Date d'inscription</th>                                       
                  </tr>
              </thead>   
              <tbody>
<?php
 foreach  ($link->query($sql) as $row) {


        
         echo     "<tr>";
          echo          "<td>".$row['nom'] ."</td>";
           echo         "<td>".$row['prenom'] ."</td>";
             echo       "<td>".$row['email'] ."</td>";
                echo       "<td>".$row['etab'] ."</td>";
                 echo       "<td>".$row['prof'] ."</td>";
                  echo       "<td>".$row['dateinscri'] ."</td>";                          
              echo  "</tr>";
       
  }
?>
 


               
           <!--     <tr>
                    <td>Emily F. Burns</td>
                    <td>2011/12/01</td>
                    <td>Staff</td>
                    <td><span class="label label-important">Banned</span></td>                                       
                </tr>
                <tr>
                    <td>Andrew A. Stout</td>
                    <td>2010/08/21</td>
                    <td>User</td>
                    <td><span class="label">Inactive</span></td>                                        
                </tr>
                <tr>
                    <td>Mary M. Bryan</td>
                    <td>2009/04/11</td>
                    <td>Editor</td>
                    <td><span class="label label-warning">Pending</span></td>                                       
                </tr>
                <tr>
                    <td>Mary A. Lewis</td>
                    <td>2007/02/01</td>
                    <td>Staff</td>
                    <td><span class="label label-success">Active</span></td>                                        
                </tr>    -->                               
              </tbody>
            </table>
            </div>
    </div>
</div>
</body>
</html>