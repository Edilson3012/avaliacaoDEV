<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUsuario;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    private $repository;

    public function __construct(Usuario $user){
        $this->repository = $user;
    }

    public function index(){
        $users = $this->repository->latest()->paginate(10);

        return view('admin.pages.users.index', compact('users'));
    }

    public function create(){

        return view('admin.pages.users.create');
    }

    public function store(StoreUpdateUsuario $request){

        $this->repository->create($request->all());

        return redirect()->route('user.index');

    }

    public function show($id){

        $user = $this->repository->find($id);

        if(!$user){
            return redirect()->back();
        }

        return view('admin.pages.users.show', compact('user'));
    }

    public function destroy(int $id){

        $user = $this->repository->find($id);

        if(!$user){
            return redirect()->back();
        }

        $user->delete();        

        return redirect()->route('user.index');
    }

    public function edit(int $id){

        $user = $this->repository->find($id);

        if(!$user){
            return redirect()->back();
        }

        return view('admin.pages.users.edit', compact('user'));
    }

    public function update(StoreUpdateUsuario $request, int $id){

        $user = $this->repository->find($id);

        if(!$user){
            return redirect()->back();
        }

        $user->update($request->all());

        return redirect()->route('user.index');
    }

    public function seach(Request $request){

        $filters = $request->except('_token');
        $users = $this->repository->search($filters);

        return view('admin.pages.users.index', compact('users', 'filters'));
    }

}
