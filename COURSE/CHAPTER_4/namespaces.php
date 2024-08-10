<?php

    namespace Html;
    class Table {
        public $title = "";
        public $numRows = 0;
        public function message() {
            return "<p>Table {$this->title} has {$this->numRows} rows.</p>";
        }
    }
    
    $table = new Table();
    $table->title = "My Table";
    $table->numRows = 5;
    
?>

<html>
    <body>
        <?php  
            echo $table->message();
        ?>
    </body>
</html>

    








<?php

    echo "<pre>";
    // qulifiers that solves two different problems
    // 1- allow for better organization by grouping classes that work together to perform a task
    // 2- allow the same name to be used for more than one class
    // 3- must be the first thing in the php file
    // namespaces can be nested
    // namespace Code\Html - declare Html namespace inside Code namespace