<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlInv extends Model
{
    use HasFactory;

    protected $fillable = [
        'weir_id',
        'waterctrl_erosion',
        'waterctrl_subsidence',
        'waterctrl_cracking',
        'waterctrl_obstruction',
        'waterctrl_hole',
        'waterctrl_leak',
        'waterctrl_movement',
        'waterctrl_drainage',
        'waterctrl_weed',
        'waterctrl_damage',
        'waterctrl_remake',

        'sidewall_erosion',
        'sidewall_subsidence',
        'sidewall_cracking',
        'sidewall_obstruction',
        'sidewall_hole',
        'sidewall_leak',
        'sidewall_movement',
        'sidewall_drainage',
        'sidewall_weed',
        'sidewall_damage',
        'sidewall_remake',

        'dgfloor_erosion',
        'dgfloor_subsidence',
        'dgfloor_cracking',
        'dgfloor_obstruction',
        'dgfloor_hole',
        'dgfloor_leak',
        'dgfloor_movement',
        'dgfloor_drainage',
        'dgfloor_weed',
        'dgfloor_damage',
        'dgfloor_remake',

        'dgwall_erosion',
        'dgwall_subsidence',
        'dgwall_cracking',
        'dgwall_obstruction',
        'dgwall_hole',
        'dgwall_leak',
        'dgwall_movement',
        'dgwall_drainage',
        'dgwall_weed',
        'dgwall_damage',
        'dgwall_remake',

        'dggate_erosion',
        'dggate_subsidence',
        'dggate_cracking',
        'dggate_obstruction',
        'dggate_hole',
        'dggate_leak',
        'dggate_movement',
        'dggate_drainage',
        'dggate_weed',
        'dggate_damage',
        'dggate_remake',

        'dgmachanic_erosion',
        'dgmachanic_subsidence',
        'dgmachanic_cracking',
        'dgmachanic_obstruction',
        'dgmachanic_hole',
        'dgmachanic_leak',
        'dgmachanic_movement',
        'dgmachanic_drainage',
        'dgmachanic_weed',
        'dgmachanic_damage',
        'dgmachanic_remake',

        'dgblock_erosion',
        'dgblock_subsidence',
        'dgblock_cracking',
        'dgblock_obstruction',
        'dgblock_hole',
        'dgblock_leak',
        'dgblock_movement',
        'dgblock_drainage',
        'dgblock_weed',
        'dgblock_damage',
        'dgblock_remake',

        'waterbreak_erosion',
        'waterbreak_subsidence',
        'waterbreak_cracking',
        'waterbreak_obstruction',
        'waterbreak_hole',
        'waterbreak_leak',
        'waterbreak_movement',
        'waterbreak_drainage',
        'waterbreak_weed',
        'waterbreak_damage',
        'waterbreak_remake',

        'bridge_erosion',
        'bridge_subsidence',
        'bridge_cracking',
        'bridge_obstruction',
        'bridge_hole',
        'bridge_leak',
        'bridge_movement',
        'bridge_drainage',
        'bridge_weed',
        'bridge_damage',
        'bridge_remake',

        'check_used_control'
    ];
}
