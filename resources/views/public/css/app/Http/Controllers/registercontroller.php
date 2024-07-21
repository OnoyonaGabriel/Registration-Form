
<?php
namespace App\Http\Controller extends Controller
{
    public function create()
    {
        return view ('register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'reqired|confirmed',
        ]);
        //New User Instance 
        $user = User ::create([
            'name' => 
            $request->input('name'),
            'email'=>
            $request->input('email'),
            'password'=> bcrypt(
                $request->input('password')
            ),
        ]);
        //login the user auth()->login($user);
        //Redirect to the homepage ('if there was a homepage')
        return
        redirect()->route('home');
    }
}




