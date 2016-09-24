<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * Using this method to return of list of users
     * @return array
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('ClientBundle:Client')->findAll();

        return $this->render('AdminBundle:Default:index.html.twig', array('users' => $users));
    }

    /**
     * Using this method to return of list of articles
     * @return array
     */
    public function articleAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findAll();

        return $this->render('AdminBundle:Default:article.html.twig', array('articles' => $articles));
    }

    /**
     * Using this method to delete an article
     * @param $id
     * @return generateUrl
     */
    public function articleSuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('BlogBundle:Article')->findOneBy(array('id'=>$id));

        $em->remove($article);

        $em->flush();

        return $this->redirect($this->generateUrl('admin_article'));
    }

    /**
     * Using this method to return of list of comments
     * @return array
     */
    public function commentaireAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('BlogBundle:Comment')->findAll();

        return $this->render('AdminBundle:Default:commentaire.html.twig', array('commentaires' => $commentaires));
    }
}
