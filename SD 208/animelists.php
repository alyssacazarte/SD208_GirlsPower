<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
    <a href="userpage.php"><b>Home</b></a>
    <h1>Anime Series Reminder</h1>
    <form action="create_animelists.php" method="post">
        <label for="cat">Anime Category</label>
        <select name="cat" id="cat">
            <option value="0">Shónen</option>
            <option value="1">Shojo</option>
        </select>
        <label for="text">Anime Title</label>
        <textarea name="text" id="text"></textarea>
        <label for="animetitledate">Date Released</label>
        <input type="date" id="animetitledate" name="animetitledate"/>
        <label for="watched">Entirely Viewed</label>
        <input type="checkbox" id="watched" name="watched" value="1" /><br/>
        <button type="submit">Submit Reminder</button>
    </form>
    <?php
    require_once 'config.php';
    $select = "SELECT * FROM animetitle";
    $result = mysqli_query($conn, $select) or die(mysqli_error($conn));
    print("<h2>Unwatched</h2>");

    // Unwatched
    while($row = mysqli_fetch_array($result)){
        if($row['animetitle_watched'] == 0){
            if($row['animetitle_category'] == 0){
                $cat = "Shónen";
            }elseif ($row['animetitle_category' == 1]){
                $cat = "Shójo";
}
    echo "<div class='animetitle'>";
    echo "<a href='watched.php?id=" . $row['animetitle_id'] . "'><button class='btnWatched'>Watched</button></a><strong>";
    echo $cat . "</strong><p>" . $row['animetitle_text'] . "</p>Date Released: " . $row['animetitle_date'];
    echo "</div>";
    }
}
// Watched
    print("<h2>Recently Viewed</h2>");
    $result = mysqli_query($conn, $select) or die(mysqli_error($conn));
    while($row = mysqli_fetch_array($result)){
        if($row['animetitle_watched'] != 0){
            if($row['animetitle_category'] == 0){
                $cat = "Shónen";
            }elseif ($row['animetitle_category' == 1]){
                $cat = "Shójo";
}
    echo "<div class='animetitle'>";
    echo "<a href='delete.php?id=" . $row['animetitle_id'] . "'><button class ='btnDelete'>Delete</button></a><strong>";
    echo $cat . "</strong><p>" . $row['animetitle_text'] . "</p>Date Released: " . $row['animetitle_date'];
    echo "</div>";
    }
} 
 
    ?>
    </div>
    
</body>
</html>