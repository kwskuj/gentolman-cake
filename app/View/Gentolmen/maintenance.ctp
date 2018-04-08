<div id="maintenance">

    <div id="new_video_url" class="wrap">
        <?php echo $this->Form->create('NewVideoTable') ?>
            <p>最新videoのURL</p>
            <?php 
            echo $this->Form->input('video', array(
                'type' => 'text',
                'id' => 'new_video_url',
                'label' => false
                )); 
            ?>
            <p>最新videoのサムネ画像</p>
            <?php 
            echo $this->Form->input('video_image', array(
                'type' => 'text',
                'id' => 'new_video_img',
                'label' => false
                )); 
            ?>
            <p>最新videoのタイトル</p>
            <?php 
            echo $this->Form->input('title', array(
                'type' => 'text',
                'id' => 'new_video_title',
                'label' => false
                )); 
            ?>
            <p>最新videoの女優名</p>
            <?php 
            echo $this->Form->input('actor', array(
                'type' => 'text',
                'id' => 'new_video_actor',
                'label' => false
                )); 
            ?>
            <p>最新videoの再生時間</p>
            <?php 
            echo $this->Form->input('time', array(
                'type' => 'text',
                'id' => 'new_video_time',
                'label' => false
                )); 
            ?>
            <p>最新videoの国</p>
            <?php 
            echo $this->Form->input('country', array(
                'type' => 'text',
                'id' => 'new_video_country',
                'label' => false
                )); 
            ?>
            <?php echo $this->Form->submit('登録') ?>
        <?php echo $this->Form->end() ?>
    </div>

    <div id="recommend_video_url" class="wrap">
    <?php echo $this->Form->create('RecommendTable') ?>
            <p>おすすめのURL</p>
            <?php 
            echo $this->Form->input('video', array(
                'type' => 'text',
                'id' => 'recommend_video_url',
                'label' => false
                )); 
            ?>
            <p>おすすめのサムネ画像</p>
            <?php 
            echo $this->Form->input('video_image', array(
                'type' => 'text',
                'id' => 'recommend_video_img',
                'label' => false
                )); 
            ?>
            <p>おすすめのタイトル</p>
            <?php 
            echo $this->Form->input('title', array(
                'type' => 'text',
                'id' => 'recommend_video_title',
                'label' => false
                )); 
            ?>
            <p>おすすめの女優名</p>
            <?php 
            echo $this->Form->input('actor', array(
                'type' => 'text',
                'id' => 'recommend_video_actor',
                'label' => false
                )); 
            ?>
            <p>おすすめの再生時間</p>
            <?php 
            echo $this->Form->input('time', array(
                'type' => 'text',
                'id' => 'recommend_video_time',
                'label' => false
                )); 
            ?>
            <p>おすすめvideoの国</p>
            <?php 
            echo $this->Form->input('country', array(
                'type' => 'text',
                'id' => 'recommend_video_country',
                'label' => false
                )); 
            ?>
            <?php echo $this->Form->submit('登録') ?>
        <?php echo $this->Form->end() ?>
    </div>

    <div id="rank_video_url" class="wrap">
    <?php echo $this->Form->create('RankTable') ?>
            <p>ランクのURL</p>
            <?php 
            echo $this->Form->input('video', array(
                'type' => 'text',
                'id' => 'rank_video_url',
                'label' => false
                )); 
            ?>
            <p>ランクのサムネ画像</p>
            <?php 
            echo $this->Form->input('video_image', array(
                'type' => 'text',
                'id' => 'rank_video_img',
                'label' => false
                )); 
            ?>
            <p>ランクのタイトル</p>
            <?php 
            echo $this->Form->input('title', array(
                'type' => 'text',
                'id' => 'rank_video_title',
                'label' => false
                )); 
            ?>
            <p>ランクの女優名</p>
            <?php 
            echo $this->Form->input('actor', array(
                'type' => 'text',
                'id' => 'rank_video_actor',
                'label' => false
                )); 
            ?>
            <p>ランクの再生時間</p>
            <?php 
            echo $this->Form->input('time', array(
                'type' => 'text',
                'id' => 'rank_video_time',
                'label' => false
                )); 
            ?>
            <p>ランクvideoの国</p>
            <?php 
            echo $this->Form->input('country', array(
                'type' => 'text',
                'id' => 'rank_video_country',
                'label' => false
                )); 
            ?>
            <?php echo $this->Form->submit('登録') ?>
        <?php echo $this->Form->end() ?>
    </div>

    <div id="recently_video_url" class="wrap">
        <?php echo $this->Form->create('RecentlyTable') ?>
            <p>最近videoのURL</p>
            <?php 
            echo $this->Form->input('video', array(
                'type' => 'text',
                'id' => 'recently_video_url',
                'label' => false
                )); 
            ?>
            <p>最近videoのサムネ画像</p>
            <?php 
            echo $this->Form->input('video_image', array(
                'type' => 'text',
                'id' => 'recently_video_img',
                'label' => false
                )); 
            ?>
            <p>最近videoのタイトル</p>
            <?php 
            echo $this->Form->input('title', array(
                'type' => 'text',
                'id' => 'recently_video_title',
                'label' => false
                )); 
            ?>
            <p>最近videoの女優名</p>
            <?php 
            echo $this->Form->input('actor', array(
                'type' => 'text',
                'id' => 'recently_video_actor',
                'label' => false
                )); 
            ?>
            <p>最近videoの再生時間</p>
            <?php 
            echo $this->Form->input('time', array(
                'type' => 'text',
                'id' => 'recently_video_time',
                'label' => false
                )); 
            ?>
            <p>最近videoの国</p>
            <?php 
            echo $this->Form->input('country', array(
                'type' => 'text',
                'id' => 'recently_video_country',
                'label' => false
                )); 
            ?>
            <?php echo $this->Form->submit('登録') ?>
        <?php echo $this->Form->end() ?>
    </div>
</div>