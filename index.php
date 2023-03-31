<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $database_server = 'localhost';
    $database_username = 'root';
    $database_password = '';
    $database_name = 'products';

    $conn = mysqli_connect($database_server, $database_username, $database_password, $database_name);
    if(!$conn){
        die("Failed to connect to MySQL: ".mysqli_connect_error());
    }
    // $sql = "CREATE DATABASE products";
    // $status = $conn->query($sql);

    // if($status){
    //     echo "Database created successfully";
    // }else{
    //     echo "Error creating database: " .$conn->error;
    // }


    // $sql_query = "CREATE TABLE phones (
    //     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(30) NOT NULL,
    //     price FLOAT(20) NOT NULL,
    //     release_date VARCHAR(30) NOT NULL,
    //     company VARCHAR(20) NOT NULL,
    //     cpu VARCHAR(20) NOT NULL,
    //     ram_amount INT(2) NOT NULL,
    //     storage FLOAT(20) NOT NULL,
    //     camera VARCHAR(20) NOT NULL)";

    //  $sql_query = "CREATE TABLE cars (
    //     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(30) NOT NULL,
    //     price FLOAT(20) NOT NULL,
    //     release_date VARCHAR(30) NOT NULL,
    //     company VARCHAR(20) NOT NULL,
    //     engine VARCHAR(20) NOT NULL,
    //     fuel_capacity FLOAT(10) NOT NULL,
    //     seats INT(2) NOT NULL,
    //     cabriolet BOOLEAN NOT NULL)";

        //  $sql_query = "CREATE TABLE computers (
        // id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        // price FLOAT(20) NOT NULL,
        // release_date VARCHAR(30) NOT NULL,
        // company VARCHAR(20) NOT NULL,
        // cpu VARCHAR(20) NOT NULL,
        // ram_amount VARCHAR(10) NOT NULL,
        // hdd FLOAT(20) NOT NULL,
        // ssd FLOAT(20) NOT NULL,
        // gpu VARCHAR(30) NOT NULL)";

    // $mysql_query_statement = "INSERT INTO phones (name, price, release_date, company
    // , cpu, ram_amount, storage, camera)
    // VALUES ('iPhone X', 1000.99, '25 May 2018', 'Apple', 'A14 Bionic', 4, 63.59, '10MP'),
    // ('iPhone 12', 1500.99, '10 March 2021', 'Apple', 'A16 Bionic', 6, 128, '12MP'),
    // ('iPhone 6', 399.99, '10 April 2014', 'Apple', 'A10 Bionic', 2, 15.59, '4MP'),
    // ('Galaxy s10', 1400.99, '18 Sep 2020', 'Samsung', 'Snapdragon', 8, 128, '14MP'),
    // ('Galaxy s9', 1200.99, '28 Oct 2019', 'Samsung', 'Snapdragon', 6, 63.59, '12MP'),
    // ('iPhone 13', 2900.99, '25 May 2022', 'Apple', 'A17 Bionic', 6, 128, '14MP'),
    // ('iPhone 13 mini', 2800.99, '8 Sep 2022', 'Apple', 'A17 Bionic', 6, 256, '14MP'),
    // ('iPhone 13 pro', 3100.99, '15 Oct 2022', 'Apple', 'A17 Bionic', 8, 512, '16MP'),
    // ('iPhone 14', 4300.99, '10 Jan 2023', 'Apple', 'A16 Bionic', 4, 63.59, '10MP'),
    // ('iPhone 14 pro', 4999.99, '19 Feb 2023', 'Apple', 'A18 Bionic', 10, 512, '18MP')";

    // $mysql_query_statement = "INSERT INTO cars (name, price, release_date, company
    // , engine, fuel_capacity, seats, cabriolet)
    // VALUES
    // ('E60', 14500.37, '20 Sep 2018', 'BMW', '5.4L', 70, 4, 0),
    // ('E40', 10500.3, '12 Oct 2014', 'BMW', '4.4L', 69, 4, 0),
    // ('M6', 14500.37, '18 May 2018', 'BMW', '5.4L', 80, 4, 0),
    // ('M4', 8900, '20 Sep 2010', 'BMW', '3.2L', 70, 2, 1),
    // ('A8', 15000.37, '7 Sep 2018', 'Audi', '3.0L', 90, 4, 0),
    // ('Q7', 18000, '18 Jun 2016', 'Audi', '5.4L', 120, 4, 0),
    // ('80', 800, '7 Sep 1984', 'Audi', '1.8L', 90, 4, 0),
    // ('Supra', 21000, '19 Dec 2010', 'Toyota', '3.0L', 60, 2, 1),
    // ('GTR', 170000, '16 March 2023', 'Nissan', '5.5L', 80, 4, 1)";

    $mysql_query_statement = "INSERT INTO computers (price, release_date, company
    , cpu, ram_amount, hdd, ssd, gpu)
    VALUES
    (1869, '18 March 2016', 'Intel', 'i7 9750H', '16GB', 1024, 512, 'GTX 1080 TI'),
    (5900, '28 Dec 2019', 'Intel', 'i7 1150H', '32GB', 2048, 1024, 'RTX 3070 TI'),
    (1200, '5 April 2015', 'Intel', 'i7 7700', '16GB', 1024, 0, 'GTX 1080'),
    (600, '10 Jan 2010', 'Intel', 'i5 5500', '8GB', 0, 512, 'GTX 980'),
    (1100, '18 Jul 2013', 'Intel', 'i7 6900', '16GB', 0, 512, 'GTX 980 TI'),
    (1450, '19 March 2017', 'AMD', 'Ryzen 5', '16GB', 1024, 512, 'RX 580'),
    (1220, '4 Jan 2016', 'AMD', 'Ryzen 5', '16GB', 1024, 256, 'RX 580'),
    (2100, '18 March 2018', 'AMD', 'Ryzen 7', '32GB', 1024, 512, 'RX 6900'),
    (10500, '10 Jan 2023', 'AMD', 'Ryzen 9', '16GB', 2048, 1024, 'Rx 7900')";

    $result = $conn->query($mysql_query_statement);

    if($result){
        echo "Records inserted successfully";
    }else{
        echo "Error inserting records: " .$conn->error;
    }


    // $status = $conn->query($sql_query);
    // if($status){
    //     echo "Table created successfully.";
    // }else{
    //     echo "Error creating table: " .$conn->error;
    // }
    
    $conn->close();

    ?>


</body>
</html>