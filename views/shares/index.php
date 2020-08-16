<div>
    <a class="btn btn-sm btn-success my-2" href="<?php echo ROOT_PATH ?>shares/add">Share Something</a>
    <?php foreach($viewmodel as $item): ?>
        <div class="card my-2">
            <div class="card-body">
                <h3><?php echo $item['title']; ?></h3>
                <small class="text-muted"><?php echo $item['create_date'] ?></small>
                <p><?php echo $item['body'] ?></p>
                <a class="btn btn-sm btn-secondary" href="<?php echo $item['link'] ?>" target="_blank">Go to site</a>
            </div>
        </div>
    <?php endforeach ?>    
</div>