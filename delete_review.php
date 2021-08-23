<?php
$id = $_GET['id'];
if (isset($_POST['submit'])) {


$conn = new mysqli("localhost", "root", "", "mechanic_finder");
      
        
// sql to delete a record
$sql = "DELETE FROM review WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  
} else {
  echo "Error deleting record: " . $conn->error;
}
header("Location: admin.php");

}
?>