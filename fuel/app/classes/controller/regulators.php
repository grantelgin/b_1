<?php
class Controller_Regulators extends Controller_Template{

	public function action_index()
	{
		$data['regulators'] = Model_Regulator::find('all');
		$this->template->title = "Regulators";
		$this->template->content = View::forge('regulators/index', $data);

	}
	
	public function action_indexUser($userId)
	{
	/*
$data['regulators'] = Model_Regulator::find('all', array(
                        'where' => array(
                            'city_id' => $user->
                        )
                    ));
*/
	$currentUser = Model_User::find('first', array('where' => array('id' => $userId)));
	$data['regulators'] = Model_Map_RegulatorsCity::find('all', array('where' => array('city_id' => $currentUser->homecity_id)));
	foreach ($data['regulators'] as $regBro) {
		$regCo = Model_Regulator::find('first', array('where' => array('id' => $regBro->id)));
		Debug::dump($userId, $currentUser->homecity_id, $data['regulators'], $regBro, $regCo);
		}
		$data['regulators'] = Model_Regulator::find('all');
		$this->template->title = "Regulators";
		$this->template->content = View::forge('regulators/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('regulators');

		if ( ! $data['regulator'] = Model_Regulator::find($id))
		{
			Session::set_flash('error', 'Could not find regulator #'.$id);
			Response::redirect('regulators');
		}

		$this->template->title = "Regulator";
		$this->template->content = View::forge('regulators/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Regulator::validate('create');
			
			if ($val->run())
			{
				$regulator = Model_Regulator::forge(array(
					'regname' => Input::post('regname'),
					'regweb' => Input::post('regweb'),
					'regadddesc' => Input::post('regadddesc'),
					'regstreet1' => Input::post('regstreet1'),
					'regstreet2' => Input::post('regstreet2'),
					'regcityid' => Input::post('regcityid'),
					'regadddesc2' => Input::post('regadddesc2'),
					'regaddstreet12' => Input::post('regaddstreet12'),
					'regaddstreet22' => Input::post('regaddstreet22'),
					'regcity2' => Input::post('regcity2'),
					'regadddesc3' => Input::post('regadddesc3'),
					'regaddstreet13' => Input::post('regaddstreet13'),
					'regaddstreet23' => Input::post('regaddstreet23'),
					'regcity3' => Input::post('regcity3'),
					'regphone' => Input::post('regphone'),
					'reglogo' => Input::post('reglogo'),
				));

				if ($regulator and $regulator->save())
				{
					Session::set_flash('success', 'Added regulator #'.$regulator->id.'.');

					Response::redirect('regulators');
				}

				else
				{
					Session::set_flash('error', 'Could not save regulator.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Regulators";
		$this->template->content = View::forge('regulators/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('regulators');

		if ( ! $regulator = Model_Regulator::find($id))
		{
			Session::set_flash('error', 'Could not find regulator #'.$id);
			Response::redirect('regulators');
		}

		$val = Model_Regulator::validate('edit');

		if ($val->run())
		{
			$regulator->regname = Input::post('regname');
			$regulator->regweb = Input::post('regweb');
			$regulator->regadddesc = Input::post('regadddesc');
			$regulator->regstreet1 = Input::post('regstreet1');
			$regulator->regstreet2 = Input::post('regstreet2');
			$regulator->regcityid = Input::post('regcityid');
			$regulator->regadddesc2 = Input::post('regadddesc2');
			$regulator->regaddstreet12 = Input::post('regaddstreet12');
			$regulator->regaddstreet22 = Input::post('regaddstreet22');
			$regulator->regcity2 = Input::post('regcity2');
			$regulator->regadddesc3 = Input::post('regadddesc3');
			$regulator->regaddstreet13 = Input::post('regaddstreet13');
			$regulator->regaddstreet23 = Input::post('regaddstreet23');
			$regulator->regcity3 = Input::post('regcity3');
			$regulator->regphone = Input::post('regphone');
			$regulator->reglogo = Input::post('reglogo');

			if ($regulator->save())
			{
				Session::set_flash('success', 'Updated regulator #' . $id);

				Response::redirect('regulators');
			}

			else
			{
				Session::set_flash('error', 'Could not update regulator #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$regulator->regname = $val->validated('regname');
				$regulator->regweb = $val->validated('regweb');
				$regulator->regadddesc = $val->validated('regadddesc');
				$regulator->regstreet1 = $val->validated('regstreet1');
				$regulator->regstreet2 = $val->validated('regstreet2');
				$regulator->regcityid = $val->validated('regcityid');
				$regulator->regadddesc2 = $val->validated('regadddesc2');
				$regulator->regaddstreet12 = $val->validated('regaddstreet12');
				$regulator->regaddstreet22 = $val->validated('regaddstreet22');
				$regulator->regcity2 = $val->validated('regcity2');
				$regulator->regadddesc3 = $val->validated('regadddesc3');
				$regulator->regaddstreet13 = $val->validated('regaddstreet13');
				$regulator->regaddstreet23 = $val->validated('regaddstreet23');
				$regulator->regcity3 = $val->validated('regcity3');
				$regulator->regphone = $val->validated('regphone');
				$regulator->reglogo = $val->validated('reglogo');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('regulator', $regulator, false);
		}

		$this->template->title = "Regulators";
		$this->template->content = View::forge('regulators/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('regulators');

		if ($regulator = Model_Regulator::find($id))
		{
			$regulator->delete();

			Session::set_flash('success', 'Deleted regulator #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete regulator #'.$id);
		}

		Response::redirect('regulators');

	}


}
