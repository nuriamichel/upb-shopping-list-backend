<?php
   // PHP version 7.4 used here
    try {
        // connect to OVHcloud Public Cloud Databases for MongoDB (cluster in version 4.4, MongoDB PHP Extension in 1.8.1)
        $m = new MongoDB\Driver\Manager('mongodb://shoplist:dti2022@localhost:27017/shoplist');
        echo "Connection to database successfully";
        // display the content of the driver, for diagnosis purpose
        $insertOneResult = $collection->insertOne([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'name' => 'Admin User',
        ]);
        printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

    }
    catch (Throwable $e) {
        // catch throwables when the connection is not a success
        echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
    }
?>