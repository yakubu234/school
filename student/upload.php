<?PHP
  if(!empty($_FILES['file-2[]']))
  {
    $path = "files/";
    $path = $path . basename( $_FILES['file-2[]']['name']);
    if(move_uploaded_file($_FILES['file-2[]']['tmp_name'], $path)) {
      echo "
      The file ".  basename( $_FILES['file-2[]']['name']). 
      " has been uploaded<br>";
      $filename = basename( $_FILES['file-2[]']['name']);
      echo $filename;
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>