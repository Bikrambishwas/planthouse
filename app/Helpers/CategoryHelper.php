<?php

namespace App\Helpers;

use App\Models\Admin\Taxonomies as AdminTaxonomies;
use App\Models\Taxonomies;

class CategoryHelper
{
    public static function renderCategories($categories, $prefix = '', $level = 0)
    {
        $html = '';
        foreach ($categories as $category) {
            $indentation = str_repeat('&nbsp;', $level * 5); // Add spaces based on the level
            if ($category->parent != 0) {
                $html .= '<option value="' . $category->id . '">' . $indentation . $category->title . '</option>';
            } else {
                $html .= '<option value="' . $category->id . '" style="display: none;">' . $indentation . $category->title . '</option>';
            }
            if ($category->children->isNotEmpty()) {
                $html .= self::renderCategories($category->children, $prefix, $level + 1);
            }
        }
        return $html;
    }

    public static function renderMenuItems($items)
    {
        if (!is_array($items)) {
            $items = [];
        }
        $html = '';
        foreach ($items as $item) {
            $itemType = trim($item['type']);
            $html .= '<li class="sortable-item" draggable="true">';
            $html .= '<div class="item-header">';
            $html .= '<p class="fs-13 fw-bold mb-0">' . $item['title'] . '</p>';
            $html .= '<span class="toggle-details fs-13">' . $item['type'] . ' <i class="fa-solid fa-caret-down"></i></span>';
            $html .= '</div>';
            $html .= '<div class="item-details collapsed">';
            $html .= '<label>Label</label>';
            $html .= '<input type="text" class="form-control menu-label" value="' . $item['title'] . '">';
            if ($itemType !== 'custom') {
                $html .= '<input type="hidden" class="form-control menu-url" value="' . $item['url'] . '">';
                $html .= '<div class="original">Original: <a href="#">' . $item['title'] . '</a></div>';

            }else{
                $html .= '<label>Url</label>';
                $html .= '<input type="text" class="form-control menu-url" value="' . $item['url'] . '">';
            }
            $html .= '<div class="remove-cancel">';
            $html .= '<a href="#" class="text-danger remove-item">Remove</a> ';
            $html .= '</div>';
            $html .= '</div>';

            // Always start a <ul> for children
            if (!empty($item['children'])) {
                $html .= '<ul>';
                $html .= self::renderMenuItems($item['children']);
                $html .= '</ul>';
            } else {
                // Ensure an empty <ul> is added even if there are no children
                $html .= '<ul></ul>';
            }

            $html .= '</li>';
        }
        return $html;
    }

}

