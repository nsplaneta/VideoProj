<?php


namespace App\Utils;

use App\Utils\AbstractClasses\CategoryTreeAbstract;

class CategoryTreeAdminOptionList extends CategoryTreeAbstract{

    public function getCategoryList(array $categories_array, int $repeat = 0){

        foreach ($categories_array as $value){

            $catId = $value['id'];
            $catName = $value['name'];
            $this->categorylist[] = ['name'=> str_repeat("+",$repeat).$catName, 'id'=>$catId];
            if (!empty($value['children'])){
                $repeat += 2;
                $this->getCategoryList($value['children'], $repeat);
                $repeat -= 2;
            }

        }

        return $this->categorylist;
    }
}