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

	public function action_createAccount()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validateAccount('createAccount');
			
			if ($val->run())
			{
				$user = Model_User::forge(array(
					'password' => Input::post('password'),
					'email' => Input::post('email'),
					'first_name' => Input::post('first_name'),
					'last_name' => Input::post('last_name'),
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', 'Added user #'.$user->id.'.');
					Response::redirect('users/editHome/'.$user->id);
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
	
	public function action_editHome($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $user = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$val = Model_User::validateHome('editHome');

		if ($val->run())
		{
			
			$homeCity = Model_City::find('first', array(
						'limit' => 1,
                        'where' => array(
                            'zipCode' => Input::post('home_zip')
                        )
                    ));
            			
			$user->homecity_id = $homeCity->id;
			$user->home_city = $homeCity->city;
			$user->home_st = $homeCity->state;
			$user->home_zip = $homeCity->zipCode;

			if ($user->save())
			{
				Session::set_flash('success', 'Updated user #' . $id);
				Response::redirect('users/editWork/'.$id);
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
				
				$user->home_city = $val->validated('home_city');
				$user->home_st = $val->validated('home_st');
				$user->homecity_id = $val->validated('homecity_id');
				$user->home_zip = $val->validated('home_zip');
				
				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/editHome');

	}

	public function action_editWork($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $user = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$val = Model_User::validateWork('editWork');

		if ($val->run())
		{
			$workCity = Model_City::find('first', array(
						'limit' => 1,
                        'where' => array(
                            'zipCode' => Input::post('work_zip')
                        )
                    ));
			
			$user->work_city = $workCity->city;
			$user->work_st = $workCity->state;
			$user->workcity_id = $workCity->id;
			$user->work_zip = $workCity->zipCode;
			
			if ($user->save())
			{
				Session::set_flash('success', 'Updated user #' . $id);
				Response::redirect('users/editOwner/'.$id);
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
				
				$user->work_city = $val->validated('work_city');
				$user->work_st = $val->validated('work_st');
				$user->workcity_id = $val->validated('workcity_id');
				$user->work_zip = $val->validated('work_zip');
				
				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/editWork');

	}

	public function action_editOwner($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $user = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$val = Model_User::validateOwner('editOwner');

		if ($val->run())
		{
			
			$user->ownshome = Input::post('ownshome');
			$user->hasdriverslic = Input::post('hasdriverslic');
			$user->hasautomobile = Input::post('hasautomobile');
			$user->hasbiz = Input::post('hasbiz');
			$user->hasbizlic = Input::post('hasbizlic');

			
			if ($user->save())
			{
				Session::set_flash('success', 'Updated user #' . $id);
				if ($user->hasautomobile == 1)
					Response::redirect('users/editGarage/'.$id);
				else 
					Response::redirect('complianceitems/userIndex/'.$id);
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
				
				$user->ownshome = $val->validated('ownshome');
				$user->hasdriverslic = $val->validated('hasdriverslic');
				$user->hasautomobile = $val->validated('hasautomobile');
				$user->hasbiz = $val->validated('hasbiz');
				$user->hasbizlic = $val->validated('hasbizlic');
				
				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/editOwner');

	}
	
	public function action_editGarage($id = null)
	{
		is_null($id) and Response::redirect('users');

		if ( ! $user = Model_User::find($id))
		{
			Session::set_flash('error', 'Could not find user #'.$id);
			Response::redirect('users');
		}

		$val = Model_User::validateGarage('editGarage');

		if ($val->run())
		{
			
			$user->garage_city = Input::post('garage_city');
			$user->garage_st = Input::post('garage_st');
			$user->garagecity_id = Input::post('garagecity_id');
			
			if ($user->save())
			{
				Session::set_flash('success', 'Updated user #' . $id);

				Response::redirect('complianceitems/userIndex/'.$id);
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
				
				$user->garage_city = $val->validated('garage_city');
				$user->garage_st = $val->validated('garage_st');
				$user->garagecity_id = $val->validated('garagecity_id');
				
				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('users/editGarage');

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
	
	public function action_login()
	{
        $data = array();
	    
        // If so, you pressed the submit button. Let's go over the steps.
        if (Input::post())
        {
            // Check the credentials. This assumes that you have the previous table created and
            // you have used the table definition and configuration as mentioned above.
            if (Auth::login())
            {
                // Credentials ok, go right in.
                Response::redirect('success_page');
            }
            else
            {
                // Oops, no soup for you. Try to login again. Set some values to
                // repopulate the username field and give some error text back to the view.
                $data['email']    = Input::post('email');
                $data['login_error'] = 'Wrong username/password combo. Try again';
            }
    }

    // Show the login form.
    $this->template->title = "Users";
    $this->template->content = View::forge('users/auth/login',$data);
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
