<html>
<head>
    <title>REGISTER</title>
</head>
<body>
<form method="POST" name="form1" >
    PLEASE username: <input type="text" name="username" ><br>
    PLEASE password: <input type="text" name="password" ><br>
    <input type="submit" value="register" onclick="register()">
</form>
</body>
<script type="text/javascript">
    function register()
    {
        document.form1.action="/index/register";
        document.form1.submit();
    }
</script>
</html>