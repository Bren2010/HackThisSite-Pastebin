<?php
class pastes extends mongoBase {
    
    const KEY_DB     = "mongo:db";
    
    private $db;
    
    public $languages = array('none', 'php');
    public $expirations = array('never' => INF, '10m' => 600);
    public $exposures = array('public' => 1, 'private' => 0);
    public function __construct(Mongo $mongo)
    {
        $db           = Config::get(self::KEY_DB);
        $this->db = $mongo->$db;
    }
    
    public function getNew() {
        return $this->db->content->find(array('ghosted' => false, 'exposure' => 1))->sort(array('date' => -1))->limit(9);
    }
    
    public function get($id, $cache = true, $idlib = true) {
        if ($cache && apc_exists('paste_' . $id)) return apc_fetch('paste_' . $id);

        $paste = $this->realGet($id, $idlib);
        if ($cache && !empty($paste)) apc_add('paste_' . $id, $paste, 10);
        return $paste;
    }
    
    public function create($paste, $language, $expiration, $exposure, $title, $captcha) {
        $key = 'captcha_' . $_SERVER['REMOTE_ADDR'];
        if (strtolower(apc_fetch($key)) != strtolower($captcha))
            return 'Incorrect captcha.';
        if (apc_exists('block_' . $_SERVER['REMOTE_ADDR']))
            return 'You can\'t post another paste within 30 seconds.';
        if (!in_array($language, $this->languages, true))
            return 'Invalid language choice.';
        if (!isset($this->expirations[$expiration]))
            return 'Invalid expiration choice';
        if (!isset($this->exposures[$exposure]))
            return 'Invalid exposure choice.';
        
        $last = $this->db->kvStore->findOne(array('key' => 'last'));
        
        if (empty($last)) {
            $this->db->kvStore->update(array('key' => 'last'), array('key' => 'last', 'value' => 1), array('upsert' => true));
            $last = 1;
        } else {
            $last = $last['value'] + 1;
            $this->db->kvStore->update(array('key' => 'last'), array('$set' => array('value' => $last)));
        }
        
        $shortId = base_convert($last, 10, 36);
        
        apc_add('block_' . $_SERVER['REMOTE_ADDR'], true, 30);
        $mongo = $this->db->content->insert(array('shortId' => $shortId, 'paste' => $this->clean($paste), 'language' => $language, 
            'expiration' => time() + $this->expirations[$expiration], 'exposure' => $this->exposures[$exposure], 
            'title' => $this->clean($title), 'creator' => session_id(), 'ip' => $_SERVER['REMOTE_ADDR'], 'date' => time(), 'ghosted' => false));
        return array('mongo' => $mongo, 'id' => $shortId);
    }
    
    private function realGet($id, $idLib) {
        if ($idLib) {
            $idLib = new Id;

            $query = array('ghosted' => false);
            $keys = $idLib->dissectKeys($this->clean($id), 'paste');

            $query['shortId'] = $keys['shortId'];
        } else {
            $query = array('_id' => $this->_toMongoId($id), 'ghosted' => false);
        }

        $results = $this->db->content->findOne($query);

        if (empty($results))
            return 'No paste by that id found.';
        
        return $results;
    }
    
    
    public function authChange($change, $entry) {
        switch ($change) {
            case 'create':
                return true;  // Checking for banned addresses can be added in future
                break;
        }
        
        return null;
    }
    
}
