<?php

namespace Larapanel\Larapanel\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AclMenu extends Component
{
    /**
     * The type of menu, modules or manager
     * @var
     */
    public $type;

    public function __construct()
    {

    }

    public function render()
    {
        return view('vendor.larapanel.components.acl.acl_menu');
    }
}
