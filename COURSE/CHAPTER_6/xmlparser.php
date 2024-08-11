<?php
    
    echo "<pre>";
    // XML language is a way to structure data for sharing across websites
    // example RSS feeds and Podcasts are written in XML
    // to read and update create and manipulate an XML document php gives 2 major types of XML parser
    // Tree-based Parsers
    // Event-BAsed Parsers
    
    // Tree-Based Parsers
    // holdsthe entire document in Memory and transforms the XML doc into a tree structure.
    // better option for smaller XML documents.
    
    //Event-Based Parsers:
    // read document one node at a time
    // once moved to the next node the old one is thrown away.
    // better option for large XML docs.
    // exp: XMLReader or XMLExpatParser
    
    // simplexml_load_string()
    
    $xmldata = "<?xml version='1.0' encoding='UTF-8' ?>"
            ."<note>"
            ."<to>Tove</to>"
            ."<from>Jani</from>"
            ."<heading>Reminder</heading>"
            ."<body>Don't forget me this weekend !</body>"
            ."</note>";
    
    $data = simplexml_load_string($xmldata) or die("Error loading xml data !");
    var_dump($data);

