<?php
class Patient extends Model {

    function __construct() {
        
         
    }
    function findAll(){
         $sql="SELECT * FROM profx_".$this->table;
		 echo $sql;
		 $req=mysql_query($sql) or die(mysql_error().'<br> =>'.mysql_query($sql));
		 $data=mysql_fetch_array($req);
                 return $data;
    }

}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
