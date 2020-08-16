<div class="row mt-3 justify-content-center">
    <div class="col-sm-10 col-md-8">
        <div class="card">
            <div class="card-header">Share Something</div>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <label for="title">Share Title</label>
                    <input class="form-control form-control-sm" name="title" type="text" required>
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control form-control-sm" rows="5" required></textarea>
                    <label for="link">Link</label>
                    <input class="form-control form-control-sm" name="link" type="text" required>
                    <div class="mt-3">
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        <a href="<?php echo ROOT_URL; ?>shares" class="btn btn-danger" type="cancel" name="submit">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>