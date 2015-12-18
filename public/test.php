<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 19.12.2015
 * Time: 0:36
 */

if (isset($_GET['act'])) {
    $name = $_GET['name'];
    $pass = $_GET['password'];

    $data = file_get_contents('http://onenew.app/oauth/access_token?grant_type=password&client_id=1&client_secret=123&username='. $name .'&password='. $pass);
    $json = json_decode($data, true);

    if ($json['access_token']) {
        var_dump(file_get_contents('http://onenew.app/whoami?access_token='. $json['access_token']));
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <h3>Test `John Doe`</h3>
                <p>User ID: 5</p>
                <p>Name: John</p>
                <p>Password: 123</p>
                <a href="/test.php?act=test&name=john&password=123">Test</a>
            </td>
        </tr>
    </table>
</body>
</html>