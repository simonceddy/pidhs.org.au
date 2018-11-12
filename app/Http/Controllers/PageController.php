<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{
    protected $article;

    public function __construct(Article $article)
    {
        $this->article = new ArticleController($article);
    }

    protected function getArticle(int $id)
    {
        return $this->article->show($id);
    }

    public function home()
    {
        return $this->getArticle(17);
    }

    public function committee()
    {
        return $this->getArticle(4);
    }

    public function constitution()
    {
        return $this->getArticle(8);
    }

    public function area()
    {
        return $this->getArticle(6);
    }

    public function objectives()
    {
        return $this->getArticle(5);
    }

    public function socHistory()
    {
        return $this->getArticle(7);
    }

    public function findUs()
    {
        return $this->getArticle(9);
    }

    public function whatToDo()
    {
        return $this->getArticle(10);
    }

    public function books()
    {
        return $this->getArticle(11);
    }

    public function reports()
    {
        return $this->getArticle(19);
    }

    public function takedown()
    {
        return $this->getArticle(18);
    }

    public function membership()
    {
        return $this->getArticle(13);
    }

    public function contact()
    {
        return $this->getArticle(12);
    }

    public function donate()
    {
        return $this->getArticle(14);
    }

    public function services()
    {
        return $this->getArticle(15);
    }

    public function links()
    {
        return $this->getArticle(16);
    }
}
