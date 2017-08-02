<?php

namespace Scimap\Repository;

use Doctrine\DBAL\Connection;
use Scimap\Entity\Article;

/**
 * Article repository
 */
class ArticleRepository implements RepositoryInterface
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;

  

    public function __construct(Connection $db )
    {
        $this->db = $db;
      
    }

    /**
     * Saves the article to the database.
     *
     * @param \Scimap\Entity\Article $article
     */

   public function save($article)
    {
        $articleData = array(
            'title' => $article->getTitle(),
            'description' => $article->getDescription(),
            
        );
        
        if ($article->getId()) {
            // If a new image was uploaded, make sure the filename gets set.
            $newFile = $this->handleFileUpload($article);
            if ($newFile) {
                $articleData['image'] = $article->getImage();
            }

            $this->db->update('articles', $articleData, array('id' => $article->getId()));
        } else {
            // The article is new, note the creation timestamp.
            $articleData['created_at'] = time();
          //  $articleData['role'] = 'article';

            $this->db->insert('articles', $articleData);
            // Get the id of the newly created article and set it on the entity.
            $id = $this->db->lastInsertId();
            $article->setId($id);

            // If a new image was uploaded, update the article with the new
            // filename.
            $newFile = $this->handleFileUpload($article);
            if ($newFile) {
                $newData = array('image' => $article->getImage());
                $this->db->update('articles', $newData, array('id' => $id));
            }
        }
    }

    /**
     * Handles the upload of a article image.
     *
     * @param \Scimap\Entity\User $article
     *
     * @param boolean TRUE if a new article image was uploaded, FALSE otherwise.
     */
    protected function handleFileUpload($article) {
        // If a temporary file is present, move it to the correct directory
        // and set the filename on the article.
        $file = $article->getFile();
        if ($file) {
            $newFilename = $article->getId() . '.' . $file->guessExtension();
            $file->move(Scimap_PUBLIC_ROOT . '/img/articles', $newFilename);
            $article->setFile(null);
            $article->setImage($newFilename);
            return TRUE;
        }

        return FALSE;
    }
/**
     * Deletes the articles.
     *
     * @param integer $id
     */
    public function delete($id)
    {
        return $this->db->delete('articles', array('id' => $id));
    }

    /**
     * Returns the total number of articless.
     *
     * @return integer The total number of articless.
     */
    public function getCount() {
        return $this->db->fetchColumn('SELECT COUNT(id) FROM articles');
    }

    /**
     * Returns a article matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Scimap\Entity\Articles|false An entity object if found, false otherwise.
     */
    public function find($id)
    {
        $articleData = $this->db->fetchAssoc('SELECT * FROM articles WHERE id = ?', array($id));
        return $articleData ? $this->buildArticle($articleData) : FALSE;
    }

    /**
     * Returns a collection of articless.
     *
     * @param integer $limit
     *   The number of articless to return.
     * @param integer $offset
     *   The number of articless to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of articless, keyed by articles id.
     */
    public function findAll($limit, $offset = 0, $orderBy = array())
    {
        return $this->getArticles(array(), $limit, $offset);
    }

   
    /**
     * Returns a collection of articless for the given conditions.
     *
     * @param integer $limit
     *   The number of articless to return.
     * @param integer $offset
     *   The number of articless to skip.
     * @param array $orderBy
     *   Optionally, the order by info, in the $column => $direction format.
     *
     * @return array A collection of articless, keyed by articles id.
     */
    protected function getArticles(array $conditions, $limit, $offset, $orderBy = array())
    {
        // Provide a default orderBy.
        if (!$orderBy) {
            $orderBy = array('created_at' => 'DESC');
        }

        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('c.*')
            ->from('articles', 'c')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->orderBy('c.' . key($orderBy), current($orderBy));
        $parameters = array();
        foreach ($conditions as $key => $value) {
            $parameters[':' . $key] = $value;
            $where = $queryBuilder->expr()->eq('c.' . $key, ':' . $key);
            $queryBuilder->andWhere($where);
        }
        $queryBuilder->setParameters($parameters);
        $statement = $queryBuilder->execute();
        $articlesData = $statement->fetchAll();

        $articles = array();
        foreach ($articlesData as $articleData) {
            $articleId = $articleData['id'];
            $articles[$articleId] = $this->buildArticle($articleData);
        }
        return $articles;
    }

    /**
     * Instantiates a articles entity and sets its properties using db data.
     *
     * @param array $articlesData
     *   The array of db data.
     *
     * @return \Scimap\Entity\Articles
     */
    protected function buildArticle($articleData)
    {
        // Load the related subscriber and article.
        
        $article = new Article();
        $article->setId($articleData['id']);
        $article->setTitle($articleData['title']);
        $article->setImage($articleData['image']);
         $article->setDescription($articleData['description']);
        $createdAt = new \DateTime('@' . $articleData['created_at']);
        $article->setCreatedAt($createdAt);
    
    return $article;
    }
}
