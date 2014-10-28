<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action='./' method='post'>
        <p><label>User <input type='text' name='user' value="<?= $input->post->user ?>" /></label></p>
        <p><label>Password <input type='password' name='pass' value="<?= $input->post->pass ?>" /></label></p>
        <p><input type='submit' name='submit' value='Login' /></p>
    </form>
</body>
</html>
