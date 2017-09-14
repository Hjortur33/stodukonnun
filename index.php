<!DOCTYPE html>
<html lang="en" >
<head>
    <link rel="stylesheet" href="stylesheet.css" />
    <meta charset="UTF-8" />
    <title>How to Get JSON Data from PHP Script using jQuery Ajax by CodexWorld</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="getUser.js">
    </script>
</head>
<body>
<h2></h2>
<input type="text" id="user_id" placeholder="id number" />
<input type="button" id="getUser" value="Get Details"/>
<div class="user-content" style="display: none">
    <h4>User Details</h4>
    <p>Text: <span id="userName"></span></p>

</div>

<div id='debug'>
</div>
</body>
</html>