<?php

class DummyAdmin extends ModelAdmin
{

    private static $managed_models = ['Dummy'];

    static $url_segment = 'dummies';
    static $menu_title = 'Dummy Management';
}
