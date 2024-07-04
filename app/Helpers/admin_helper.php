<?php


use App\Models\GroupModel;

if (!function_exists('onGroup')) {
    /**
     * Example:
     * onGroup()->name;
     * onGroup()->id;
     * onGroup()->description;
     *
     * @param mixed $onGroups
     */
    function onGroup()
    {
        $authenticate = service('authentication');
        $authorize = service('authorization');
        if ($authenticate->check()) {
            $group = (new GroupModel())->getGroupsForName(user()->id);
            return $group;
        }
        return false;
    }
}
