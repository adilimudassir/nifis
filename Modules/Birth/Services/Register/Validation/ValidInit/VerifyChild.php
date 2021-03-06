<?php

namespace Modules\Birth\Services\Register\Validation\ValidInit;

use App\User;

use Modules\Profile\Entities\Desease;

trait VerifyChild

{
	private $user;

	private $profile;

    private $health;

	public $child;

	public function createUser()
	{
		$this->user = User::create(['first_name'=>$this->data['child_name'],'last_name'=>$this->data['father_first_name']]); 
	}

	public function childProfile()
	{
		$this->profile = $this->user->profile()->firstOrCreate(['gender_id'=>$this->data['gender'],'family_id'=>session('family')['family'],'marital_status_id'=>1,'date_of_birth'=>strtotime($this->data['date'])]);
	}

	public function createChild()
	{
        $this->child = $this->profile->child()->firstOrCreate([]);
	}

	public function createHealth()
	{
		$this->health = Desease::firstOrcreate(['name'=>$this->data['health_status']]);
	}
    
    public function profileHealth()
    {
    	$this->createHealth();
    	$this->profile->health()->firstOrcreate(['desease_id'=>$this->health->id]);
    }
	public function handleChildProfile()
	{
		$this->createUser();
		$this->childProfile();
		$this->profileHealth();
		$this->createChild();
	}
}