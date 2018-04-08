<?php
App::uses('AppController', 'Controller');
 
class MySampleDatasController extends AppController {
  var $uses = array('MySampleData', 'NewVideoTable');
  function index(){

    $videos = $this->NewVideoTable->find('all');
    $this->set('videos',$videos);
    $datas = $this->MySampleData->find('all');
    $this->set('datas',$datas);
    
  }
}
