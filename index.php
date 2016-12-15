<?php
        $database   = $user = $password = "project";
        $host       = "mysql";
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query      = $connection->query("SELECT name FROM test");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        print_r($tables);die();

        if (empty($tables)) {
            echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
            echo "<p>Database \"{$database}\" has the following tables:</p>";
            echo "<ul>";
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo "</ul>";
        }
        ?>