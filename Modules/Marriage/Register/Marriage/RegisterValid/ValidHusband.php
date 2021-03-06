<?php

namespace Modules\Marriage\Register\Marriage\RegisterValid;

use Modules\Marriage\Register\Marriage\RegisterValid\VerifyHusbandInWifeFamily;

use App\User;

trait ValidHusband 
{
    use VerifyHusbandInWifeFamily;

    public function validateHusband()
    {

        
        if(filled($this->data['wife_email'])){

            if(filled($this->husbandUser->profile->husband)){
                dd($this->data);
                $this->familyAuth();
                $this->husbandAuth($this->husbandUser);
            }

        }
        


        if(filled($this->husbandUser->profile->husband) && $this->data['wife_email'] != null){
            $this->familyAuth();
            $this->husbandAuth($this->husbandUser);
        }
     
        if(!empty($this->husbandUser)){
            if($this->married($this->husbandUser)){
                $this->canMarryAgain($this->husbandUser);
            }

        }
        if($this->husbandUser == null && $this->husbandUser->profile->child == null){

        }else if(!empty($this->husbandUser->profile->child)){


            $this->canMarry($this->husbandUser);
            $this->validBirth($this->husbandUser);

        }
        if(session('register')['status'] == 'son'){
            $this->emailAuth();
        }
        if($this->husbandUser == null){
            $this->husbandMarriageDateAuth($this->husbandUser);
        }

    }
}