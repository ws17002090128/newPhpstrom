<?php
class Role
{
    public $id;
    public $name;
    public $permissions;

    public function __construct($role)
    {
        if (is_string($role)) {
            $Role = DB::getRoleByName($role);
        } else {
            $Role = DB::getRoleById($role);
        }
        if ($Role) {
            $this->id = $Role[0];
            $this->name = $Role[1];
            $this->permissions = $this->getPermissions();
        }
    }}


