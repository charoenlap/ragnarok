<div class="container">
	<div class="row mt-4">
		<div class="col-12 col-md-6">
			<div>ช่องใส่ตัวเลขเพื่อถอดรหัส</div>
			<input type="text" value="" class="form-control" id="input" placeholder="">
		</div>
		<div class="col-12 col-md-6">
			<table class="table table-bordered table-striped">
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>8</td>
				</tr>
				<tr>
					<td><span id="result1">-</span></td>
					<td><span id="result2">-</span></td>
					<td><span id="result3">-</span></td>
					<td><span id="result4">-</span></td>
					<td><span id="result5">-</span></td>
					<td><span id="result6">-</span></td>
					<td><span id="result7">-</span></td>
					<td><span id="result8">-</span></td>
				</tr>
			</table>

		</div>
	</div>
	<div class="row mt-2">
			<?php foreach($monsters AS $m){ ?>
			<div class="col-12 col-sm-4 col-md-3 col-lg-2 mb-2">
				<div class="card">
					<div class="card-header">
						<?php echo mb_strimwidth($m['iName'],0,12,'..'); ?>
					</div>
					<div class="card-body">
						<div><img style="width:auto;height:100px;" src="<?php echo 'http://db.irowiki.org/image/monster/'.$m['ID'].'.png';?>"></div>
						<div><?php echo number_format($m['HP']); ?></div>
						<div>DEF: <?php echo $m['DEF']; ?></div>
						<div>ประเภท: <b><?php echo $m['Race']; ?></b></div>
						<div >ขนาด: <b><?php echo $m['Scale']; ?></b></div>
						<div class="<?php echo elementColor($m['Element']['text']); ?> text-center"><?php echo $m['Element']['text']; ?></div>
					</div>
				</div>
			</div>
		    <?php } ?>
		</div>
	</div>
</div>
<script>
	function pad(num, size) {
	    var s = "00000000" + num;
	    return s.substr(s.length-size);
	}

	function dec2bin(dec) {
	  return (dec >>> 0).toString(2);
	}

	console.log(dec2bin(125));
        $(document).on('change','#input',function(){
        	var str = pad(dec2bin($(this).val()),8).split('');
        	$('#result1').text(str[0]);
        	$('#result2').text(str[1]);
        	$('#result3').text(str[2]);
        	$('#result4').text(str[3]);
        	$('#result5').text(str[4]);
        	$('#result6').text(str[5]);
        	$('#result7').text(str[6]);
        	$('#result8').text(str[7]);
        });
</script>