<?php

namespace ArrayToCsv;

class ArrayToCsv
{
    public static function generate(array $input_array, string $filename, $delimiter = ',', $enclosure = '"', $escape_char = '\\')
    {
        if(isset($input_array[0])){
            $fp = fopen($filename, 'w');

            /**
             * Printing headers
             */
            fputcsv($fp, array_keys($input_array[0]), $delimiter, $enclosure, $escape_char);

            /**
             * Writting data
             */
            foreach($input_array AS $row){
                fputcsv($fp, $row, $delimiter, $enclosure, $escape_char);
            }

            fclose($fp);
        }
    }
}