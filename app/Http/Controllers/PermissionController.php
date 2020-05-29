<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use DB;
use Illuminate\Support\Facades\DB;


class PermissionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:permission-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:permission-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $permissions = Permission::orderBy('id', 'DESC')->paginate(10);
        return view('permissions.index', compact('permissions'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        $permission = Permission::get();
        return view('permissions.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name'            
        ]);

        $permission = Permission::create(['name' => $request->input('name')]);
        $permission->syncPermissions($request->input('permission'));

        return redirect()->route('permissions.index')
            ->with('success', 'Role created successfully');
    }

    // public function show($id)
    // {
    //     $role = Permission::find($id);
    //     $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
    //         ->where("role_has_permissions.role_id", $id)
    //         ->get();

    //     return view('permissions.show', compact('permission', 'rolePermissions'));
    // }

    public function edit($id)
    {
        $permission = Permission::find($id);
        // $permission = Permission::get();
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();

        return view('permissions.edit', compact('permission'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'            
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->save();

        $permission->syncPermissions($request->input('permission'));

        return redirect()->route('permissions.index')
            ->with('success', 'Permission updated successfully');
    }

    public function destroy($id)
    {
        DB::table("permissions")->where('id', $id)->delete();
        return redirect()->route('permissions.index')
            ->with('success', 'Permission deleted successfully');
    }


}
