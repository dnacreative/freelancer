<!--
NOTE

This is the basic HTML markup that should be styled on every site. 
-->
<div class="wysiwig"><!-- START .wysiwyg -->
	<!-- H2 is the highest heirarchy for the WYSIWIG -->
	<h2>Heading 2</h2>
	<p class="intro">Introductory text uses a class of .intro to classify it. <strong>strong text</strong> amet, consectetur a <a href="#">Intro Text Link<span></span></a> dipisicing elit, sed do eiusmod tempor  incididunt ut labore et dolore magna aliqua.</p>
	<h3>Heading 3 When styling generic pages and WYSIWIG content be sure to give plenty of examples and strange cases.</h3>
	<p>When styling generic <em>pages and WYSIWIG content</em> be sure to give plenty of examples and strange cases. These page styles should be able to mix and match without any bad spacing or leading. For example, this is a <a href="#">standard link</a> and I'm going to end this paragraph <strong>with some strong text</strong></p>
	<blockquote>
		<p>Blockquotes are great for pulling out sections of the body copy. <span class="source">&mdash; <strong>John Doe,</strong> Director of Human Resources</span></p>
	</blockquote>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<h3>Lists</h3>
	<p>Lists are the most important reason to have a seperate bank of styles for WYSIWIG content. This way unordered and ordered lists can be reset and used throughout the site for layout. Make sure to style the case of list many layers deep.</p>
		<ul>
			<li>List Item</li>
			<li>List Item</li>
			<li>List Item. Remember, list items can be quite long themsleves and dropdown to two lines. Line-height always needs to be considered.</li>
			<li>List Item
				<ul>
					<li>List Item</li>
					<li>List Item</li>
					<li>List Item</li>
					<li>List Item</li>
				</ul>
			</li>
		</ul>
	<p>Try to avoid it, but sometimes the design requires a bit of JS to format numbered lists.</p>
		<ol>
			<li>List Item</li>
			<li>List Item</li>
			<li>List Item</li>
			<li>List Item
				<ol>
					<li>List Item</li>
					<li>List Item</li>
					<li>List Item</li>
					<li>List Item</li>
				</ol>
			</li>
		</ol>
	<hr />
	<h3>Buttons</h3>
	<p>Buttons are Optional styles available for the WYSIWIG.</p>
	<p>
		<a href="#" class="btn blue">Button 1</a>
		<a href="#" class="btn green">Button 2</a>
		<a href="#" class="btn orange">Button 3</a>
		<a href="#" class="btn grey">Button 4</a></p>
	<h3>Grid System</h3>
	<p>There is a simple class structure for giving a layout to text</p>
	<div class="grid"><!-- START .grid -->
		<div class="col-2">
			<h3>2 Columns</h3>
			<p>The grid container has a negeative top and bottom margin to compensate for the float:left required for the columns</p>
		</div>
		<div class="col-6">
			<h3>6 Columns</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div><!-- END .grid -->
	<p>It works with lists too!</p>
	<div class="grid"><!-- START .grid -->
		<div class="col-4">
			<h3>4 Columns</h3>
			<ul>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
			</ul>
		</div>
		<div class="col-4">
			<h3>4 Columns</h3>
			<ol>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
				<li>List Item</li>
			</ol>
		</div>
	</div><!-- END .grid -->
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div><!-- END .wysiwig -->