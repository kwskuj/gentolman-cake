<?php
App::uses('AppController', 'Controller');
 
class GentolmenController extends AppController {
  
  var $uses = array(
    'NewVideoTable',
    'RecommendTable',
    'RankTable',
    'RecentlyTable',
    'AllVideoTable'
  );

  function index(){
    //トップページ
  }

  function all_video(){
    //全動画表示ページ
  }
  
  /**
   * 最新videoの取得
   */
  function new_video_data(){
    $this->autoRender = false; 
    $result = $this->NewVideoTable->find('all');

    return json_encode($result);
  }
  /**
   * おすすめvideoの取得
   */
  function recommend_data(){
    $this->autoRender = false; 
    $result = $this->RecommendTable->find('all');

    return json_encode($result);
  }
  /**
   * ランク動画の取得
   */
  function rank_data(){
    $this->autoRender = false; 
    $result = $this->RankTable->find('all');

    return json_encode($result);
  }
  /**
   * 最近の動画の取得
   */
  function recently_data(){
    $this->autoRender = false; 
    $result = $this->RecentlyTable->find('all');

    return json_encode($result);
  }
  /**
   * インサート
   */
  function maintenance(){
    if($this->request->is('post')){
        $this->AllVideoTable->save($this->request->data);
        if($this->NewVideoTable->save($this->request->data));
        if($this->RecommendTable->save($this->request->data));
        if($this->RankTable->save($this->request->data));
        if($this->RecentlyTable->save($this->request->data));
    }
  }

}