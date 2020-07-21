<?php
include '../models/New.php';

class Controller
{
    public function invoke()
    {
        $action = filter_input(0, 'action');
        if (empty($action)) {
            $action = filter_input(1, 'action');
            if (empty($action)) {
                $action = 'index';
            }
        }

        switch ($action) {
            case 'index':
                $listNews = $this->listAllNews();
                include 'views/listNews.php';

                break;

            case 'create':
                include 'views/createNews.php';

                break;

            case 'store':
                $title       = filter_input(INPUT_POST, 'title');
                $description = filter_input(INPUT_POST, 'description');
                $image       = $_FILES['image'];

                $image_dir_path = getcwd() . '/public/images';
                if (isset($image)) {
                    $filename = $_FILES['image']['name'];
                    if (!empty($filename)) {
                        $source = $_FILES['image']['tmp_name'];
                        $target = $image_dir_path . '/' . $filename;
                        move_uploaded_file($source, $target);
                        $image = $filename;
                    }
                } else {
                    $image = '';
                }

                $this->store($title, $description, $image);


                $listNews = $this->listAllNews();

                include 'views/listNews.php';

                break;

            case 'edit':
                $id = filter_input(INPUT_GET, 'id');

                include 'views/editNews.php';

                break;

            case 'update':
                $id          = filter_input(INPUT_GET, 'id');
                $title       = filter_input(INPUT_POST, 'title');
                $description = filter_input(INPUT_POST, 'description');
                $image       = $_FILES['image'];

                $image_dir_path = getcwd() . '/public/images';
                if (isset($image)) {
                    $filename = $_FILES['image']['name'];
                    if (!empty($filename)) {
                        $source = $_FILES['image']['tmp_name'];
                        $target = $image_dir_path . '/' . $filename;
                        move_uploaded_file($source, $target);
                        $image = $filename;
                    }
                } else {
                    $image = '';
                }

                $status = $this->update($id, $title, $description, $image);

                $listNews = $this->listAllNews();

                include 'views/listNews.php';

                break;

            case 'detail':
                $id = filter_input(INPUT_GET, 'id');

                $details = $this->detail($id);

                include 'views/listDetails.php';

                break;

            case 'delete':
                $id = filter_input(INPUT_GET, 'id');

                $this->delete($id);

                $listNews = $this->listAllNews();

                include 'views/listNews.php';

                break;
        }
    }

    public function listAllNews()
    {
        $connection = DB::connection();
        $query      = "SELECT * FROM news";

        try {
            $stmt = $connection->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(2);
            DB::close();

            return $result;
        } catch (Exception $e) {

            return false;
        }

    }

    public function store($title, $description, $image)
    {
        $connection = DB::connection();
        $created_at = date('yy/m/d h:i:s');
        $query      = "INSERT INTO news(title,description,image,created_at) VALUE (?,?,?,?)";
        try {
            $stmt = $connection->prepare($query);
            $stmt->bindParam(1, $title);
            $stmt->bindParam(2, $description);
            $stmt->bindParam(3, $image);
            $stmt->bindParam(4, $created_at);
            $stmt->execute();
            $stmt->closeCursor();
            DB::close();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function detail($id)
    {
        $connection = DB::connection();
        $query      = "SELECT * FROM news WHERE id = :id";

        try {
            $stmt = $connection->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetchAll(2);
            DB::close();

            return $result;
        } catch (Exception $e) {

            return false;
        }
    }

    public function update($id, $title, $description, $image)
    {

        $connection = DB::connection();
        $query      = "UPDATE news SET title= :title, description= :description, image= :image WHERE id= :id";

        try {
            $stmt = $connection->prepare($query);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->closeCursor();

            DB::close();

            return true;
        } catch (Exception $e) {

            return false;
        }
    }

    public function delete($id)
    {
        $connection = DB::connection();
        $query      = "DELETE FROM news WHERE id=:id";

        try {
            $stmt = $connection->prepare($query);
            $stmt->bindValue(':id', $id);

            $stmt->execute();
            $stmt->closeCursor();

            DB::close();

            return true;

        } catch (Exception $e) {

            return false;
        }
    }
}
