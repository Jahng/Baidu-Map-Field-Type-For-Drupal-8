<?php

namespace Drupal\baidumap_fieldtype\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal;

/**
 * Plugin implementation of the 'BaidumapFieldtypeDefaultFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "BaidumapFieldtypeDefaultFormatter",
 *   label = @Translation("Baidu Map"),
 *   field_types = {
 *     "BaidumapFieldtype"
 *   }
 * )
 */
class BaidumapFieldtypeDefaultFormatter extends FormatterBase {

  /**
   * Define how the field type is showed.
   * 
   * Inside this method we can customize how the field is displayed inside 
   * pages.
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#theme' => 'baidumap_fieldtype_formatter', 
        '#attached' => [
          'library' => [
            'baidumap_fieldtype/baidumap',
            'baidumap_fieldtype/baidumap.widget_fomatter',
            'baidumap_fieldtype/baidumap.api',
            'baidumap_fieldtype/baidumap.SearchInfoWindow'
          ],
          'drupalSettings' => [
            'baidumap' =>[
               'location' => $item->location,
               'address' => $item->address,
               'phone' => $item->phone,
               'profile' => $item->profile
            ]
          ]
        ]
      ];
    }
    return $elements;
  }
  
} // class