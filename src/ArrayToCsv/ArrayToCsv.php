<?php

namespace ArrayToCsv;

class ArrayToCsv
{
    public static function generate(array $input_array, string $filename)
    {
        if(isset($input_array[0])){
            $fp = fopen($filename, 'w');

            /**
             * Printing headers
             */
            fputcsv($fp, array_keys($input_array[0]));

            /**
             * Writting data
             */
            foreach($input_array AS $row){
                fputcsv($fp, $row);
            }

            fclose($fp);
        }
    }
}