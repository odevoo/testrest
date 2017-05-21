<?php /* app/Model/ProductModel.php */
namespace Model;


use \W\Model\ConnectionModel;

class NewsModel extends \W\Model\UsersModel
{
    private $title;
    private $img;
    private $content;
    
    
    
    


    public function __construct($title ='', $img = '', $content = '') {

        $this->setTitle($title);
        $this->setImg($img);
        $this->setContent($content);
        
        $this->setTable('news');
        $this->setPrimaryKey('id_news');
        $this->dbh = ConnectionModel::getDbh();
    }

    //    Set
    public function setTitle($title) {
        $this->title= $title;
    }
    public function setImg($img) {
        $this->img= $img;
    }
    public function setContent($content) {
        $this->content = $content;
    }
    


    //    Get
    public function geTitle() {
        return $this->title;
    }
    public function getImg() {
        return $this->img;
    }
    public function getContent() {
        return $this->content;
    }
   


    // public function isTeacher($id)
    // {
    //     $sql = 'SELECT is_teacher FROM users
    //             WHERE id = :id';
    //     $stmt = $this->dbh->prepare($sql);
    //     $stmt->bindValue(':id', $id);
    //     $stmt->execute();
    //     $isTeacher = $stmt->fetch();
    //     return $isTeacher;
    // }

    // public function findAllTeachers() {
    //     $sql = 'SELECT * FROM users WHERE is_teacher = 1';
    //     $stmt = $this->dbh->prepare($sql);
    //     $stmt->execute();
    //     $teachers = $stmt->fetchAll();
    //     return $teachers;
    // }

    // public function findAllTeachersBySubject($id) {
    //     $sql = 'SELECT * FROM users AS u, expertises AS e, levels AS l 
    //             WHERE u.is_teacher = 1 AND e.id_subject = :id AND e.id_teacher = u.id AND l.id = u.id_level
    //             ';
    //     $stmt = $this->dbh->prepare($sql);
    //     $stmt->execute(array(':id' => $id));
    //     $teachers = $stmt->fetchAll();
    //     return $teachers;
    // }



}
