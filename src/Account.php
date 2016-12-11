<?php namespace Enozom\Basecash;


class Account{

	public function create($account_name){

		$account_model = new  Model\Account();

		return $account_name . ' has been created' . $account_model->test();

	}

	
}