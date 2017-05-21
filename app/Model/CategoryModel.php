<?php /* app/Model/ProductModel.php */
namespace Model;


use \W\Model\ConnectionModel;

class CategoryModel extends \W\Model\UsersModel
{
    private $name;
    
    
    
    
    


    public function __construct($name ='') {

        $this->setName($name);
        
        $this->setTable('categories');
        $this->setPrimaryKey('id_categorie');
        $this->dbh = ConnectionModel::getDbh();
    }

    //    Set
    public function setName($name) {
        $this->name = $name;
    }
    


    //    Get
    public function getName() {
        return $this->name;
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
