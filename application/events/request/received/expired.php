<?php
class events_request_received_expired {
    
    const KEY_DB = 'mongo:db';
    const SLEEP = 5; // 5 seconds
    const APC_KEY = 'pasteLastClean';
    const DB = 'mongo';
    
    public static function handler() {

        $next = apc_fetch(self::APC_KEY);

        if ($next <= time()) {
            $model = ConnectionFactory::get(self::DB);
            $db = Config::get(self::KEY_DB);
            $model->$db->content->update(array('expiration' => array('$lt' => time())), 
                array('$set' => array('ghosted' => true)));
            apc_store(self::APC_KEY, time() + self::SLEEP);
        }
    }
    
}
