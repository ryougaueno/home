<?php

require_once('Model.php');

class Task extends Model
{

    // プロパティ
    protected $table = 'tasks';

    public function create($data)
    {
        // DBに保存
        // このクラスのインスタンスの
        // db_managerプロパティの
        // DbManagerクラスのインスタンス
        // dbhプロパティの
        // PDOのインスタンス
        // prepareメソッドを実行
        // INSERT INTO (カラム名, ,) VALUES (値, 値, 値,)
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (title, contents, created) VALUES (?, ?, ?)');
        $stmt->execute($data);
    }

    public function update($data)
    {
        // データの更新
        $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET title = ?, contents = ? WHERE id = ?');
        $stmt->execute($data);
    }

    public function findByTitle($data)
    {
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE title LIKE ?');
        $stmt->execute($data);
        $tasks = $stmt->fetchAll();
        // var_dump($data, $tasks);die;
        return $tasks;
    }
    
}


class Comment extends Model
{

    // プロパティ
    protected $table = 'comment';

    
    // var_dump($data);die;
    public function create($data)
    {
        // DBに保存
        // このクラスのインスタンスの
        // db_managerプロパティの
        // DbManagerクラスのインスタンス
        // dbhプロパティの
        // PDOのインスタンス
        // prepareメソッドを実行
        // INSERT INTO (カラム名, ,) VALUES (値, 値, 値,)
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (id,title, contents, created) VALUES (?, ?, ?, ?)');
        $stmt->execute($data);
    }

    // public function update($data)
    // {
    //     // データの更新
    //     $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET, title = ?, contents = ? WHERE id = ?');
    //     $stmt->execute($data);
    // }

    public function findByTitle($data)
    {
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE title LIKE ?');
        $stmt->execute($data);
        $comment = $stmt->fetchAll();
        // var_dump($data, $tasks);die;
        return $comment;
    }
    
}
