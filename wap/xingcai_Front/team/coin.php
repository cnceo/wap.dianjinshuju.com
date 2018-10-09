<?php $this->display('inc_daohang1.php'); ?>
<script type="text/javascript" src="/js/nsc_m/res.js?v=1.16.12.4"></script>
<script type="text/javascript">
function searchCoinLog(err, data){
	if(err){
		xingcai(err);
	}else{
		$('.biao-cont').html(data);
	}
}
</script>
   <section class="wraper-page">
<div class="ibox-title">
                        <h5>帐变记录 <small></small></h5>
                        
                    </div>
     <form action="/index.php/team/searchCoin" dataType="html" target="ajax" call="searchCoinLog">
      
      <div class="input-daterange input-group" style="PADDING-TOP: 6;">
                                <input type="text" class="input-sm form-control" value="<?= $this->iff($_REQUEST['fromTime'], $_REQUEST['fromTime'], date('Y-m-d H:i', $GLOBALS['fromTime'])) ?>" name="fromTime" id="startTime">
                                <span class="input-group-addon">到</span>
                                <input type="text" class="input-sm form-control" value="<?= $this->iff($_REQUEST['toTime'], $_REQUEST['toTime'], date('Y-m-d H:i', $GLOBALS['toTime'])) ?>" name="toTime" id="endTime">
                            </div>
        <div id="searchBox" class="re">
        	<div class="input-append input-group" >					
			<span class="input-group-btn">	
			<button class="btn btn-white" >帐变类型</button>	
			</span>				
			 <select class="input-large form-control" id="methodid"  name="liqType" style="width:50%;">
              <option value="">所有帐变类型</option>
            <option value="1">账户充值</option>
            <option value="52">充值佣金</option>
			  </select>
			   <select class="input-large form-control" name="userType" style="width:50%;">
            <option value="1" selected>我自己</option>
            <option value="2">直属下线</option>
             <option value="3" >所有下线</option>
       </select>
			</div>
			
        </div>
		<div class="search_br">
		 <input type="submit" class="btn btn-primary btn-sm" value="查询"></input>
        <!--div class="search_br"><input type="button" value="查询" class="formCheck chazhao" /></div-->
		</div>
    </form>
<style type="text/css">
.search_br {padding-top:10px;height:45px;text-align: center;color: #666;}
</style> 
<div class="display biao-cont">
<?php $this->display('team/coin-log.php'); ?>
 </div>