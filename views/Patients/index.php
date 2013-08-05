<html>
    <head>This is the list of patients <br></head>
    <body>
        <table border="1">
         <?php foreach ($this->vars as $value) { ?>
       <tr><td><?php print_r($value['id']);?></td><td><?php print_r($value['nom']);?></td></tr>
     
        <?php }
  
?>       
</table>
    </body>
</html>