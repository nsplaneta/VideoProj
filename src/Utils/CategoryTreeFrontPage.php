<?php
namespace App\Utils;

use App\Twig\AppExtension;
use App\Utils\AbstractClasses\CategoryTreeAbstract;

class CategoryTreeFrontPage extends CategoryTreeAbstract {

    public $ul='<ul>';
    public $eul='</ul>';
    public $li='<li class="nav-item">';
    public $eli='</li>';
    public $href='<a href="';
    public $ehref='">';
    public $ea='</a>';

    public function getCategoryListAndParent(int $id): string {


        $parentData = $this->getMainParent($id);
        $this->mainParentName = $parentData['name'];
        $this->mainParentId = $parentData['id'];

        $key = array_search($id, array_column($this->categoriesArrayFromDb, 'id'));
        $this->currentCategoryName = $this->categoriesArrayFromDb[$key]['name'];
        $this->currentCategoryId = $this->categoriesArrayFromDb[$key]['id'];
        $category_array = $this->buildTree($parentData['id']);

        return $this->getCategoryList($category_array);
    }

    public function getCategoryList(array $categories_array) {

        $this->categorylist .= $this->ul;

        $this->slugger = new AppExtension();
        foreach ($categories_array as $value){

            $catName = $this->slugger->slugify($value['name']);
            $catId = $value['id'];
            $url = $this->urlgenerator->generate('video_list', ['category'=>$catName, 'id'=>$catId]);
            $this->categorylist .= $this->li.$this->href.$url.$this->ehref.$value['name'].$this->ea;
            if (!empty($value['children'])){
                $this->getCategoryList($value['children']);
            }
            $this->categorylist .= $this->eli;
        }
        $this->categorylist .= $this->eul;
        return $this->categorylist;
    }

    public function getMainParent(int $id): array {

        $key = array_search($id, array_column($this->categoriesArrayFromDb, 'id'));
        if ($this->categoriesArrayFromDb[$key]['parent_id'] != null){

            return $this->getMainParent($this->categoriesArrayFromDb[$key]['parent_id']);
        }

        else {

            return [
                'id'=>$this->categoriesArrayFromDb[$key]['id'],
                'name'=>$this->categoriesArrayFromDb[$key]['name'],

            ];
        }

    }

    public function getChildIds(int $parent): array
    {
        static $ids = [];
        foreach ($this->categoriesArrayFromDb as $val)
        {
            if($val['parent_id'] == $parent)
            {
                $ids[] = $val['id'].',';
                $this->getChildIds($val['id']);
            }

        }
        return $ids;
    }

}
