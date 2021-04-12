<?php

namespace App\Controller;
use App\Entity\Parrot;
use App\Form\ParrotType;
use App\Repository\ParrotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/parrot", name="parrot.")
 */

class ParrotController extends AbstractController
{
    /**
     * @Route("/showAll", name="index")
     * @param ParrotRepository $parrotRepository
     * @return Response
     */
    public function index(ParrotRepository $parrotRepository): Response
    {
        $parrots = $parrotRepository->findAll();

        return $this->render('parrot/index.html.twig', [
            'parrots' => $parrots,
        ]);
    }


    /**
     * @Route("/show/{id}", name="show")
     * @param $id
     * @param ParrotRepository $parrotRepository
     * @return Response
     */
    public function show($id, ParrotRepository $parrotRepository): Response
    {
        $parrot = $parrotRepository->find($id);
        return $this->render('parrot/show.html.twig',[
            'parrot' => $parrot
        ]);
    }


    /**
     * @Route("/create", name="create")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response
    {
        $parrot = new Parrot();

        $form = $this->createForm(ParrotType::class,$parrot);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            dump($parrot);

            $em->persist($parrot);

            $em->flush();

            return $this->redirect($this->generateUrl('parrot.index'));
        }

        return $this->render('parrot/create.html.twig',[
           'form' => $form->createView()
        ]);

    }


}
