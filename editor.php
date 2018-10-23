<?php require_once "richtexteditor/include_rte.php" ?>
<?php
  
    

    $rte2=new RichTextEditor();
    $rte2->Text="<div style=\"color:darkgreen;\"><strong>2. Seamless Integration with Web Forms</strong></div>";
    $rte2->Name="Editor2";
    $rte2->Height="200px";
    $rte2->Skin="smartsilver";
    $rte2->Toolbar="forum";
    $rte2->MvcInit();
    $rte2->RenderSupportAjax=false;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>RichTextEditor - Multiple editors</title>
    <link rel="stylesheet" href="../example.css" type="text/css" />
</head>
<body>
    <form action="multiple_editors.php" method="post" action="<?php echo htmlentities($_SERVER["PHP_SELF"]."?".$_SERVER["QUERY_STRING"])?>">
        <h1>
            Multiple Editors in one page</h1>
        <p>
            This example shows how to setup multiple editors on the same page.
        </p>
        <div>
             
            <?php                  
                  echo $rte2->GetString();
            ?>
            <br />
            <button type="submit">Submit</button>
        </div>
        <br />
        <div>
            <div>
                
            </div>
        </div>
    </form>
</body>
</html>