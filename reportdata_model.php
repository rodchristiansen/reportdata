<?php

use munkireport\models\MRModel as Eloquent;

class Reportdata_model extends Eloquent
{
    protected $table = 'reportdata';

    protected $fillable = [
      'serial_number',
      'os_version_win',
      'cpu_win',
      'ram_win',
      'disk_win',      
      'console_user',
      'long_username',
      'uid',
      'remote_ip',
      'uptime',
      'reg_timestamp',
      'machine_group',
      'archive_status',
      'timestamp',
    ];

    public $timestamps = false;
}
