<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $article;

    public function __construct(Article $article)
    {
        $this->article = new ArticleController;
    }

    protected function getArticle(int $id)
    {
        $data = $this->article->find($id);
        return view('article', $data);
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

    public function whereToFind()
    {
        return $this->getArticle(9);
    }

    public function whatToDo()
    {
        return $this->getArticle(10);
    }
}
