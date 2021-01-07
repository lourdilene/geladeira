<?php

namespace App\Utils;

class Date {
	public function dateBRToUS($dateSql){
		$ano= substr($dateSql, 6);
		$mes= substr($dateSql, 3,-5);
		$dia= substr($dateSql, 0,-8);
		return $ano."-".$mes."-".$dia;
	}
}
