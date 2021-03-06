<?php

namespace Modules\Marriage\Register\Marriage\RegisterValid;

use Modules\Family\Entities\Family;

use App\User;

use Modules\Marriage\Register\Marriage\RegisterValid\VerifyHusband;

trait VerifyHusbandInWifeFamily
{

    use VerifyHusband;

	public function familyAuth()
	{
		if($user = User::where('email',$this->data['wife_email'])->get()->isNotEmpty()){
            if($user->profile->family_id == null){
	        	$this->error[] = "Sorry the wife family authentication fails the the wife email does not belongs to any family in our record";
	        }
		}else{
			$this->error[] = "Sorry the wife family authentication fails the the wife email does not exist in our record";
		}
        
	}

    public function husbandAuth(User $user)
    {
        foreach($user->profile->husband->marriages as $marriage){
        	if($marriage->is_active == 1 && $marriage->wife->profile->family_id == Family::where(User::where('email',$this->data['wife_email'])->id->get)->id){
        		if(blank(Family::where('title',$this->data['wife_family'])->get())){
		        	$this->error[] = "Sorry the husband authentication in wife family fails the he has already married in the family";
		        }
        	}
        }
    }

}