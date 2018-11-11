<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    protected function getArticle(int $id)
    {
        $data = $this->article->find($id);
        return view('article', $data);
    }
}
