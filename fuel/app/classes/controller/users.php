<?php
class Controller_Users extends Controller_Template{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "Users";
		$this->template->content = View::forge('users/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $data['user'] = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$this->template->title = "User";
		$this->template->content = View::forge('users/view', $data);

	}

/*
	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');
			
			if ($val->run())
			{
				$user = Model_User::forge(array(
					'token' => Input::post('token'),
					'password' => Input::post('password'),
					'email' => Input::post('email'),
					'home_city' => Input::post('home_city'),
					'home_st' => Input::post('home_st'),
					'homecity_id' => Input::post('homecity_id'),
					'work_city' => Input::post('work_city'),
					'work_st' => Input::post('work_st'),
					'workcity_id' => Input::post('workcity_id'),
					'ownshome' => Input::post('ownshome'),
					'hasdriverslic' => Input::post('hasdriverslic'),
					'hasautomobile' => Input::post('hasautomobile'),
					'garage_city' => Input::post('garage_city'),
					'garage_st' => Input::post('garage_st'),
					'garagecity_id' => Input::post('garagecity_id'),
					'hasbiz' => Input::post('hasbiz'),
					'hasbizlic' => Input::post('hasbizlic'),
					'first_name' => Input::post('first_name'),
					'last_name' => Input::post('last_name'),
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', 'Added user #'.$user->id.'.');

					Response::redirect('users');
				}

				else
				{
					Session::set_flash('error', 'Could not save user.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/create');

	}
*/
	
	public function action_createAccount()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validateAccount('createAccount');
			
			if ($val->run())
			{
				$user = Model_User::forge(array(
					'token' => Input::post('token'),
					'password' => Input::post('password'),
					'email' => Input::post('email'),
					'first_name' => Input::post('first_name'),
					'last_name' => Input::post('last_name'),
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', 'Added user #'.$user->id.'.');

					Response::redirect('users/createHome');
				}

				else
				{
					Session::set_flash('error', 'Could not save user.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/createAccount');

	}
	public function action_createHome()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validateHome('createHome');
			
			if ($val->run())
			{
				$user = Model_User::forge(array(
					'home_city' => Input::post('home_city'),
					'home_st' => Input::post('home_st'),
					'homecity_id' => Input::post('homecity_id'),
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', 'Added user #'.$user->id.'.');

					Response::redirect('users');
				}

				else
				{
					Session::set_flash('error', 'Could not save user.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/createHome');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $user = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$val = Model_User::validate('edit');

		if ($val->run())
		{
			$user->token = Input::post('token');
			$user->password = Input::post('password');
			$user->email = Input::post('email');
			$user->home_city = Input::post('home_city');
			$user->home_st = Input::post('home_st');
			$user->homecity_id = Input::post('homecity_id');
			$user->work_city = Input::post('work_city');
			$user->work_st = Input::post('work_st');
			$user->workcity_id = Input::post('workcity_id');
			$user->ownshome = Input::post('ownshome');
			$user->hasdriverslic = Input::post('hasdriverslic');
			$user->hasautomobile = Input::post('hasautomobile');
			$user->garage_city = Input::post('garage_city');
			$user->garage_st = Input::post('garage_st');
			$user->garagecity_id = Input::post('garagecity_id');
			$user->hasbiz = Input::post('hasbiz');
			$user->hasbizlic = Input::post('hasbizlic');
			$user->first_name = Input::post('first_name');
			$user->last_name = Input::post('last_name');

			if ($user->save())
			{
				Session::set_flash('success', 'Updated user #' . $id);

				Response::redirect('users');
			}

			else
			{
				Session::set_flash('error', 'Could not update user #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->token = $val->validated('token');
				$user->password = $val->validated('password');
				$user->email = $val->validated('email');
				$user->home_city = $val->validated('home_city');
				$user->home_st = $val->validated('home_st');
				$user->homecity_id = $val->validated('homecity_id');
				$user->work_city = $val->validated('work_city');
				$user->work_st = $val->validated('work_st');
				$user->workcity_id = $val->validated('workcity_id');
				$user->ownshome = $val->validated('ownshome');
				$user->hasdriverslic = $val->validated('hasdriverslic');
				$user->hasautomobile = $val->validated('hasautomobile');
				$user->garage_city = $val->validated('garage_city');
				$user->garage_st = $val->validated('garage_st');
				$user->garagecity_id = $val->validated('garagecity_id');
				$user->hasbiz = $val->validated('hasbiz');
				$user->hasbizlic = $val->validated('hasbizlic');
				$user->first_name = $val->validated('first_name');
				$user->last_name = $val->validated('last_name');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', 'Deleted user #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete user #'.$id);
		}

		Response::redirect('users');

	}


}
