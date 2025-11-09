<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!doctype html>
<html>
<head><meta name="viewport" content="width=device-width,initial-scale=1" /><title>Admin — SNG</title>
<link rel="stylesheet" href="/frontend/assets/css/style.css" />
</head>
<body>
<div style="max-width:420px;margin:80px auto">
<div class="card">
<h2>Admin Login</h2>
<form method="post" action="dashboard.jsp">
<input name="user" placeholder="Username" required />
<input name="pass" type="password" placeholder="Password" required />
<button class="primary full" type="submit">Sign in</button>
</form>
</div>
</div>
</body>
</html>