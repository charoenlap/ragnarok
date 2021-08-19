<?php 
	class MonsterModel extends db {
		public function get($data=array()){
			$result = array();
			$sql = "SELECT * FROM mob_db_re LIMIT 0,10";
			$result = $this->query($sql)->row;
			return $result;
		}
		public function getBioLab($data=array()){
			$result = array();
			$sql = "SELECT * FROM central_lab cl LEFT JOIN mob_db_re m ON cl.id = m.ID";
			$result_mob = $this->query($sql)->rows;
			foreach($result_mob as $val){
				$result[] = array(
					'ID'=> $val['ID'],
					'iName'=> $val['iName'],
					'HP'=> $val['HP'],
					'Range1'=> Range1($val['Range1']),
					'DEF'=> $val['DEF'],
					'Race'=> Race($val['Race']),
					'Scale'=> Scale($val['Scale']),
					'Element'=> Element($val['Element']),
					'stage'=> $val['stage'],
				);
			}
			return $result;
		}
	}
?>
