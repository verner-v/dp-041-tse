<ul class="nav nav-list">

	<div class="well" style="width: 300px; padding: 8px 0;">
		<div style="overflow-y: scroll; overflow-x: hidden; height: 500px;">
			<ul class="nav nav-list">
				<li><label class="tree-toggler nav-header">Header 1</label>
					<ul class="nav nav-list tree">
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><label class="tree-toggler nav-header">Header 1.1</label>
							<ul class="nav nav-list tree">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><label class="tree-toggler nav-header">Header 1.1.1</label>
									<ul class="nav nav-list tree">
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="divider"></li>
				<li><label class="tree-toggler nav-header">Header 2</label>
					<ul class="nav nav-list tree">
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
						<li><label class="tree-toggler nav-header">Header 2.1</label>
							<ul class="nav nav-list tree">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><label class="tree-toggler nav-header">Header 2.1.1</label>
									<ul class="nav nav-list tree">
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><label class="tree-toggler nav-header">Header 2.2</label>
							<ul class="nav nav-list tree">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><label class="tree-toggler nav-header">Header 2.2.1</label>
									<ul class="nav nav-list tree">
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<li class="nav-header">Заголовок</li>
	<li>
		<a href="<?php echo URL::base().'catalog/equipment/add';?>">add</a>
	</li>
	<li>
		<a href="<?php echo URL::base().'catalog/equipment/search';?>"> search </a>
	</li>
	<li>
		<a href="<?php echo URL::base().'catalog/equipment/viewcat';?>"> просмотр кат </a>
	</li>
	
		
</ul>
