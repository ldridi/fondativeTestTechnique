<?php

namespace Blog\BlogBundle\Controller;

use Blog\BlogBundle\Entity\Article;
use Blog\BlogBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }

    /**
     * Using this method to Transforme articles to json
     * @return tous les articles en json
     */
    public function getAllArticleAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findAll();

        $nombreArticle = count($em->getRepository('BlogBundle:Article')->findAll());

        $articlesArray = array();

        if($articles) {

            $articlesArray = array();

        } else {

            $articlesArray = array("Vide");
        }

        foreach ($articles as $article){

            $image = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath().'/imageArticle/'.$article->getImage()->getPath();

            array_push($articlesArray, array(

                'idArticle' => $article->getId(),
                'titreArticle' => $article->getTitreArticle(),
                'descriptionArticle' => $article->getDescriptionArticle(),
                'dateArticle' => $article->getDateArticle()->format('m/d/Y'),
                'imageArticle' => $image

            ));

        }

        return new JsonResponse(array(
            'nombre' => $nombreArticle,
            'articles' => $articlesArray
        ));

    }


    /**
     * @param $id
     * @return article
     */
    public function detailsAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('BlogBundle:Article')->findOneBy(array('id'=>$id));

        return $this->render('BlogBundle:Default:details.html.twig', array('article'=>$article));

    }

    /**
     * Using this function to add Comment
     * @param $id
     * @return article
     */
    public function addCommentAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ArticleId = $this->get('request')->request->get('ArticleId');

        $textComment = $this->get('request')->request->get('textComment');

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $article = $em->getRepository('BlogBundle:Article')->findOneBy(array('id'=>$ArticleId));

        $comment = new Comment();

        $comment->setClient($user);

        $comment->setArticle($article);

        $comment->setTexteCommentaire($textComment);

        $comment->setDateCommentaire(new \Date('now'));

        $em->persist($comment);

        $em->flush();

        return new JsonResponse('ok');

    }
}
