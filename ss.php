<?php
    if(isset($_GET['r'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $_GET['r']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>VISHNU - SSRF</title>
    </head>

    <body>
        

        <div>
            <p>Enter a URI to fetch</p>

            <form method="GET" action="#">
            <span>IP: 
                <input name="r" type="text" placeholder="uri://example.com" />
                <input type="submit" />
            </span>
            
            </form>
        </div>  

        <pre>
            
&lt;
<?php
    if(isset($_GET['r'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $_GET['r']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }
?>
&gt;
        </pre>
    </body>

</html>