<!DOCTYPE html>
<html>
<head>
    <title>getTable</title>
</head>
<body>
    
<?php
//get the db connection file
require_once 'dbconf.php';

function SearchBooks($title, $connect){
    try {
            // Query
            $sql = "SELECT title FROM products where title like '%$title%'";
    
            // Execute the query
            $result = mysqli_query($connect, $sql);
    
            // Check if data exists in the table
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>";
                $col = mysqli_fetch_fields($result);
                //Print the columns
                echo "<tr>";
                foreach ($col as $value) {
                    //return object
                    echo "<td>$value->name</td>";
                }
                echo "</tr>";
    
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>" . $value . "</td>";
                    }
                }
                echo "</table>";
            } else {
                echo "No Results!";
            }
    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

if(isset($_GET['title']) && $_GET['title'] != ''){
	SearchBooks($_GET['title'], $connect);
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
	<table>
        <tr>
            <td align="right">Book Title: </td>
            <td> <input type="text" name="title" placeholder="Search..."> </td>
            <td><input type="submit" value="search"></td>
        </tr>
</table>
</form>

</body>
</html>