<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsArticle extends Component
{
    public $author;
    public $time;
    public $image;
    public function __construct($author, $time, $image)
    {
        $this->author = $author;
        $this->time = $time;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-article');
    }
}
