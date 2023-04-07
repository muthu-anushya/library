<?php
include "connection1.php";
include "navigation.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>books</title>
    <style type="text/css">
    .search {
        padding-left: 1000px;
    }
    </style>
</head>

<body>

    <!---------------------search bar-------------------->
    <div class="search">
        <form class="navbar-form" method="post" name="form1">
            <div>
                <input class="form-control" type="text" name="search" placeholder="search books..." required="" />
                <button style="background-color: aqua;" type="submit" name="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>



            </div>





        </form>
    </div>






    <h2>List Of Books</h2>
    <?php
	

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($conn,"SELECT * from book where name like '%$_POST[search]%' ");
			if(mysqli_num_rows($q)==0)
			{
				echo "sorry! No book found.Try Searching again.";
			}
			else
			{
				echo "<table class='table table-bordered table-hover' >";
				echo "<tr style='background-color: aqua;'>";
					//Table header
					echo "<th>"; echo "ID";	echo "</th>";
					echo "<th>"; echo "Book-Name";  echo "</th>";
					echo "<th>"; echo "Authors Name";  echo "</th>";
					echo "<th>"; echo "Edition";  echo "</th>";
					echo "<th>"; echo "Status";  echo "</th>";
					echo "<th>"; echo "Quantity";  echo "</th>";
					echo "<th>"; echo "Department";  echo "</th>";
				echo "</tr>";	
	
				while($row=mysqli_fetch_assoc($q))
				{
					echo "<tr>";
					echo "<td>"; echo $row['bookid']; echo "</td>";
					echo "<td>"; echo $row['name']; echo "</td>";
					echo "<td>"; echo $row['authors']; echo "</td>";
					echo "<td>"; echo $row['edition']; echo "</td>";
					echo "<td>"; echo $row['status']; echo "</td>";
					echo "<td>"; echo $row['quantity']; echo "</td>";
					echo "<td>"; echo $row['department']; echo "</td>";
	
					echo "</tr>";
				}
					echo "</table>" ;  
							
			}

			
			
		}
			// <!----------if button is not pressed ----->
			else
			{
				$res=mysqli_query($conn,"SELECT * FROM `book` ORDER BY `book`.`name` ASC;");

			echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: aqua;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bookid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";

				echo "</tr>";
			}
			echo "</table>";
			}
		
;	?>





</body>

</html>