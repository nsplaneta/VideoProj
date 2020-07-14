<?php
namespace App\Controller\Admin\Superadmin;

use App\Entity\Categories;
use App\Utils\CategoryTreeAdminOptionList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\CategoryTreeAdminList;
use App\Form\CategoryType;

/**
 * @Route("/profile/admin")
 */

class CategoryController extends AbstractController
{
    /**
     * @Route("/categories", name="categories", methods={"GET","POST"})
     */
    public function categories(CategoryTreeAdminList $categories, Request $request){

        $cat = $categories->getCategoryList($categories->buildTree());

        $category = new Categories();
        $form = $this->createForm(CategoryType::class ,$category);
        $form->handleRequest($request);
        $invalid = null;

        if($this->saveCategory($category, $form, $request)) {

            return $this->redirectToRoute('categories');

        }
        elseif($request->isMethod('post')){

            $invalid = 'is-invalid';
        }

        return $this->render('admin/categories.html.twig', [
            'subcategories' => $cat,
            'form' => $form->createView(),
            'invalid' => $invalid
        ]);
    }
    /**
     * @Route("/edit-category/{id}", name="edit_cat")
     */
    public function editCategory($id, Request $request)
    {
        $categories = $this->getDoctrine()->getRepository(Categories::class)->find($id);
        $category = new Categories();
        $form = $this->createForm(CategoryType::class ,$category);
        $form->handleRequest($request);
        $invalid = null;
        if($this->saveCategory($category, $form, $request)) {

            return $this->redirectToRoute('categories');

        }
        elseif($request->isMethod('post')){

            $invalid = 'is-invalid';
        }
        return $this->render('admin/edit_category.html.twig', [
            'category' => $categories,
            'form' => $form->createView(),
            'invalid' => "$invalid"
        ]);
    }

    /**
     * @Route("/delete-category/{id}", name="delete_cat")
     */
    public function deleteCategory($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $deleteUser = $entityManager->getRepository(Categories::class);
        $category = $deleteUser->find($id);
        if (!$category){
            throw $this->createNotFoundException('No User Found for id: '.$id);
        }
        $entityManager->remove($category);
        $entityManager->flush();
        return $this->redirectToRoute('categories');
    }

    public function getAllCategories(CategoryTreeAdminOptionList $categories, $editedCategory = null){

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $categories->getCategoryList($categories->buildTree());
        return $this->render('admin/all_categories.html.twig',
            ['categories'=>$categories,
                'editedCategory'=>$editedCategory
            ]);
    }

    private function saveCategory($category, $form, $request)
    {
        if($form->isSubmitted() && $form->isValid()) {

            $category->setName($request->request->get('category')['name']);
            $parent = $this->getDoctrine()->getRepository(Categories::class)->find($request->request->get('category')['parent']);
            $category->setParent($parent);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            return true;
        }
        return false;
    }
}