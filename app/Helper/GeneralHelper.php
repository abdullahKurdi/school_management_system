<?php

//*************for active link menu in sidebar*********
//for parent
use Illuminate\Support\Facades\Cache;

function getParentShowOf($param){
    $route = str_replace('admin.','',$param);
//    $permission =  \Illuminate\Support\Facades\Cache::get('admin_side_menu')->where('as',$route)->first();
//    return $permission ? $permission->parent_show : $route;
    $permission = collect(Cache::get('admin_side_menu')->pluck('children')->flatten())
        ->where('as', $route)->flatten()->first();
    return $permission ? $permission['parent_show'] : null;
}
//for children
function getChildrenShowOf($param){
    $route = str_replace('admin.','',$param);
//    $permission =  \Illuminate\Support\Facades\Cache::get('admin_side_menu')->where('as',$route)->first();
//    return $permission ? $permission->parent : $route;
    $permission = collect(Cache::get('admin_side_menu')->pluck('children')->flatten())
        ->where('as', $route)->flatten()->first();
    return $permission ? $permission['parent'] : null;
}

//for children id
function getChildrenIdShowOf($param){
    $route = str_replace('admin.','',$param);
//    $permission =  \Illuminate\Support\Facades\Cache::get('admin_side_menu')->where('as',$route)->first();
//    return $permission ? $permission->id : null;
    $permission = collect(Cache::get('admin_side_menu')->pluck('children')->flatten())
        ->where('as', $route)->flatten()->first();
    return $permission ? $permission['id'] : null;
}






