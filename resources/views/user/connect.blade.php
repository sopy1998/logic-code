<form action="">
    <div class="form-group" style="min-height: 50px;">
        <label for="connectname">Username : </label><br>
        <input autocomplete='off' type="text" class="form-control" >
    </div>
    <div class="form-group" style="min-height: 50px;">
        <label for="connectmdp">Password : </label>
        <input autocomplete='off' type="password" class="form-control" >
    </div><br>
    <div class="form-group">
        <button class="btn btn-primary btn-block" onclick="user.connection(event)">Connecter</button>
    </div>
</form>