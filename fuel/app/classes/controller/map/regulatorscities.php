<?php
class Controller_Map_RegulatorsCities extends Controller_Template{

	public function action_index()
	{
		$data['map_regulatorsCities'] = Model_Map_RegulatorsCity::find('all');
		$this->template->title = "Map_regulatorsCities";
		$this->template->content = View::forge('map/regulatorscities/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('map/regulatorscities');

		if ( ! $data['map_regulatorsCity'] = Model_Map_RegulatorsCity::find($id))
		{
			Session::set_flash('error', 'Could not find map_regulatorsCity #'.$id);
			Response::redirect('map/regulatorscities');
		}

		$this->template->title = "Map_regulatorsCity";
		$this->template->content = View::forge('map/regulatorscities/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Map_RegulatorsCity::validate('create');
			
			if ($val->run())
			{
				$map_regulatorsCity = Model_Map_RegulatorsCity::forge(array(
					'regulator_id' => Input::post('regulator_id'),
					'city_id' => Input::post('city_id'),
				));

				if ($map_regulatorsCity and $map_regulatorsCity->save())
				{
					Session::set_flash('success', 'Added map_regulatorsCity #'.$map_regulatorsCity->id.'.');

					Response::redirect('map/regulatorscities');
				}

				else
				{
					Session::set_flash('error', 'Could not save map_regulatorsCity.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Map_Regulatorscities";
		$this->template->content = View::forge('map/regulatorscities/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('map/regulatorscities');

		if ( ! $map_regulatorsCity = Model_Map_RegulatorsCity::find($id))
		{
			Session::set_flash('error', 'Could not find map_regulatorsCity #'.$id);
			Response::redirect('map/regulatorscities');
		}

		$val = Model_Map_RegulatorsCity::validate('edit');

		if ($val->run())
		{
			$map_regulatorsCity->regulator_id = Input::post('regulator_id');
			$map_regulatorsCity->city_id = Input::post('city_id');

			if ($map_regulatorsCity->save())
			{
				Session::set_flash('success', 'Updated map_regulatorsCity #' . $id);

				Response::redirect('map/regulatorscities');
			}

			else
			{
				Session::set_flash('error', 'Could not update map_regulatorsCity #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$map_regulatorsCity->regulator_id = $val->validated('regulator_id');
				$map_regulatorsCity->city_id = $val->validated('city_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('map_regulatorsCity', $map_regulatorsCity, false);
		}

		$this->template->title = "Map_regulatorsCities";
		$this->template->content = View::forge('map/regulatorscities/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('map/regulatorscities');

		if ($map_regulatorsCity = Model_Map_RegulatorsCity::find($id))
		{
			$map_regulatorsCity->delete();

			Session::set_flash('success', 'Deleted map_regulatorsCity #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete map_regulatorsCity #'.$id);
		}

		Response::redirect('map/regulatorscities');

	}


}
