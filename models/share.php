<?php

class ShareModel extends Model {
    public function Index() {
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        $rows = $this->resultset();
        return $rows;
    }

    public function add() {

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($post['submit'])) {
            $this->query('INSERT INTO `shares`(`user_id`, `title`, `body`, `link`) VALUES (:user_id, :title, :body, :link)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 2);
            $this->execute();

            if ($this->lastInsertId()) {
                header('Location: '.ROOT_URL.'shares');
            }
            return;
        }
    }
}

?>