<?php
session_start();
if (isset($_POST['face'])) :

    $data = $_POST['face'];
    $action = $_POST['action'];
    $stress = $_POST['stress'];
    $user = $_SESSION['user'];

    $face_id = $data['0']['faceId'];
    $emotions = $data['0']['faceAttributes']['emotion'];

    $anger = $emotions['anger'];
    $contempt = $emotions['contempt'];
    $disgust = $emotions['disgust'];
    $fear = $emotions['fear'];
    $happiness = $emotions['happiness'];
    $neutral = $emotions['neutral'];
    $sadness = $emotions['sadness'];
    $surprise = $emotions['surprise'];

    $timezone = +5.45; //(GMT -5:00) EST (U.S. & Canada);

    $current_time = gmdate("Y-m-j H:i:s", time() + 3600 * ($timezone + date("I"))); ?>

    echo $face_id;


    <pre>
    <?php var_dump($emotions); ?>
</pre>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "asdf1234";
    $dbname = "emotion_detection";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


//    $sql_table = "
//    CREATE TABLE `face_details` (
//  `id` int(11) NOT NULL AUTO_INCREMENT,
//  `faceId` varchar(255) NOT NULL,
//  `user` int(11) NOT NULL,
//  `stress_avg` float NOT NULL,
//  `anger` float NOT NULL,
//  `contempt` float NOT NULL,
//  `disgust` float NOT NULL,
//  `fear` float NOT NULL,
//  `happiness` float NOT NULL,
//  `neutral` float NOT NULL,
//  `sadness` float NOT NULL,
//  `surprise` float NOT NULL,
//  `captured_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
//  PRIMARY KEY  (`id`)
//   FOREIGN KEY (`user`) REFERENCES `users` (`id`)
//) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
//    ";
//
//    if (mysqli_query($conn, $sql_table)) {
//        echo "Table Created";
//    } else {
//        echo "Error: " . $sql_table . "<br>" . mysqli_error($conn);
//    }


    $sql = "INSERT INTO face_details ( faceId, user, stress_avg, anger, contempt, disgust, fear, happiness, neutral, sadness, surprise, captured_at ) 
            VALUES ('$face_id', $user, $stress, $anger, $contempt, $disgust, $fear, $happiness, $neutral, $sadness, $surprise, '$current_time')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>

<?php endif;