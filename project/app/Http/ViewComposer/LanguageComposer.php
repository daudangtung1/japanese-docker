<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use League\Flysystem\Config;

class LanguageComposer
{
    public $languages = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->languages=config('app.languages');
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('welcome', end($this->languages));
    }
}
