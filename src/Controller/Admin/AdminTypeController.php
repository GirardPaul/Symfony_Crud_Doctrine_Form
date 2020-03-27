<?php

namespace App\Controller\Admin;

use App\Entity\Type;
use App\Form\TypeType;
use App\Repository\TypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminTypeController extends AbstractController
{
    /**
     * @Route("/admin/type", name="admin_types")
     */
    public function index(TypeRepository $repository)
    {
        $types = $repository->findAll();
        return $this->render('admin_type/adminType.html.twig', [
            "types" => $types
        ]);
    }


    /**
     * @Route("/admin/type/create", name="ajoutType")
     * @Route("/admin/type/{id}", name="modifType", methods="POST|GET")
     */
    public function ajoutEtModif(Type $type = null, HttpFoundationRequest $request, EntityManagerInterface $objectManager)
    {

        if(!$type){
            $type = new Type();
        }

        $form = $this->createForm(TypeType::class, $type);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $objectManager->persist($type);
            $objectManager->flush();
            $this->addFlash('success', "La modification a été effectuée");
            return $this->redirectToRoute("admin_types");

        }

        return $this->render('admin_type/ajoutEtModif.html.twig', [
            "type" => $type,
            "form" => $form->createView()
        ]);
    }

     /**
     * @Route("/admin/type/{id}", name="deleteType", methods="delete")
     */
    public function deleteType(Type $type, HttpFoundationRequest $request, EntityManagerInterface $objectManager)
    {
        if($this->isCsrfTokenValid('SUP'.$type->getId(), $request->get('_token'))){

            $objectManager->remove($type);
            $objectManager->flush();
            $this->addFlash('success', "La suppression a bien été effectuée");
            return $this->redirectToRoute("admin_types");
        }
    }

}