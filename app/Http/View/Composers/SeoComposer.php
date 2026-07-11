<?php

namespace App\Http\View\Composers;

use App\Support\Seo;
use Illuminate\View\View;

class SeoComposer
{
    public function compose(View $view): void
    {
        if ($view->offsetExists('seo') && $view->getData()['seo'] instanceof Seo) {
            return;
        }

        $overrides = $view->offsetExists('seo') ? $view->getData()['seo'] : null;

        $view->with('seo', Seo::resolve(is_array($overrides) ? $overrides : null));
    }
}
