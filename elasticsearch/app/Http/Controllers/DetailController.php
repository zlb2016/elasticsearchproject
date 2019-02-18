<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {
        $paginator = [];
        if ($id) {
            $paginator = Article::find($id);
        }
        return view('detail', compact('paginator','id'));
    }
}
