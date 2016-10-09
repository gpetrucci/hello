<?php

namespace app\models;

use yii\base\Model;

class Status extends Model{
	
     const PERMISSION_PRIVATE = 10;
     const PERMISSION_PUBLIC = 20;

     public $text;
     public $permissions;

    
   public function rules(){
	
        return [
                 [['text','permissions'], 'required'],
               ];
   }

   public function getPermissions() {
      return array (self::PERMISSIONS_PRIVATE=>'Private',self::PERMISSIONS_PUBLIC=>'Public');
    }
     
    public function getPermissionsLabel($permissions) {
      if ($permissions==self::PERMISSIONS_PUBLIC) {
        return 'Public';
      } else {
        return 'Private';        
      }
    }
}
?>

