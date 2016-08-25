<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['ip','isEmployer','isCandidate','action'];

    public function getActionKey($action) {
        $actions = [
            1 => 'index',
            2 => 'see_pop_candidate',
            3 => 'see_pop_employer',
            4 => 'mail_main_page',
            5 => 'mail_pop_up_candidate',
            6 => 'mail_pop_up_employer'
        ];

        $key = array_search($action, $actions);
        return $key;
    }

    public function setType($type) {
        if($type === 0) {
            $this->isCandidate = true;
        }
        if($type === 1) {
            $this->isEmployer = true;
        }
    }
}
