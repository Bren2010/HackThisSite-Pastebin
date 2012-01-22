<?php
class controller_index extends Controller {
    
    public function index($arguments) {
        $model = new pastes(ConnectionFactory::get('mongo'));
        $this->view['new'] = $model->getNew();
        Layout::set('title', 'Home');
    }
}
