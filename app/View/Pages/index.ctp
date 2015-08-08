<div class="row container-side">
	<div class=" col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
			<?php foreach ($watasu as $in_topic): ?>
			<article class="row">
				<div class="col-sm-3">
					<h3><?php echo $in_topic['Topic']['created'] ?></h3>
					<h3><?php echo $in_topic['Topic']['id'] ?></h3>
					<h3><?php echo $in_topic['Category']['name'] ?></h3>
				</div>


				<div class="col-sm-9">
					<h2><?php echo $in_topic['Topic']['title'] ?></h2>
					<p><?php echo $in_topic['Topic']['body'] ?></p>

				


					<!-- <p>aaaa<?php echo $in_topic['Category']['name'] ?></p>  -->
					<p><a href="/detail/1">Continue Reading ...</a></p>
					<span class="fa fa-tags"></span>
					<a href="/cake/categories/view1">夏目漱石</a>
					<a href="/cake/categories/view1">小説</a>
					<a href="/cake/categories/view1">明治時代</a>
				</div>

					<button　type = "button" class = "btn btn-default">
						<?php echo $this -> Form -> postLink(
							'Delete',
							array('controller' => 'topics', 'action' => 'delete', $in_topic['Topic']['id']),
							array(),
							'削除しますか？',
							$in_topic['Topic']['id']

							);
						?>
					</button>

			</article>
		<?php endforeach; ?>

		
			
	</div>
	<?php echo $this->element('aside'); ?>
	<?php echo $this->element('modal'); ?>
</div>