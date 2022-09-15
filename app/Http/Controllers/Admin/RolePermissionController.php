<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function index()
    {
        //for role and permission
        if (!auth()->user()->ability(['admin'],['manage_roles_permissions','show_roles_permissions'])){
            return redirect('admin/index');
        }
        // search by this query
        //1-keyword
        //2-status
        //3-sort_by
        //4-order_by
        //5-limit_by
        $roles = Role::query()
            ->where('name','<>', 'admin')
            ->where('name','<>', 'teacher')
            ->where('name','<>', 'parent')
//            ->where('name','<>', 'student')
            ->when(\request()->keyword !=null, function ($q){$q->search(\request()->keyword);})
            ->orderBy(\request()->sort_by ?? 'id', \request()->order_by ?? 'desc')
            ->paginate(\request()->limit_by ?? 1 );

        return view('admin.roles_permissions.index', compact('roles'));
    }
}
