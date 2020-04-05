<?php

namespace App\Controller;
use App\Entity\Ponente;
use App\Form\PonenteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro")
     */
    public function index(Request $request)
    {
        $ponente = new Ponente();
        $form = $this->createForm(PonenteType::class, $ponente);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $ponente->getRoles(['ROLE_USER']);
            $em->persist($ponente);
            $em->flush();
            $this->addFlash('exito', 'se ha registrado exitosamente');
            return $this->redirectToRoute('registro');
        }

        return $this->render('registro/index.html.twig', [
      //      'controller_name' => 'RegistroController',
            'formulario'=>$form->createView()
        ]);
    }
}
