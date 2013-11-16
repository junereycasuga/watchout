<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="row-fluid">
	<div class="well well-sm">
		<div class="col-md-12">
			<h1><i><?php echo $this->pageTitle=Yii::app()->name; ?></i></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		</div>
		<div class="col-md-6">
			<div class="widget-container fluid-height clearfix">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu sollicitudin nunc. Aliquam mauris mi, vulputate vitae elementum quis, varius et mauris. Ut erat lacus, pretium vel diam iaculis, imperdiet congue mi. Aenean vel est lacus. Morbi fermentum dapibus velit. Praesent in dui lobortis, tincidunt enim id, pellentesque augue. Curabitur in nunc luctus, scelerisque diam non, lobortis nunc. Aenean eleifend, risus non lacinia interdum, nunc ipsum varius velit, eget varius mauris magna id augue.
				</p>
				<div class="row">
					<div class="col-md-6">
						<a href="<?php echo $this->createAbsoluteUrl('department/'); ?>" class="btn btn-danger btn-lg">Budget Your Own</a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo $this->createAbsoluteUrl('#'); ?>" class="btn btn-danger btn-lg"><i class="glyphicon glyphicon-thumbs-up"></i> Vote</a>
					</div>
				</div>
			</div>	
		</div>
	</div>	
</div>
