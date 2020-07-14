<?php
 namespace App\Utils;

 use App\Twig\AppExtension;
 use App\Utils\AbstractClasses\CategoryTreeAbstract;

 class CategoryTreeAdminList extends CategoryTreeAbstract {

     public $ul='<ul class="fa-ul text-left list-group list-group-flush">';
     public $eul='</ul>';
     public $li='<li class="list-group-item"><h6>';
     public $eli='</h6></li>';
     public $hsmall='<small>';
     public $esmall='</small>';
     public $href='<a href="';
     public $ehref='">';
     public $ea='</a>';
     public $onclick = "<a onclick=\"return confirm('Are you sure?');\" href=\"";

     public function getCategoryList(array $categories_array) {

         $this->categorylist .= $this->ul;

         foreach ($categories_array as $value){

             $catId = $value['id'];
             $urlEdit = $this->urlgenerator->generate('edit_cat', ['id'=>$catId]);
             $urlDelete = $this->urlgenerator->generate('delete_cat', ['id'=>$catId]);
             $this->categorylist .= $this->li.$value['name'].$this->hsmall.' { '.$this->href.$urlEdit.$this->ehref.' edit '.$this->ea.' }  { '.$this->onclick.$urlDelete.$this->ehref.'delete'.$this->ea.' } '.$this->esmall;
             if (!empty($value['children'])){
                 $this->getCategoryList($value['children']);
             }
             $this->categorylist .= $this->eli;
         }
         $this->categorylist .= $this->eul;
         dump($this->categorylist );
         return $this->categorylist;
     }

 }