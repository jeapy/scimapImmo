<?php

namespace Scimap\Controller;

use Silex\Application;
use Scimap\Form\Type\SouscrireType;
use Scimap\Form\Type\PlanType;

use Scimap\Entity\Souscrire;
use Scimap\Entity\Plan;

use Scimap\Form\Type\ArticleType;
use Scimap\Entity\Article;

use Scimap\Form\Type\MediaType;
use Scimap\Entity\Media;


use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class AdministrationController
{
    public function indexAction(Request $request, Application $app)
    {
       $totalS = $app['repository.souscrire']->getCount();
        $totalN = $app['repository.newsletter']->getCount();
         $totalU = $app['repository.user']->getCount();

        $data= array(
           'sous'=> $totalS,
           'news'=> $totalN,
           'usr'=> $totalU,
        );
        return $app['twig']->render('admin/dashbord.html.twig',$data);
    }

     public function souscripteurAction(Request $request, Application $app)
    {
    	// Perform pagination logic.
        $limit = 10;
        $total = $app['repository.plan']->getCount();
        $numPages = ceil($total / $limit);
        $currentPage = $request->query->get('page', 1);
        $offset = ($currentPage - 1) * $limit;

        $artists = $app['repository.plan']->findAll($limit, $offset);
        // Divide artists into groups of 4.
        

        $data = array(
            'artists' => $artists,
            'currentPage' => $currentPage,
            'numPages' => $numPages,
            'here' => $app['url_generator']->generate('souscripteur'),
        );
        return $app['twig']->render('admin/souscripteur.html.twig', $data);
    }

   
    public function souscripteurShowAction(Request $request, Application $app)
    {
    	// Perform pagination logic.
       $subscribe_id = $request->get('subscribe');
        if (!$subscribe_id) {
            $app->abort(404, 'The requested artist was not found.');
        }

         $subscribe = $app['repository.plan']->find($subscribe_id);
        // Divide artists into groups of 4.
        

        $data = array(
            'subscribe' =>  $subscribe,
           
        );
        return $app['twig']->render('admin/souscripteur_show.html.twig', $data);
    }

     public function addArticleAction(Request $request, Application $app)
    {    
        $article = new Article();
        $form = $app['form.factory']->create(ArticleType::class, $article);

    $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid()) {
               
                $app['repository.article']->save($article);
                $message = 'L\'article ' . $article->getTitle() . ' a été bine enregistré.';
                $app['session']->getFlashBag()->add('articleSuccess', $message);
                // Redirect to the edit page.
                $redirect = $app['url_generator']->generate('article_edit', array('article' => $article->getId()));
                return $app->redirect($redirect);
            }
        

        $data = array(
            'form' => $form->createView()
        );
        return $app['twig']->render('admin/addArticle.html.twig', $data);
    }

     public function editArticleAction(Request $request, Application $app)
    {    
        $article_id = $request->get('article');
        if (!$article_id) {
            $app->abort(404, 'The requested article was not found.');
        }
        $article = $app['repository.article']->find($article_id);     

        $editForm = $app['form.factory']->create(ArticleType::class, $article);

    $editForm->handleRequest($request);

     if ($editForm->isSubmitted() && $editForm->isValid()) {
               
                $app['repository.article']->save($article);
                $message = 'L\'article ' . $article->getTitle() . ' a été bine enregistré.';
                $app['session']->getFlashBag()->add('editArticleSuccess', $message);
                // Redirect to the edit page.
                $redirect = $app['url_generator']->generate('article_edit', array('article' => $article->getId()));
                return $app->redirect($redirect);
            }
        

        $data = array(
            'editForm' => $editForm->createView()
        );
        return $app['twig']->render('admin/editArticle.html.twig', $data);
    }

    public function articleAction(Request $request, Application $app)
    {
    	// Perform pagination logic.
        $limit = 10;
        $total = $app['repository.article']->getCount();
        $numPages = ceil($total / $limit);
        $currentPage = $request->query->get('page', 1);
        $offset = ($currentPage - 1) * $limit;

        $articles = $app['repository.article']->findAll($limit, $offset);
        // Divide artists into groups of 4.
        

        $data = array(
            'articles' =>  $articles ,
            'currentPage' => $currentPage,
            'numPages' => $numPages,
            'here' => $app['url_generator']->generate('articles'),
        );
        return $app['twig']->render('admin/article.html.twig', $data);
    }


    public function addMediaAction(Request $request, Application $app)
    {    
        $media = new Media();
        $form = $app['form.factory']->create(MediaType::class, $media);

    $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid()) {
               
                $app['repository.media']->save($media);
                $message = 'L\'media ' . $media->getId() . ' a été bine enregistré.';
                $app['session']->getFlashBag()->add('mediaSuccess', $message);
                // Redirect to the edit page.
                $redirect = $app['url_generator']->generate('media_edit', array('media' => $media->getId()));
                return $app->redirect($redirect);
            }
        

        $data = array(
            'form' => $form->createView()
        );
        return $app['twig']->render('admin/addMedia.html.twig', $data);
    }

     public function editMediaAction(Request $request, Application $app)
    {    
        $media_id = $request->get('media');
        if (!$media_id) {
            $app->abort(404, 'The requested media was not found.');
        }
        $media = $app['repository.media']->find($media_id);     

        $editForm = $app['form.factory']->create(MediaType::class, $media);

    $editForm->handleRequest($request);

     if ($editForm->isSubmitted() && $editForm->isValid()) {
               
                $app['repository.media']->save($media);
                $message = 'L\'media ' . $media->getId() . ' a été bine enregistré.';
                $app['session']->getFlashBag()->add('editMediaSuccess', $message);
                // Redirect to the edit page.
                $redirect = $app['url_generator']->generate('media_edit', array('media' => $media->getId()));
                return $app->redirect($redirect);
            }
        

        $data = array(
            'editForm' => $editForm->createView()
        );
        return $app['twig']->render('admin/editMedia.html.twig', $data);
    }

    public function mediaAction(Request $request, Application $app)
    {
        // Perform pagination logic.
        $limit = 10;
        $total = $app['repository.media']->getCount();
        $numPages = ceil($total / $limit);
        $currentPage = $request->query->get('page', 1);
        $offset = ($currentPage - 1) * $limit;

        $medias = $app['repository.media']->findAll($limit, $offset);
        // Divide artists into groups of 4.
        

        $data = array(
            'medias' =>  $medias ,
            'currentPage' => $currentPage,
            'numPages' => $numPages,
            'here' => $app['url_generator']->generate('medias'),
        );
        return $app['twig']->render('admin/medias.html.twig', $data);
    }

    public function excelAction(Request $request, Application $app)
    {

    
        $newsletters = $app['repository.newsletter']->findAllForExcell(array());
        
       $ea = new \PHPExcel(); // ea is short for Excel Application

    $ea->getProperties()
   ->setCreator('Scimap Immobilier')
   ->setTitle('Newsletter subscriber')
   ->setLastModifiedBy('Scimap Immobilier')
   ->setDescription('A newsletter user subscriber')
   ->setSubject('PHP Excel usable')
   ->setKeywords('excel php office phpexcel jpzconception scimap')
   ->setCategory('programming')
   ;

    $ews = $ea->getSheet(0);
    $ews->setTitle('newsletter');

    $ews->setCellValue('a1', 'ID'); 
    $ews->setCellValue('b1', 'Adresse email');


    $ews->fromArray(  $newsletters, ' ', 'A2');

    $header = 'a1:b1';
    $ews->getStyle($header)->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('00ffff00');
    $style = array(
    'font' => array('bold' => true,),
    'alignment' => array('horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,),
    );
    $ews->getStyle($header)->applyFromArray($style);

    

    $writer = \PHPExcel_IOFactory::createWriter($ea, 'Excel2007');
            

     $writer->save('fic/output_'.date('dmyHi').'.xlsx');

        $limit = 10;
        $total = $app['repository.newsletter']->getCount();
        $numPages = ceil($total / $limit);
        $currentPage = $request->query->get('page', 1);
        $offset = ($currentPage - 1) * $limit;

        $newsletters = $app['repository.newsletter']->findAll($limit, $offset);
        // Divide artists into groups of 4.
          $path = "fic/";        
        $files = array_diff(scandir($path,SCANDIR_SORT_DESCENDING), array('.', '..'));
  

        $data = array(
            'news' =>  $newsletters,
            'currentPage' => $currentPage,
            'numPages' => $numPages,
            'here' => $app['url_generator']->generate('newsletter'),
             'files' => $files,
        );
        return $app['twig']->render('admin/newsletters.html.twig', $data);
    }

     public function newsletterAction(Request $request, Application $app)
    {   
       /* $dir = 'fic';
        if (is_dir($dir))
        {
                foreach(glob($dir.'/*.*') as $file) {
                    $results_array =array();
                    $results_array = $file;
        }
          }  */

        $path = "fic/";        
        $files = array_diff(scandir($path,SCANDIR_SORT_DESCENDING), array('.', '..'));
  
     
        // Perform pagination logic.
        $limit = 10;
        $total = $app['repository.newsletter']->getCount();
        $numPages = ceil($total / $limit);
        $currentPage = $request->query->get('page', 1);
        $offset = ($currentPage - 1) * $limit;

        $newsletters = $app['repository.newsletter']->findAll($limit, $offset);
        // Divide artists into groups of 4.
        

        $data = array(
            'news' =>  $newsletters,
            'currentPage' => $currentPage,
            'numPages' => $numPages,
            'here' => $app['url_generator']->generate('newsletter'),
            'files' => $files,
        );
        return $app['twig']->render('admin/newsletters.html.twig', $data);
    }

public function profilAction(Request $request, Application $app)
    {
        // Perform pagination logic.
       $profil_id = $request->get('profil');
        if (!$profil_id) {
            $app->abort(404, 'The requested profil was not found.');
        }

         $profil = $app['repository.user']->find($profil_id);
        // Divide artists into groups of 4.
        

        $data = array(
            'profil' =>  $profil,
           
        );
        return $app['twig']->render('admin/profil.html.twig', $data);
    }
    

  }

