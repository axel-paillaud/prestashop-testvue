<?php
if (!defined("_PS_VERSION_")) {
    exit();
}

class TestVue extends Module
{
    public function __construct()
    {
        $this->name = "testvue";
        $this->tab = "front_office_features";
        $this->version = "1.0.0";
        $this->author = "Axel Paillaud";
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            "min" => "1.7.0.0",
            "max" => "8.99.99",
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans(
            "Test vue",
            [],
            "Modules.TestVue.TestVue"
        );
        $this->description = $this->trans(
            "Description of test vue.",
            [],
            "Modules.TestVue.TestVue"
        );

        $this->confirmUninstall = $this->trans(
            "Are you sure you want to uninstall?",
            [],
            "Modules.TestVue.TestVue"
        );

        if (!Configuration::get("MYMODULE_NAME")) {
            $this->warning = $this->trans(
                "No name provided",
                [],
                "Modules.TestVue.TestVue"
            );
        }
    }
}
