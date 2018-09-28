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
            $this->permissions=$this->getPermissions();
        }
    }

    public function getPermissions()
    {
        $permission_ids = [];

        foreach (DB::role_permission as $v) {
            $role_id = $v[0];
            $permission_id= $v[1];
            if ($this->id == $role_id) {
                $permission_ids[] = $permission_id;
            }
        }
        return $permission_ids;
    }
}
