<?php
/**
 *Objet Model
 *pour l interaction avec la base de donné
 * */
 class Model{
	
	 public $table;
	  public $table1;
	   public $table2;
	 public $id;
	 
	 
	 public function read($fields=null){
		 if($fields==null){	$fields='*';	}
		 $sql="SELECT $fields FROM `profx_".$this->table.'` WHERE id='.$this->id;
		 //echo $sql;
		 $req=mysql_query($sql) or die(mysql_error().'<br> =>'.mysql_query());
		 $data=mysql_fetch_array($req);
		 foreach($data as $k=>$v)
		 {
			 $this->$k=$v;
		 }
                 return $data;
		 
		 
	 }
	 
	 public function save($data){
		 if(isset($data['id']) && !empty($data['id']))
		 {
			$sql='UPDATE `profx_'.$this->table.'` SET ';
			foreach($data as $k=>$v)
			{
				if($k!='id')
				{
					$sql.="$k='$v',";
				}	
			}
			$sql=substr($sql,0,-1);
			$sql.=' WHERE id='.$data['id'];
		 }
		  else
		 {
			$sql='INSERT INTO `profx_'.$this->table.'`(';
			unset($data['id']);
			foreach($data as $k=>$v)
			{
				$sql.="$k,";
			}
			$sql=substr($sql,0,-1);
			$sql.=')VALUES(';
			foreach($data as $v)
			{
				$sql.="'$v',";	
			}
			$sql=substr($sql,0,-1);
			$sql.=')';
		 }
		//echo $sql;
		mysql_query($sql) or die(mysql_error().'<br> =>'.mysql_query());
		
		if(!isset($data['id']) || empty($data['id']))
		{
			$this->id=mysql_insert_id();		
		}
		else
		{
			$this->id=$data['id'];			
		}
		
	 }
	 
	 public function find($data=array()){
		 $condition='1=1';
		 $fields='*';
		 $limit='';
		 $order='id DESC';
		 if(isset($data['conditions'])){$condition=$data['conditions'];}
		 if(isset($data['fields'])){$fields=$data['fields'];}
	 	 if(isset($data['limit'])){$limit='LIMIT '.$data['limit'];}
		 if(isset($data['order'])){$order=$data['order'];}
		 $sql="SELECT $fields FROM profx_".$this->table." WHERE $condition ORDER BY $order $limit" ;
		 $req=mysql_query($sql) or die(mysql_error().'<br> =>'.mysql_query());
		 $d=array();
		 while($data=mysql_fetch_assoc($req)){
			 $d[]=$data;
		 }
		 return($d);
	 }
	 
	 public function del($id){
		 if($id==null){ $id = $this->id; }
		 $sql='DELETE FROM `profx_'.$this->table.'` WHERE id='.$id;
		 $req=mysql_query($sql) or die(mysql_error().'<br> =>'.mysql_query());
	 
	 }
	 
	 
 }
	 
?>