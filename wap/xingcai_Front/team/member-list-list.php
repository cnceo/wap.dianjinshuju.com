 <?php
	$sql="select * from {$this->prename}links where enable=1 and uid={$this->user['uid']} limit 1";
	if($_GET['uid']=$this->user['uid']) unset($_GET['uid']);
	$data=$this->getPage($sql, $this->page, $this->pageSize);

	if(!$data['data']){
        $update['uid']=$this->user['uid'];
        $update['type']=1;
        $update['fanDian']=0.1;
        $update['regIP']=$this->ip(true);
        $update['regTime']=$this->time;

        if($update['fanDian']<0) throw new Exception('返点不能小于0');
        if($update['fanDian']>$this->iff($this->user['fanDian']-$this->settings['fanDianDiff']<0,0,$this->user['fanDian']-$this->settings['fanDianDiff'])) throw new Exception('返点不能大于'.$this->iff($this->user['fanDian']-$this->settings['fanDianDiff']<0,0,$this->user['fanDian']-$this->settings['fanDianDiff']));
        if($update['type']!=0 && $update['type']!=1) throw new Exception('类型出错，请重新操作');
        if($update['uid']!=$this->user['uid']) throw new Exception('只能增加自己的推广链接!');

        // 查检返点设置
        if($update['fanDian']){
            $this->getSystemSettings();
            if($update['fanDian'] % $this->settings['fanDianDiff']) throw new Exception(sprintf('返点只能是%.1f%的倍数', $this->settings['fanDianDiff']));
        }else{
            $update['fanDian']=0.0;
        }
        $this->beginTransaction();
        try{
            $sql="select fanDian from {$this->prename}links where uid={$update['uid']} and fanDian=? ";
            if($this->getValue($sql, $update['fanDian'])) throw new Exception('此链接已经存在');
            if($this->insertRow($this->prename .'links', $update)){
                $id=$this->lastInsertId();
                $this->commit();
                return '添加链接成功';
            }else{
                throw new Exception('添加链接失败');
            }

        }catch(Exception $e){
            $this->rollBack();
            $erromsg = $e->getMessage();
            echo "<script>alert(\"$erromsg\");</script>";
        }
        $data=$this->getPage($sql, $this->page, $this->pageSize);
    }

	?>

 <div>
     <div class="row">
         <div class="col-sm-12">
             <div class="ibox float-e-margins">
                 <div class="tab-first clearfix">
                 </div>
                 <div class="ibox-content">
                     <?php
                     $sql="select * from {$this->prename}links where lid=?";
                     if(!$linkData=$this->getRow($sql, $data['data'][0]['lid'])){
                         ?>
                            该注册链接不存在，或者已经失效！
                         <?php
                     }else{
                         $pd = "select * from {$this->prename}members where uid=?";
                         $parentData = $this->getRow($pd, $linkData['uid']);
                         ?>

                         我的推广链接：http://<?=$_SERVER['HTTP_HOST']?>/index.php/user/r/<?=$this->strToHex($this->myxor($linkData['lid']));?>
                         <input type="hidden" id="biao1" readonly="readonly" value="http://<?=$_SERVER['HTTP_HOST']?>/index.php/user/r/<?=$this->strToHex($this->myxor($linkData['lid']));?>" />
                         <input type="button" onClick="copyUrl1()" value="复制" />
<br/>

                     <?php }?>
                 </div>
             </div>
         </div>
     </div>
 </div>


   <script>
    $(document).ready(function() {
              $('.dataTables-example').dataTable( {
              //跟数组下标一样，第一列从0开始，这里表格初始化时，第四列默认降序
                "order": [[ 3, "desc" ]]
              } );
            } );
        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);
        }
    </script>
</body>
</html>