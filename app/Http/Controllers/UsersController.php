<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * 显示所有用户列表的页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * 显示创建新用户的界面
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * 显示登录的界面
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function loginCreate()
    {
        return view('users.login');
    }

    /**
     * 创建用户
     *
     * @param  \App\Http\Requests\StoreUser  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $validated = $request->validated();
        $user = User::create([
            'user_name' => $validated['user_name'],
            'user_account' => $validated['user_account'],
            'password' => bcrypt($validated['password']),
        ]);
        session()->flash('success', '注册成功');
        return redirect()->route('users.show', [$user]);
    }

    /**
     * 显示用户个人信息的页面
     *
     * @param  App\Models\User  $user
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * 显示编辑用户个人资料的页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 更新用户
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除用户
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
