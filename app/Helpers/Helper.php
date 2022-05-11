<?php

/**
 * Custom helper class
 * @author Ikrom Rahimov fleck97rgb@gmail.com
 */

namespace App\Helpers;

use App\Models\Text;

class Helper
{
  public static function getGlobalTexts()
  {
    $texts = Text::where('page', null)->get();

    foreach ($texts as $text) {
      $globalTexts[$text->caption] = $text->text;
      $globalTexts[$text->caption . '-id'] = $text->id;
    }

    return $globalTexts;
  }

  public static function getPageTexts($pageName)
  {
    $texts = Text::where('page', $pageName)->get();

    foreach ($texts as $text) {
      $pageTexts[$text->caption] = $text->text;
      $pageTexts[$text->caption . '-id'] = $text->id;
    }

    return $pageTexts;
  }
}
