<?php
namespace Modules\Marriage\Register\Marriage\RegisterEnd;

use Modules\Marriage\Register\Marriage\ProfileHandle;
use Modules\Profile\Entities\Profile;
use Modules\Marriage\Entities\Husband;

class MarriageInitiate extends ProfileHandle
{

    public $wife;

    public function createWife(Profile $profile)
    {
        if(!$this->wifeProfile->wife()){
        	$this->wife = $this->wifeProfile->wife()->create([]);
        }else{
        	$this->wife = $this->wifeProfile->wife();
        }	
    }

    public $husband;

    public function createHusband(Profile $profile)
    {
        if(!$this->husnadProfile->husband()){
        	$this->husband = $husbandProfile->husband()->create([]);
        }else{
        	$this->husband = $this->husnadProfile->husband();
        }	
    }

    public function createMarriage(Husband $husband)
    {
        $husband->marriage()->create(['wife_id'=>$this->wife->id,'date'=>strtotime($data['mdate'])]);
    }
}