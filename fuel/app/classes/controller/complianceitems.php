<?php
class Controller_ComplianceItems extends Controller_Template{

	public function action_index()
	{
		$data['complianceItems'] = Model_ComplianceItem::find('all');
		$this->template->title = "ComplianceItems";
		$this->template->content = View::forge('complianceitems/index', $data);

	}
	
	public function action_userIndex($userId)
	{
		// Get the current user
		$currentUser = Model_User::find('first', array('where' => array('id' => $userId)));
		//
		// Get all compliance items for BecauseUsa
		$BecauseUsa = Model_ComplianceItem::find('all', array('where' => array('usa' => '1')));
		// Get all compliance items for BecauseHomeSt
		$BecauseHomeSt =  Model_ComplianceItem::find('all', array('where' => array('homeSt' => $currentUser->home_st)));
		// Get all compliance items for BecauseHomeCity
		$BecauseHomeCity =  Model_ComplianceItem::find('all', array('where' => array('homeCityId' => $currentUser->homecity_id)));
		// Get all compliance items for BecauseWorkCity
		$BecauseWorkCity =  Model_ComplianceItem::find('all', array('where' => array('workCityId' => $currentUser->workcity_id)));
		//
		// 
		$BecauseOnlyHomeCity = array();
		$BecauseHasCar = array();
		$BecauseOnlyHasDLic = array();
		$BecauseHasHome = array();
		$BecauseHasBusiness = array();
		
		foreach ($BecauseHomeCity as $homeCityItem) {
			if ($homeCityItem->cicar != '1' && $homeCityItem->cihome != '1' && $homeCityItem->cibusiness != '1' && $homeCityItem->cidriverslic != '1' && $homeCityItem->cibizlic != '1')
			{
				array_push($BecauseOnlyHomeCity, $homeCityItem);
			}
			if ($homeCityItem->cicar == '1') {
				array_push($BecauseHasCar, $homeCityItem);
			}
			if ($homeCityItem->cidriverslic == '1' && $homeCityItem->cicar != '1') {
				array_push($BecauseOnlyHasDLic, $homeCityItem);
			}
			if ($homeCityItem->cihome == '1') {
				array_push($BecauseHasHome, $homeCityItem);
			}
			
		}
		foreach ($BecauseWorkCity as $workCityItem) {
			if ($workCityItem->cibusiness == '1') {
				array_push($BecauseHasBusiness, $workCityItem);
			}
			
		}	
		
		$AllItemsThisUser = array();
		foreach ($BecauseHomeCity as $item) {
			array_push($AllItemsThisUser, $item);
		}
		foreach ($BecauseHomeSt as $item) {
			array_push($AllItemsThisUser, $item);
		}
		foreach ($BecauseWorkCity as $item) {
			array_push($AllItemsThisUser, $item);
		}
		foreach ($BecauseUsa as $item) {
			array_push($AllItemsThisUser, $item);
		}
		
		
		Debug::dump($AllItemsThisUser, $BecauseOnlyHomeCity, $BecauseHasCar, $BecauseHasHome, $BecauseOnlyHasDLic, $BecauseHasBusiness);
	
		/*
foreach ($data['regulators'] as $regBro) {
			$regCo = Model_Regulator::find('first', array('where' => array('id' => $regBro->id)));
			Debug::dump($userId, $currentUser->homecity_id, $data['regulators'], $regBro, $regCo);
		}
		
		$data['regulators'] = Model_Regulator::find('all');
		
		$this->template->title = "Regulators";
		$this->template->content = View::forge('regulators/index', $data);
		
		
*/
		
		
		
		//$data['complianceItems'] = Model_ComplianceItem::find('all');
		$data['complianceItems'] = $AllItemsThisUser;
		$this->template->title = "ComplianceItems";
		$this->template->content = View::forge('complianceitems/index', $data);

	}
	
	

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('complianceitems');

