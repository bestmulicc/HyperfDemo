<html>
<head>
    <title>LOG-IN</title>
        </head>
<body>
    <form method="POST" name="form1" >
        username: <input type="text" name="username" ><br>
        password: <input type="text" name="password" ><br>
        <input type="submit" value="logon" onclick="login()">
        <input type="submit" value="register" onclick="register()">
    </form>
</body>
<script type="text/javascript">
    function login()
    {
        document.form1.action="/index/logon";
        document.form1.submit();
    }

    function register()
    {
        document.form1.action="/index/registerIndex";
        document.form1.submit();
    }
</script>
</html>