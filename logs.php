<?php
function write_log($src,$obj,$data1 = false,$data2=false,$data3=false,$data4=false,$data5=false){
   $beautify = true;
   $log = 'TEST-GIT-LOG-'.__CUR_DATE__.' >>>> '.PHP_EOL;
   $log.= 'src  : '.$src.PHP_EOL;
   $log.= 'obj  : '.$obj.PHP_EOL;
   if ($data1 !== false) {
      $log.= 'data1 : ';
      $log.= ($beautify)?print_r($data1,true):json_encode($data1);
      $log.= PHP_EOL;
   }
   if ($data2 !== false) {
      $log.= 'data2 : ';
      $log.= ($beautify)?print_r($data2,true):json_encode($data2);
      $log.= PHP_EOL;
   }
   if ($data3 !== false) {
      $log.= 'data3 : ';
      $log.= ($beautify)?print_r($data3,true):json_encode($data3);
      $log.= PHP_EOL;
   }
   if ($data4 !== false) {
      $log.= 'data4 : ';
      $log.= ($beautify)?print_r($data4,true):json_encode($data4);
      $log.= PHP_EOL;
   }
   if ($data5 !== false) {
      $log.= 'data5 : ';
      $log.= ($beautify)?print_r($data5,true):json_encode($data5);
      $log.= PHP_EOL;
   }
   $log.= '-------------------------------------------------------------------------'.PHP_EOL;
   file_put_contents(__SERVER_PATH__.'/logs/log_'.date("d_m_Y").'.log', $log, FILE_APPEND);
}

?>
