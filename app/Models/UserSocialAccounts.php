<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccounts extends Model
{
  protected $table = 'user_social_accounts';

  protected $fillable = ['user_id', 'social_id', 'provider'];

  public function members()
  {
    return $this->belongsTo('App\User', 'user_id');
  }
}
