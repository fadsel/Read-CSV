<?php
/**
 * Copyright (C) 2016 Fahad <fahad@yoteyote.com>
 * All rights reserved.
 * https://github.com/fadsel/Read-CSV/
 * 
 */

class Read_CSV {
    private $file_name;
    private $exported;
    private $file_handler = null;
    
    //--------------------------------------------------------------------
    function __construct($file_name)//, $delimiter=",", $length=8000)
    {
        if($file_name){
            $this->file_handler = fopen($file_name, "r");
            $this->file_name = $file_name;

        }else{
            echo "Enter a file name please";

        }
        //$file = base_url('Book1.csv');
    }
    
    //--------------------------------------------------------------------
    function __destruct()
    {
        die();

    }

    //--------------------------------------------------------------------
    function get(){
        $csv = array_map('str_getcsv', file($this->file_name));
        array_walk($csv, function(&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });
        array_shift($csv); # remove column header
        $this->exported = $csv;
        return $this->exported;
    }
}

?>
