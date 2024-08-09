<?php

    echo "<pre>";
    
    // PHP read data from file and write it to the ouput buffer
    // readfile();
    
    //$data = readfile("data.txt");
    //echo $data."\n"; //write data to the screen and the number of bites
    
    // Open/ Read/ Close
    
    // r - read only - pointer starts from the beginning of the file
    // w - write only - overrides the file content, if file doesn't exist create a new one pointer starts from the beginning of the file
    // a - write only - append data , create new file if doesn't exist.
    // x - write only - if file already exists retun false and error
    // r+ - read/write - pointer starts at the beginning of the file
    // w+ - read/write - override file content, create new one if file doesn't exist.
    // a+ - read/write - preserve file data, create new one if doesn't exist
    // x+ - read/write - retrun false and error if file doesn't exist
    // fread()
    // fclose()
    
    // fopen() open file
    // fread() read data from open file
    // fclose() close open file
    $file = fopen("data.txt", "r") or die("Unable to open file !");
    //echo fread($file, filesize("data.txt"))."\n";
    
    // fgets() read single line the move pointer to the next line
    //echo fgets($file);
    //echo fgets($file);
    
    // feof() check if the end of file has been reached; helps for loopin gthrough data of unknown length
    /*
    while(!feof($file)) {
        echo fgets($file);
    }
    */
    /*
    //fgetc() read single character
    while(!feof($file)){
        echo fgetc($file);
    }
    */
    
    // create/write
    $myfile = fopen("testfile.txt", "w") or die("Unable to open file !");
    
    // fwrite(); write content to a file
    $content = "Hello world !\nHi world!\nThis is a new Line!\nThis is another new line !";
    fwrite($myfile, $content);
    fwrite($myfile, "\nAnother line added now !");
    
    
    
    
    
    
    
    

