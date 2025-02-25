<?php

use App\Models\Admin\Menus;


    if (!function_exists('get_menu_by_id')) {
        function get_menu_by_id($id)
            {
                $row = Menus::find($id);
                if (!$row) {
                    return null;
                }
                $menustructure = unserialize($row->menu_structure);
                $menustructure = json_decode($menustructure);
                return $menustructure;
            }
    }

    if (!function_exists('get_menu')) {
        function get_menu()
            {
                $row = Menus::where('show', 1)->first();
                if (!$row) {
                    return null;
                }
                $menustructure = unserialize($row->menu_structure);
                $menustructure = json_decode($menustructure);

                return $menustructure;

            }
    }



