<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registry</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="externalView.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class = "cont">
    <h2>Registry</h2>
    <form action="user_coord.php" method="POST">
        <!-- user_coord.php is a handler for form -->
        <p>
            <label>Login:<br></label>
            <input name="login" type="text" size="15" maxlength="15" data-toggle="tooltip" data-placement="right" title="Input your future login, please.">
        </p>
        <!-- Login placeholder -->
        <p>
            <label>Password:<br></label>
            <input name="password" type="password" size="15" maxlength="15" data-toggle="tooltip" data-placement="right" title="Input your password, please.">
        </p>
        <!-- Password placeholder -->
        <p>
            <select name="status" data-toggle="tooltip" data-placement="right" title="Choose your current life-status, please.">
                <option>Choose your status:</option>
                <option value="1">Student</option>
                <option value="2">Unemployed</option>
                <option value="3">Pensioner</option>
                <option value="4">Ghost</option>
            </select>
        </p>
        <!-- Status placeholder -->
        <p>
            <input type="submit" name="submit" value="Registry" class="btn btn-success">
            <!-- Submit button for script acessable for form -->
        </p>
    </form>
</div>
</body>
</html>