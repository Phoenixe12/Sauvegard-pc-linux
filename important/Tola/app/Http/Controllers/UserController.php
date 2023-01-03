<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
      {
        $users = User::all();
        return view('Back.user.index', compact('users'));
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('Back.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|max:100', 
            'email'=>'required|max:150',
           // 'sexe'=>'required|max:100',
           // 'nation'=>'required|max:100',
            'password'=>'required|max:150',  
            //'telephone'=>'required|max:60'
        ]);
        $save=new User;
        $save->name=$request->name;
        $save->email=$request->email;
       // $save->sexe=$request->sexe;
        //$save->role=$request->role;
        $save->password=$request->password;
        $save->password=$request->password_confirmation;
       // $save->telephone=$request->telephone;
       // $save->description=$request->description; 
        
        $save->save();
        return BACK()->with('message', "L*utilisateur a bien ete cree !");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
       return view('Back.user.show', compact('user'));
       if($user->etat == '0')
       {
        $etat= '1';
        $message='user active';
       }
       else
        {
        $etat= '0';
        $message='user desactive';
       }
    $user->etat=$etat;
    $user->save();
    return BACK()->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
         return view('BACK.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validatedData=$request->validate([
            'name'=>'required|max:100', 
            'email'=>'required|max:150',
           // 'sexe'=>'required|max:100',
           // 'nation'=>'required|max:100',
            'password'=>'required|max:150',  
            //'telephone'=>'required|max:60'
        ]);
        $save=User::find($id);
        $save->name=$request->name;
        $save->email=$request->email;
       // $save->sexe=$request->sexe;
        //$save->role=$request->role;
        $save->password=$request->password;
        $save->password=$request->password_confirmation;
       // $save->telephone=$request->telephone;
       // $save->description=$request->description; 
        
        $save->save();
        return BACK()->with('message', "L*utilisateur a bien ete Modifie !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
     $message='';
     $erreur='';
     if ($user->etat==1) 
            {
            $message="user Supprime avec success";
            $user->delete();
             } 
            else{ $erreur="Suppression du user non autorise";}
            if ($message!='') 
            { return BACK()->with('message', $message);}
           else
           { return BACK()->with('erreur', $erreur);}
           
    }
}
