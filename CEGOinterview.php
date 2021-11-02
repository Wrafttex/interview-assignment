<?php
    $cn = pg_connect("host=localhost port=5432 dbname=interviewcego user=kure password=fpy33upv"); 
    $path = "./localData.txt";
    $queryCondition = "firstname = 'Quin'";

    if ($cn) {
        echo "Connected to DB!\n";
    }

    try {
        $result = pg_query($cn, "SELECT * FROM users  WHERE " . $queryCondition);
        echo "Data fetched form DB!\n";
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        exit(1);
    }
    
    $data = json_encode(array(pg_fetch_object($result)), JSON_PRETTY_PRINT);

    if ($result) {
        file_put_contents($path, $data);
        echo "Data written to file!\n";
    }
    
    $localData = file_get_contents($path);

    if ($data == $localData) {
        echo "Data Verified!\n";
        pg_query("DELETE FROM users WHERE " . $queryCondition);
    }

    pg_close($cn);
?>