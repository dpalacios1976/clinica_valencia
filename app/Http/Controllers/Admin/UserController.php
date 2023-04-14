<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserPassUpdateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Doctor;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

/**
 * UserController
 * 
 * Class for user management
 * 
 * @author Darwin Palacios
 */
class UserController extends Controller
{
    use ApiResponse;

    /**
     * Display index Admin
     */
    public function index_admin()
    {
        $data['users_count'] = User::activo()->count();
        
        $data['users'] = User::activo()
            ->select('name','email','created_at')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        $data['roles_count'] = Role::count();
        $data['roles'] = Role::select('name','created_at')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        return view('admin.index', $data);
    }

    /**
     * Display index for Rol Admin
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $users = User::query()
            ->select('id','name', 'username', 'email', 'active', 'created_at')
            ->get();

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function searchDoctors(Request $request)
    {
        $search = $request->input('search');
        $search = strtoupper($search);

        $doctors = Doctor::query()
            ->where('names', 'like', '%'.$search.'%')
            ->activo()
            ->select('id', 'names')
            ->get();

        if ($doctors->isEmpty()) 
        {
            return $this->jsonFail("Inconvenient","Sin coincidencias para el texto ingresado");
        } else {
            return $this->jsonSuccess('Medicos', $doctors->toArray());
        }
    }

    public function create() 
    {
        $data['roles'] = Role::select('id', 'name')->get();
        
        return view('admin.users.create', $data);
    }

    public function store(UserCreateRequest $request)
    {
        $retorno = null;
        try {
            $user = new User();
            $user->name = strtoupper($request->fullname);
            $user->username = strtolower($request->user);
            if ($request->has('cedula')) {
                $user->cedula = $request->cedula;
            }
            $user->email = $request->mail;
            $user->password = Hash::make($request->pass);
            $user->save();

            $user->roles()->sync($request->roles);

            $doctor = Doctor::find($request->medicos);
            $doctor->user_id = $user->id;
            $doctor->save();

            $retorno = $this->jsonCreated("Usuario creado correctamente");

        } catch (\Throwable $th) {
            //throw $th;
            $retorno = $this->jsonFail("Inconvenient",$th->getMessage());
            // $retorno = $this->jsonFail("Inconvenient", "Inconveniente al guardar registro");
        }
        return $retorno;
    }

    public function edit(User $user)
    {
        $roles = Role::select('id', 'name')->get();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(User $user, UserUpdateRequest $request)
    {
        try {
            $user->name = ucwords($request->fullname);
            $user->username = strtolower($request->user);
            if ($request->has('cedula')) {
                $user->cedula = $request->cedula;
            }
            $user->email = $request->mail;
            $user->save();

            if ($request->has('roles')) {
                $user->roles()->sync($request->roles);
            }

            $doctor = Doctor::find($request->medicos);
            $doctor->user_id = $user->id;
            $doctor->save();

            return $this->jsonSuccess("Usuario actualizado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    public function updatePass(User $user, UserPassUpdateRequest $request)
    {
        // if (Auth::user()->id === $user->id) {
        //     return $this->jsonSuccess("Contraseña actualizada correctamente");
        // }

        try {
            if (!Hash::check($request->old_pass, $user->password)) 
            {
                return $this->jsonErrorValidate("La contraseña antigua no coincide");
            }

            $user->password = Hash::make($request->newpass);
            $user->save();

            return $this->jsonSuccess("Contraseña actualizada correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient", $th->getMessage());
        }
    }

    public function userInactive(User $user)
    {
        try {
            $user->active = 0;
            $user->save();

            return $this->jsonSuccess("Usuario desactivado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    public function userActive(User $user)
    {
        try {
            $user->active = 1;
            $user->save();

            return $this->jsonSuccess("Usuario activado correctamente");
        } catch (\Throwable $th) {
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    // Relacion (1 a 1)
    // (table) User ->  (table) Medico
    //          id              user_id

}
