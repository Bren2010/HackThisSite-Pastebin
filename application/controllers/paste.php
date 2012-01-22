<?php
class controller_paste extends Content {
    
    var $name = 'paste';
    var $model = 'pastes';
    var $db = 'mongo';
    var $permission = '';
    var $createForms = array('paste', 'language', 'expiration', 'exposure', '?title', 'captcha');
    var $location = 'lecture';
    
    public function view($arguments) {
        if (empty($arguments[0]))
            return Error::set('No paste id found.');
        
        $model = new $this->model(ConnectionFactory::get($this->db));
        $paste = $model->get($arguments[0]);
        
        if (is_string($paste))
            return Error::set($paste);
        
        Layout::set('title', (empty($paste['title']) ? 'Untitled' : $paste['title']));
        $this->view['valid'] = true;
        $this->view['paste'] = $paste;
        $this->view['modelInfo'] = array('exposures' => $model->exposures);
        
        if (!empty($arguments[1]) && $arguments[1] == 'raw') {
            Layout::selectLayout('nil');
            $this->setView('paste/rawView');
        }
    }
    
}
