<div class="row mt-3 justify-content-center">
    <div class="col-sm-10 col-md-8">
        <div class="card">
            <div class="card-header">User Login</div>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <label for="email">Email</label>
                    <input class="form-control form-control-sm" name="email" type="text" required>
                    <label for="password">Password</label>
                    <input class="form-control form-control-sm" name="password" type="text" required>
                    <input class="btn btn-primary mt-3" type="submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </div>
</div>