<?php

namespace Bulkly;

use Illuminate\Database\Eloquent\Model;

class BufferPosting extends Model
{
   public function groupInfo()
    {
        return $this->hasOne(SocialPostGroups::Class, 'id', 'group_id');
    }
   public function accountInfo()
    {
        return $this->hasOne(SocialAccounts::Class, 'id', 'account_id');
    }

    public function info()
    {
        return $this->belongsTo('Bulkly\SocialPostGroups',  'group_id','id');
    }

    public function account()
    {
        return $this->belongsTo(SocialAccounts::Class, 'account_id','id' );
    }
    

}
