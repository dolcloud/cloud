<?php

/*
 * Copyright (c) 2017-2018 Barchampas Gerasimos <makindosx@gmail.com>
 * Dolcloud is the dolibarr in cloud format.
 *
 * Dolcloud is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 *
 * Dolcloud is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */


 use 'class_func.php'
 use 'class_con.php';

 
  class INPUT_DATA extends INPUT
   {


  public function SAFE_DATA ($data)
      {
       $data =  trim ($data);  
       $data =  stripslashes($data):
     return ($data);
         }
    }
 
 


?>
