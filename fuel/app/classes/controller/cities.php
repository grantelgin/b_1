<?php
class Controller_Cities extends Controller_Template{

	public function action_index()
	{
		$data['cities'] = Model_City::find('all');
		$this->template->title = "Cities";
		$this->template->content = View::forge('cities/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('cities');

		if ( ! $data['city'] = Model_City::find($id))
		{
			Session::set_flash('error', 'Could not find city #'.$id);
			Response::redirect('cities');
		}

		$this->template->title = "City";
		$this->template->content = View::forge('cities/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_City::validate('create');
			
			if ($val->run())
			{
				$city = Model_City::forge(array(
					'zipcode' => Input::post('zipcode'),
					'state' => Input::post('state'),
					'city' => Input::post('city'),
					'county' => Input::post('county'),
					'latitude' => Input::post('latitude'),
					'longitude' => Input::post('longitude'),
				));

				if ($city and $city->save())
				{
					Session::set_flash('success', 'Added city #'.$city->id.'.');

					Response::redirect('cities');
				}

				else
				{
					Session::set_flash('error', 'Could not save city.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Cities";
		$this->template->content = View::forge('cities/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('cities');

		if ( ! $city = Model_City::find($id))
		{
			Session::set_flash('error', 'Could not find city #'.$id);
			Response::redirect('cities');
		}

		$val = Model_City::validate('edit');

		if ($val->run())
		{
			$city->zipcode = Input::post('zipcode');
			$city->state = Input::post('state');
			$city->city = Input::post('city');
			$city->county = Input::post('county');
			$city->latitude = Input::post('latitude');
			$city->longitude = Input::post('longitude');

			if ($city->save())
			{
				Session::set_flash('success', 'Updated city #' . $id);

				Response::redirect('cities');
			}

			else
			{
				Session::set_flash('error', 'Could not update city #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$city->zipcode = $val->validated('zipcode');
				$city->state = $val->validated('state');
				$city->city = $val->validated('city');
				$city->county = $val->validated('county');
				$city->latitude = $val->validated('latitude');
				$city->longitude = $val->validated('longitude');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('city', $city, false);
		}

		$this->template->title = "Cities";
		$this->template->content = View::forge('cities/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('cities');

		if ($city = Model_City::find($id))
		{
			$city->delete();

			Session::set_flash('success', 'Deleted city #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete city #'.$id);
		}

		Response::redirect('cities');

	}


}
