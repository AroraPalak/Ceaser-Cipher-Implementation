# Ceaser-Cipher-Implementation
TASK 1: We're going to write a program which implements a very simple (almost useless) cypher algorithm. 
The algorithm works by adding the number 13 to every letter and (with wrapping so that 'Z'+1='A') will result in a new letter.  
Numbers are increased by 5 with wrapping so they remain just one digit.
Other characters are left untouched.  Your code must meet the following restrictions 
1) Your program must use filenames that are given on the command line in the form of "php myprog.php 1 input.txt output.txt"
(1 is the task number for this assignment).  
Your program MUST NOT crash if only one file name (or no file names) are given or if the input file doesn't exist. 
Likewise you should detect any error and generate a "nice" notice for the user.  
2) The output will be the encoding of the input file.
For our purposes the algorithm is defined as follows:  
A) If the input is a lower case letter, the output is the lower case letter plus 13 (with wrap-around, so 'n' becomes 'a')    
B) If the input is a upper case letter, the output is the upper case letter plus 13 (with wrap-around, so 'n' becomes 'a')   
C) If the input is a number the output is the number plus 5 (with wrap-around so '6' becomes '1')  
D) If the input is neither letter nor number, the output is the same as the input ('!' becomes '!' and ' ' becomes ' ') 
3) If I execute the following (assumes 1.txt is a valid text file): "php myprog.php 1 1.txt 2.txt" "php myprog.php 1 2.txt 3.txt" .
Then 1.txt and 3.txt will have the exact same information 
4) For this task, you may not use the str_rot13 function (that would be a little to easy). 
You may define your own functions, but you do not have to.  

TASK 2:
The Caesar cypher is a simple cypher algorithm where each letter is assigned another letter in the alphabet. 
A table of corresponding letters is generated and stored. 
Your table will be stored in a associative array which you will access. 
Create an associative Array in which one character is mapped to another character  
Make sure no character is represented twice in either the keys or the values. 
for example you can use: $map= array ('a' => 'q');  not all characters must be represented! 
1) Using the same format as above, your program will be run with an input filename and an output filename in the form
of "php myprog.php 2 input.txt output.txt" (2 is the task number).  
Your program should read in the file and if any letters match those in the key of the array, 
they shoul dbe replaced with the corresponding letters in the value.
2) If the file contains a character which is not present in the array, you should leave the character alone.
