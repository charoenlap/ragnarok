<div class="container">
	<div class="row mt-4">
		<div class="col-12">
			จำลองการตีบวก <input type="radio" id="rdo1" class="rdo" name="rdoType" value="0"><label for="rdo1">ปกติ</label>
			<input type="radio" id="rdo2" class="rdo" name="rdoType" value="1" checked><label for="rdo2">กิจกรรม</label> 
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-2">
			<input type="radio" class="rdo" name="rdoLV" id="r1" value="0" checked><labr1el for="">อาวุธเวล 4,เกราะ </label>
		</div>
		<div class="col-2">
			<input type="radio" class="rdo" name="rdoLV" id="r2" value="1"><label for="r2">อาวุธเวล 3 </label>
		</div>
		<div class="col-2">
			<input type="radio" class="rdo" name="rdoLV" id="r3" value="2"><label for="r3">อาวุธเวล 2 </label>
		</div>
		<div class="col-2">
			<input type="radio" class="rdo" name="rdoLV" id="r4" value="3"><label for="r4">อาวุธเวล 1 </label>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="100" id="txt-1">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="100" id="txt-2">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="100" id="txt-3">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="100" id="txt-4">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="95" id="txt-5">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="80" id="txt-6">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="80" id="txt-7">
		</div>
        <div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="60" id="txt-8">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="50" id="txt-9">
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="35" id="txt-10">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="20" id="txt-11" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="20" id="txt-12" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="16" id="txt-13" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="16" id="txt-14" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="15" id="txt-15" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="15" id="txt-16" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="14" id="txt-17" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="14" id="txt-18" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="10" id="txt-19" >
		</div>
		<div class="col-2 col-xs-2 col-sm-2 col-md-2  col-lg-1">
			<input type="text" class="form-control" value="10" id="txt-20" >
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-4">
			Start Form 
			<select name="" id="start" class="form-control">
				<?php for($i=1;$i<=19;$i++){ ?>
                <option value="<?php echo $i;?>" <?php echo ($i==4?'selected':'');?>><?php echo $i;?></option>
				<?php } ?>
			</select>
		</div>
		<div class="col-2">
			ความเร็วในการตี
			<input type="text" id="delay" class="form-control" value="10" placeholder="ความเร็วในการตี">
		</div>
		<div class="col-6">
			&nbsp;
			<input type="button" class="btn btn-primary btn-block" id="btn-start" value="เริ่ม">
		</div>
	</div>
	<hr>
	<div class="row mt-4">
		<div class="col-4">
			count +7 : <span id="c7">0</span><br>
			count +8 : <span id="c8">0</span><br>
			count +9 : <span id="c9">0</span><br>
			count +10 : <span id="c10">0</span><br>
			count +11 : <span id="c11">0</span><br>
			count +12 : <span id="c12">0</span><br>
			count +13 : <span id="c13">0</span><br>
			count +14 : <span id="c14">0</span><br>
			count +15 : <span id="c15">0</span><br>
			count +16 : <span id="c16">0</span><br>
			count +17 : <span id="c17">0</span><br>
			count +18 : <span id="c18">0</span><br>
			count +19 : <span id="c19">0</span><br>
			count +20 : <span id="c20">0</span><br>
		</div>
		<div class="col-8">
			Enrich Oridecon <span id="EOridecion">0</span><br>
			HD Oridecon <span id="HDOridecion">0</span>
			<br><br>
			Round : <span id="roundRefine">0</span><br>
			Now refine : <span id="nowRefine">0</span><br>
			total fail refine under 7 : <span id="fail">0</span><br>
		</div>
	</div>
</div>
<script>
	var rateRefineNormal = [];
	// lv4 armor
	rateRefineNormal[0] = [100,100,100,100,60,40,40,20,20,9,20,20,16,16,15,15,14,14,10,10];
	// lv3
	rateRefineNormal[1] = [100,100,100,100,100,60,50,20,20,19,40,40,35,35,30,30,20,20,15,15];
	// lv2
	rateRefineNormal[2] = [100,100,100,100,100,100,60,40,19,40,40,35,35,30,30,20,20,15,15];
	// lv1
	rateRefineNormal[3] = [100,100,100,100,100,100,100,60,40,19,40,40,35,35,30,30,20,20,15,15];

	// lv4 armor
	var rateRefineEvent = [];
	rateRefineEvent[0] = [100,100,100,100,95,80,80,60,50,35,20,20,16,16,15,15,14,14,10,10];
	// lv3
	rateRefineEvent[1] = [100,100,100,100,100,95,90,70,60,45,40,40,35,35,30,30,20,20,15,15];
	// lv2
	rateRefineEvent[2] = [100,100,100,100,100,100,95,85,60,45,40,40,35,35,30,30,20,20,15,15];
	// lv1
	rateRefineEvent[3] = [100,100,100,100,100,100,100,95,85,55,40,40,35,35,30,30,20,20,15,15];
	$(document).on('click','.rdo',function(e){
		var type = parseInt( $('input[name=rdoType]:checked').val());
		var lv = parseInt( $('input[name=rdoLV]:checked').val());

		console.log(type + '_' + lv);
		if(type == 0){
			for(i=1;i<=20;i++){
				$('#txt-'+i).val( rateRefineNormal[lv][(i-1)] );
			}
		}else{
			for(i=1;i<=20;i++){
				$('#txt-'+i).val( rateRefineEvent[lv][(i-1)] );
			}
		}
	});
	function refine(rate){
		var random = Math.floor(Math.random() * 101);
		var result = false;
		if(random <= rate){
			result = true;
		}else{
			result = false;
		}
		return result;
	}
	function work(element, now,roundRefine) {
	    function do_it() {
	        roundRefine++;
	        var rate = $('#txt-'+(now+1)).val();
	        var result_refine = refine(rate);
	        if(result_refine){
	        	now += 1;
	        }else{
	        	now -=1;
	        	if(now <= 7){
	        		$('#fail').text(parseInt($('#fail').text())+1);
	        		now = parseInt($('#start').val());
	        	}
	        }
	        $('#c'+now).text(parseInt($('#c'+now).text())+1);
	       if(now<=7){
	       		$('#EOridecion').text(parseInt($('#EOridecion').text())+1);
	       }else{
	       		$('#HDOridecion').text(parseInt($('#HDOridecion').text())+1);
	       }
	        $('#nowRefine').text(now);
	        $('#roundRefine').text(roundRefine);
	    }

	    return setInterval(do_it, parseInt($('#delay').val()));
	}
	var intervalid;
	$(document).on('click','#btn-start',function(e){
		var nowRefine = parseInt($('#nowRefine').text());
		var roundRefine = parseInt($('#roundRefine').text());
			console.log(parseInt($('#nowRefine').text()));
		var now = 0;
		if(nowRefine==0){
			now = parseInt($('#start').val());
		}else{
			now = nowRefine;
		}
		var ran = Math.floor(Math.random() * 101);
		
		$('#nowRefine').text(now);
		if(intervalid != null) { 
	        clearInterval(intervalid);
	        intervalid = null;
	    } else { 
	        var id = work($('#nowRefine'), now,roundRefine);
	        intervalid = id;
	    }
	});
</script>