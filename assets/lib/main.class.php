<?php

/***
** IVAO India Trainers Availability Main Class
** @author : Leonard Selvaraja -> IN-TA1
** @version : 0.1
** @requires : MySQL Class by Sergey Tsalkov
**


TA : Short form for Trainers Availability

***/

class TA {

    public static function auth_data($id) {
      $sql = "SELECT * FROM `trainers` WHERE `id` = '$id'";
      $result = DB::query($sql);
      return $result;
    }

    public static function decipher_dates($dates) {
      $date_array = (explode(",",$dates));
      return $date_array;
    }

    public static function get_all_trainers() {
      $sql = "SELECT * FROM `trainers`";
      $result = DB::query($sql);
      return $result;
    }

    public static function get_all_availability() {
      $date = date('d');
      $month = date('m');
      $year = date('Y');
      $sql = "SELECT * FROM `availability` WHERE `month` = $month AND `year` = $year";
      $result = DB::query($sql);

      // //Got the Availability
      // //Now get the $dates
      // //Then, get availability for the dates greater than today
      // $dates = $result['dates'];
      // $date_array = self::decipher_dates($dates);
      // $date_compilation = '';
      // foreach ($date_array as $da) $i=0;{
      //   if($da > $date) {
      //     $date_compilation .= $da[$i].', ';
      //   }
      // }
      //
      // $final_dates = $date_compilation;
      return $result;
    }

    public static function trainer_availability($vid) {
      $date = date('d');
      $month = date('m');
      $year = date('Y');
      $sql = "SELECT dates FROM `availability` WHERE `vid` = $vid AND `month` = $month AND  `year` = $year";
      $result = DB::query($sql);

      // //Got the Availability
      // //Now get the $dates
      // //Then, get availability for the dates greater than today
      // $dates = $result['dates'];
      // $date_array = self::decipher_dates($dates);
      // $date_compilation = '';
      // foreach ($date_array as $da) $i=0;{
      //   if($da > $date) {
      //     $date_compilation .= $da[$i].', ';
      //   }
      // }
      //
      // $final_dates = $date_compilation;
      return $result;
    }


    public static function trainers_available_today() {
      $date = date('d');
      $month = date('m');
      $year = date('Y');
      $sql = "SELECT * FROM `availability` WHERE `month` = $month AND `year` = $year";
      $result = DB::query($sql);
      return $result;
    }


    public static function trainers_available_next() {
      $date = date('d');
      $month = date('m');
      $year = date('Y');
      $sql = "SELECT * FROM `availability` WHERE `month` = $month AND `year` = $year";
      $result = DB::query($sql);
      return $result;
    }


}

?>
