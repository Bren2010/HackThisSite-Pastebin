<?php
class comments extends mongoBase {
    
    var $db;
    
    public function __construct($connection) {
        $this->db = $connection->{Config::get('mongo:db')};
    }
    
    public function create($id, $text) {
        $content = new contents(ConnectionFactory::get('mongo'));
        $entry = $content->getById($id);
        
        if (empty($entry))
			return 'Invalid content ID.';
		if (empty($entry['commentable']))
			return 'This is not commentable.';

        $ref = MongoDBRef::create('users', Session::getVar('_id'));
        return $this->db->content->insert(array('type' => 'comment', 'contentId' => (string) $id, 
            'ghosted' => false, 'user' => $ref, 'text' => $this->clean($text), 'date' => time()));
    }
    
    public function get($id, $cache = false, $idlib = false, $justOne = false, $page = false) {
        if ($justOne)
            return $this->getById($id);
        
        $pageLimit = 10;
        $comments = $this->db->content->find(array('type' => 'comment', 'contentId' => $this->clean($id), 'ghosted' => false),
        array('user' => 1, 'date' => 1, 'text' => 1))->skip(($page - 1) * $pageLimit)->limit($pageLimit);
        $comments = iterator_to_array($comments);
        
        foreach ($comments as $key => $comment) {
            $comments[$key]['user'] = MongoDBRef::get($this->db, $comment['user']);
        }
        
        return $comments;
    }
    
    public function getById($id) {
        $comment = $this->db->content->findOne(array('type' => 'comment', '_id' => $this->_toMongoId($id)));
        if (empty($comment))
            return 'Invalid comment Id.';

        $comment['user'] = MongoDBRef::get($this->db, $comment['user']);
        return $comment;
    }
    
    public function edit($id, $contentId, $text) {
        return $this->db->content->update(array('type' => 'comment', '_id' => $this->_toMongoId($id)),
            array('$set' => array('text' => $this->clean($text))));
    }
    
    public function delete($id) {
        return $this->db->content->update(array('type' => 'comment', 
			'_id' => $this->_toMongoId($id)), 
			array('$set' => array('ghosted' => true)));
    }
    
    public function authChange($type, $comment) {
        return (CheckAcl::can($type . 'AllComment') || (CheckAcl::can($type . 'Comment') && 
            Session::getVar('username') == $comment['user']['username']));
    }
}
