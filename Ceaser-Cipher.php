<?php

	function cypherAlgo($chr)
		{
			$chr1="";
			$ascii=ord($chr); // converts the character into its ascii value

	if($ascii>64 && $ascii<91) // for uppercase alphabets
		{
               		$ascii=$ascii+13; 
	if($ascii>90)
		{
			$ascii=$ascii-91+65; 
		}
			$chr1=chr($ascii);
			return $chr1;
		} 
	elseif($ascii>96 && $ascii<123)// for lowercase alphabets.
		{
			$ascii=$ascii+13;
			if($ascii>122)
		{
			$ascii=$ascii-123+97;
		}
			$chr1=chr($ascii);
			return $chr1;
		} 
			elseif ($ascii>47 && $ascii<58) // for numbers
		{
			$ascii=$ascii+5;
		
			if($ascii>57)
		{
			$ascii=$ascii-58+48;
		}
			$chr1=chr($ascii);
			return $chr1;
		}
			return $chr;
		}


	function CaesarCypher($Char2)
		{
		 $Map = array('a' => 'q','A' => 'Q','b' =>'s','B' => 'S','d' => 'c','D' => 'C','e' => 't','E' => 'T','i' => 'v','I' => 'V','j' => 'w','J' => 'W','o' => 'x','O' => 'X','u' => 'y','U' => 'Y','s' => 'z','S' => 'Z' ) ; // mapping values in an associative array
				
	      if(array_key_exists($Char2, $Map)) //  checking the key exists in an array or not.
		{
		return $Map[$Char2];
		}
		return $Char2;
		}
	      
             if((!isset($argv[1])) || ($argv[1]!= "1" and $argv[1]!= "2") || (!isset($argv[2])) || (!isset($argv[3])))
               {
                     echo "ERROR: check if you have specified Task 1 or 2 or specified the input/ output files. \n";
                     exit(4);
                       
               }
		
		$taskNum = $argv[1];               
		$inputFile = $argv[2];
                $outputFile = $argv[3];
               
               $directory = getcwd(); // get current directory
               $input = $directory . "\\" .$inputFile ; // setting input path
               $output = $directory . "\\"   .$outputFile ; // setting output path

               if (!file_exists($input))
               {
                    echo "ERROR: The $input file doesn't exists.\n\n";
                    exit(1);
               }
               
		$content = file_get_contents($input); //reads the file contents into a string
		$arraySplit = str_split($content); //converts string in an array and maps values
		$cypher = "";
               
              if($taskNum == 1)
              {
		       foreach($arraySplit as $value)
		       {
		               $cypher = $cypher.cypherAlgo($value);
		       }
              }
              elseif($taskNum == 2)
              {
               	 	foreach($arraySplit as $value)
		       {
			        $cypher = $cypher.CaesarCypher($value);
		       }
              }
			 	file_put_contents($output, $cypher); // copies the input file contents after encoding.
                        
		?> 