		if ( ! $data['complianceItem'] = Model_ComplianceItem::find($id))
		{
			Session::set_flash('error', 'Could not find complianceItem #'.$id);
			Response::redirect('complianceitems');
		}

		$this->template->title = "ComplianceItem";
		$this->template->content = View::forge('complianceitems/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_ComplianceItem::validate('create');
			
			if ($val->run())
			{
				$complianceItem = Model_ComplianceItem::forge(array(
					'regulator_id' => Input::post('regulator_id'),
					'ciname' => Input::post('ciname'),
					'cidesc' => Input::post('cidesc'),
					'cicar' => Input::post('cicar'),
					'cihome' => Input::post('cihome'),
					'cibusiness' => Input::post('cibusiness'),
					'cidriverslic' => Input::post('cidriverslic'),
					'cibizlic' => Input::post('cibizlic'),
					'cifreq' => Input::post('cifreq'),
					'cifee' => Input::post('cifee'),
					'cipenaltyfee' => Input::post('cipenaltyfee'),
					'cipenaltydesc' => Input::post('cipenaltydesc'),
				));

				if ($complianceItem and $complianceItem->save())
				{
					Session::set_flash('success', 'Added complianceItem #'.$complianceItem->id.'.');

					Response::redirect('complianceitems');
				}

				else
				{
					Session::set_flash('error', 'Could not save complianceItem.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Complianceitems";
		$this->template->content = View::forge('complianceitems/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('complianceitems');

		if ( ! $complianceItem = Model_ComplianceItem::find($id))
		{
			Session::set_flash('error', 'Could not find complianceItem #'.$id);
			Response::redirect('complianceitems');
		}

		$val = Model_ComplianceItem::validate('edit');

		if ($val->run())
		{
			$complianceItem->regulator_id = Input::post('regulator_id');
			$complianceItem->ciname = Input::post('ciname');
			$complianceItem->cidesc = Input::post('cidesc');
			$complianceItem->cicar = Input::post('cicar');
			$complianceItem->cihome = Input::post('cihome');
			$complianceItem->cibusiness = Input::post('cibusiness');
			$complianceItem->cidriverslic = Input::post('cidriverslic');
			$complianceItem->cibizlic = Input::post('cibizlic');
			$complianceItem->cifreq = Input::post('cifreq');
			$complianceItem->cifee = Input::post('cifee');
			$complianceItem->cipenaltyfee = Input::post('cipenaltyfee');
			$complianceItem->cipenaltydesc = Input::post('cipenaltydesc');

			if ($complianceItem->save())
			{
				Session::set_flash('success', 'Updated complianceItem #' . $id);

				Response::redirect('complianceitems');
			}

			else
			{
				Session::set_flash('error', 'Could not update complianceItem #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$complianceItem->regulator_id = $val->validated('regulator_id');
				$complianceItem->ciname = $val->validated('ciname');
				$complianceItem->cidesc = $val->validated('cidesc');
				$complianceItem->cicar = $val->validated('cicar');
				$complianceItem->cihome = $val->validated('cihome');
				$complianceItem->cibusiness = $val->validated('cibusiness');
				$complianceItem->cidriverslic = $val->validated('cidriverslic');
				$complianceItem->cibizlic = $val->validated('cibizlic');
				$complianceItem->cifreq = $val->validated('cifreq');
				$complianceItem->cifee = $val->validated('cifee');
				$complianceItem->cipenaltyfee = $val->validated('cipenaltyfee');
				$complianceItem->cipenaltydesc = $val->validated('cipenaltydesc');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('complianceItem', $complianceItem, false);
		}

		$this->template->title = "ComplianceItems";
		$this->template->content = View::forge('complianceitems/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('complianceitems');

		if ($complianceItem = Model_ComplianceItem::find($id))
		{
			$complianceItem->delete();

			Session::set_flash('success', 'Deleted complianceItem #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete complianceItem #'.$id);
		}

		Response::redirect('complianceitems');

	}


}
