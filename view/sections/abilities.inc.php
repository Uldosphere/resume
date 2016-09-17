<h2><?= $general->abilities_head; ?></h2>
<p class="lead">
	<?= $general->abilities_quote; ?>
</p>

<hr />

<h3><?= $general->skills; ?></h3>

<div class="row">

	<?php if(count($skills) > 0) { 
		function cmpSkills($a, $b)
		{
		    return strcmp($a->title, $b->title);
		}

		usort($skills, "cmpSkills");
	?>
	
	<div class="col-md-6">
		<ul class="no-bullets">
		
		<?php foreach($skills as $index => $skill) { ?>
		
			<li>
				<span class="ability-title"><?= $skill->title; ?></span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<span class="glyphicon glyphicon-star <?= ($skill->level >= $stars) ? 'filled' : ''; ?>"></span>
					
				<?php } ?>
					
				</span>
			</li>
			
			<?php if(ceil(count($skills) / 2) == $index + 1) { ?> 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
			<?php } ?>
		
		<?php } ?>
		
		</ul>
	</div>
	
	<?php } else { ?>
	
	<div class="alert alert-warning">
		No skills were found in this resume
	</div>
	
	<?php } ?>
	
</div>

<div class="text-center project-referal">
	<p>This project is build on a custom made PHP framework.</p>
	<a href="https://github.com/uldosphere/resume" class="btn btn-primary" target="_blank">See project on Github</a>
</div>

<hr />

<h3><?= $general->languages; ?></h3>

<div class="row">

	<?php if(count($languages) > 0) { 
		function cmpLang($a, $b)
		{
		    return $a->level_detailed < $b->level_detailed;
		}

		usort($languages, "cmpLang");
	?>
	
	<div class="col-md-6">
		<ul class="no-bullets">
		
		<?php foreach($languages as $index => $language) { ?>
		
			<li>
				<span class="ability-title"><?= $language->title; ?> (<?= $language->endorsement; ?>)</span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<span class="glyphicon glyphicon-star <?= ($language->level >= $stars) ? 'filled' : ''; ?>"></span>
					
				<?php } ?>
					
				</span>
			</li>
			
			<?php if(ceil(count($languages) / 2) == $index + 1) { ?> 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
			<?php } ?>
		
		<?php } ?>
		
		</ul>
	</div>
	
	<?php } else { ?>
	
	<div class="alert alert-warning">
		No languages were found in this resume
	</div>
	
	<?php } ?>
	
</div>

<hr />

<h3><?= $general->tools; ?></h3>

<div class="row">
	<?php if(count($tools) > 0) { 
	function cmpTools($a, $b)
		{
		    return $a->place > $b->place;
		}

		usort($tools, "cmpTools");
	?>
	
	<div class="col-md-6">
		<ul class="no-bullets">
		
		<?php foreach($tools as $index => $tool) { ?>
		
			<li>
				<span class="ability-title"><?= $tool->title; ?> <?= $tool->endorsement; ?></span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<span class="glyphicon glyphicon-star <?= ($tool->level >= $stars) ? 'filled' : ''; ?>"></span>
					
				<?php } ?>
					
				</span>
			</li>
			
			<?php if(ceil(count($tools) / 2) == $index + 1) { ?> 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
			<?php } ?>
		
		<?php } ?>
		
		</ul>
	</div>
	
	<?php } else { ?>
	
	<div class="alert alert-warning">
		No languages were found in this resume
	</div>
	
	<?php } ?>
</div>