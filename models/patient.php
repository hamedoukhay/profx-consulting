<?php
class Patient extends Model {

    function __construct() {
        
         
    }
    function findAll(){
        $data = array();
        $d = array();
         $sql="SELECT * FROM profx_".$this->table;
		// echo $sql;
		 $req=mysql_query($sql) or die(mysql_error().'<br> =>'.mysql_query($sql));
                 while ($row = mysql_fetch_array($req)) {
                     $data['id']=$row[0];
                      $data['nom']=$row[1];
                      $d[]=$data;
                 }
                 return $d;
         
          
              
    }

}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
