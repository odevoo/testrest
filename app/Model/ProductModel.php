<?php /* app/Model/ProductModel.php */
namespace Model;


use \W\Model\ConnectionModel;

class ProductModel extends \W\Model\UsersModel
{
    private $id_category;
    private $name;
    private $img;
    private $description;
    private $price;
    private $quantity;
    private $streetNum;
    private $address;
    private $city;
    private $postalCode;
    private $lat;
    private $lng;
    
    
    
    


    public function __construct($id_category = '', $name ='', $img = '', $description = '', $price ='', $quantity ='', $streetNum = 0, $address = '', $city = '', $postalCode = '', $lat = 0, $lng = 0) {
        $this->setIdcategory($id_category);
        $this->setName($name);
        $this->setImg($img);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setQuantity($quantity);
        $this->setStreetNumber($streetNum);
        $this->setAddress($address);
        $this->setCity($city);
        $this->setPostalCode($postalCode);
        $this->setLat($lat);
        $this->setLng($lng);
        $this->setTable('products');
        $this->setPrimaryKey('id_product');
        $this->dbh = ConnectionModel::getDbh();
    }

    //    Set
    public function setIdcategory($id_category) {
        $this->id_category = $id_category;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setImg($img) {
        $this->img = $img;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    public function setStreetNumber($streetNum) {
        $this->streetNum = $streetNum;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
    public function setCity($city) {
        $this->city = $city;
    }
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }
    public function setLat($lat) {
        $this->lat = $lat;
    }
    public function setLng($lng) {
        $this->lng = $lng;
    }


    //    Get
    public function getIdcategory() {
        return $this->id_category;
    }
    public function getName() {
        return $this->name;
    }
    public function getImg() {
        return $this->img;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getStreetNumber() {
        return $this->streetNum;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getCity() {
        return $this->city;
    }
    public function getPostalCode() {
        return $this->postalCode;
    }
    public function getLat() {
        return $this->lat;
    }
    public function getLng() {
        return $this->lng;
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
