<?php
namespace App\Controller;
//Entity Notes
use App\Entity\Notes;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController
{

    //add note in db
     public function index(Request $request)
    {
        if ($request->request->count() > 0)
        {
            $note = new Notes();
            $note->setContenu($request->
            request->get('contenu'));
    
            $em = $this->getDoctrine()->
            getManager();
            //prepare the query
            $em->persist($note);
            //save data
            $em->flush();

        }

            //display notes
            $notes = $this->getDoctrine()
            ->getRepository('App\Entity\Notes')
            ->findAll();

            return $this->render(
            'pages/home.html.twig',
            array('notes' => $notes)
            );
    
        }
        
    }





?>