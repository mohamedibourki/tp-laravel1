<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class article extends Component
{
    public string $img;
    public string $titre;
    public string $para;
    public string $url;
    
    /**
     * Create a new component instance.
     */
    public function __construct($img, $titre, $para, $url)
    {
        $this->img = $img;
        $this->titre = $titre;
        $this->para = $para;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
