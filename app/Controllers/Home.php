<?php

namespace controllers;

use app\Controllers\BaseController;

class Home extends BaseController {
    protected function Index() {
        $viewModel ="DATA";
        $this->RenderView($viewModel);
    }
}
?>
