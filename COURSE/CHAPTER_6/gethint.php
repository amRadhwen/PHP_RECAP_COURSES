<?php

    // function to create random strings
    /*
    function generateString() {
        $word = "";
        //$words = [];
        $counter = 0;
        for($c = 0; $c <= 100; $c++) {
            $word_len = rand(4, 10);
            while ($counter <= $word_len) {
                if ($counter == 0)
                    $word .= "\"";
                $word .= chr(rand(97, 122));
                $counter++;
            }
            //$words[] = $word."\",";
            $word .= "\",\n";
            $counter = 0;
        }
        return $word;
    }
    $strings = generateString();
    print_r($strings);*/
    
    $worldlist = array(
        "ererg",
        "ihszzlu",
        "dqvjzsg",
        "pxuvmsj",
        "npkftxp",
        "rsvisbus",
        "kjjkbkcgbnn",
        "fjvxdl",
        "jwhrqhhdumd",
        "qevrkzd",
        "gxuzwhqok",
        "hfxla",
        "frbhzmywvqh",
        "zrmncz",
        "hjmjawxgcbu",
        "wzykii",
        "yrhvw",
        "dcael",
        "kfrmjjmogwj",
        "tkisb",
        "euvmmuilea",
        "qorwaoi",
        "puxlbmxney",
        "lnqycmf",
        "nnbstnd",
        "jcypz",
        "qjovukrfx",
        "jeacfyjlnc",
        "zipifeqe",
        "wjrmhqfunn",
        "ziajax",
        "xvubrqcx",
        "ccecr",
        "qnodl",
        "ihmws",
        "eblebig",
        "quktr",
        "vywdhmaloh",
        "stulgopisok",
        "mzicqwt",
        "amlispiuf",
        "favvo",
        "rdowfarpkgw",
        "itrecw",
        "zughsz",
        "hdywcik",
        "iqklsemevh",
        "gksydxfuoz",
        "jtaphtlhazg",
        "vkzif",
        "uzjbygnrhis",
        "hvwmy",
        "tbvvkpjr",
        "nrpwjid",
        "ltyzkbrfld",
        "blyec",
        "fitlsffycjb",
        "qvhrxidy",
        "zeaauejuew",
        "qzxdo",
        "mjrtglhcim",
        "tomxhik",
        "wxicrzdoa",
        "bfvbz",
        "zvfopivprv",
        "ykxiaowsv",
        "tturn",
        "jyatjn",
        "exnavbthtjd",
        "lsyutfvr",
        "gilqzx",
        "zpwekqciuli",
        "wfpuwsgo",
        "qndenhylqe",
        "nhazselrlhn",
        "boiaj",
        "ieevspzuhm",
        "ojrpv",
        "enxznwllt",
        "woqpok",
        "tproig",
        "hbeumu",
        "ttqzf",
        "gbjtsvhcsp",
        "vbbllvmlda",
        "dqlrvarcjf",
        "xvnzu",
        "fqehzhxho",
        "ponbzzb",
        "djwgmxvvw",
        "ymqmclc",
        "aaexkeko",
        "hllsheigoh",
        "hrdkuxug",
        "lceujdeb",
        "pbqhockgnw",
        "smapxiuuwyt",
        "tglxwcd",
        "nfehqzgxqgn",
        "yeudaq",
        "cmsgfprrfzg");

    
    if(isset($_REQUEST["q"])){
        $q = strtolower($_REQUEST["q"]);
        $hint = "";
        foreach($worldlist as $word) {
            if($q === substr($word, 0, strlen($q))) {
                $hint .= "<span>".substr($word, 0, strlen($word))."</span>";
                echo $hint;
            }
            
        }
    }
    

    
    