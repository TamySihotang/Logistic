<table class="appendo-gii" id="<?php echo $id ?>">
	<thead>
		<tr>
			<th>Serial Number </th>
		</tr>
	</thead>
        
	<tbody>
    <?php if ($model->serial_number == null): ?>
		<tr>
			<td><?php echo CHtml::textField('serial_number[]','',array('style'=>'width:120px')); ?></td>
           
		</tr>
    <?php else: ?>
        <?php for($i = 0; $i < sizeof($model->serial_number); ++$i): ?>
    		<tr>
    			<td><?php echo CHtml::textField('serial_number[]',$model->serial_number[$i],array('style'=>'width:120px')); ?></td>
               
            </tr>
        <?php endfor; ?>
		<tr>
			<td><?php echo CHtml::textField('serial_number[]','',array('style'=>'width:120px')); ?></td>
            
		</tr>
    <?php endif; ?>
	</tbody>
</table>