<? 
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $text = $_POST['text'];
        $color = $_POST['color'];
        $arr = explode(" ", $text);
        $goods = array('product1' => $_POST['prod1'], 'product2' => $_POST['prod2'], 'product3' => $_POST['prod3'], 'product4' => $_POST['prod4'], 'product5' => $_POST['prod5'], 'product6' => $_POST['prod6']);
        echo "user: ".(string)$username."<br>pass: ".(string)$password."<br>";
        foreach ($arr as $key => $value) {
            if ($value != "")
                echo "<br>".$value;
        }
        $_SESSION["color"]=$color;
        $_SESSION["goods"]=$goods;
        echo "<body bgcolor=".$_SESSION["color"].">";
        print_r($goods);

        $json = file_get_contents("http://php.net/releases/?json");
        if ($json === false) {
            echo "can't get info";
        }
        else {
            $feed = json_decode($json, true);
            $major_numbers = array_keys($feed);
            rsort($major_numbers);
            $biggest_major_number = $major_numbers[0];
            $version = $feed[$biggest_major_number]['version'];
            echo "<br><br>filegetcontents -- latest version: $version<br><br>";
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://php.net/releases/?json',
            CURLOPT_USERAGENT => 'Sample of cURL'
        ]);
        $res = curl_exec($curl);
        if ($res === false) {
            echo "can't get info";
        }
        else {
            $feed = json_decode($res, true);
            $major_numbers = array_keys($feed);
            rsort($major_numbers);
            $biggest_major_number = $major_numbers[0];
            $vension = $feed[$biggest_major_number]['version'];
            echo "curl -- latest version: $version<br><br>";
        }
        curl_close($curl);

        $now = time();
        echo "$now";
        setcookie('last_access', $now);
        if (isset($_COOKIE['last_access'])) {
            $d = new DateTime('@'.$_COOKIE['last_access']);
            $msg = '<p>You last visited this page at '.$d->format('g:i a').' on '.$d->format('F j, Y').'</p>';
        } else {
            $msg = '<p>This is your first visit to this page.</p>';
        }
        print $msg;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insomnia</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="container">
        <a href="index.php">Backward</a><br><br><br>
        <form action="index.php" method="post">
            <input name="checkOut" id="checkOut" type="submit" value="check out">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>