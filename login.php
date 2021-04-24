
<h3>Form Login</h3>
<form class="mt-5 ml-5 mr-5" method="POST" action="controllers/memberController.php">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-info btn-block mb-5">LOGIN</button>
</form>