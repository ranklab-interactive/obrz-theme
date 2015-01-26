<?php
/*
Template Name: Formatting
*/
?>
<?php get_header('formatting'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<div class="wide-container clearfix">
    <div class="page-heading text-center">
        <h1>Welcome to the <?php echo $blog_title = get_bloginfo('name'); ?> Formatting Page</h1>
    </div>
    <div class="large-12 columns">
        <div id="content">
            <h2 class="section-sub">Side Nav</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>The Example:</h3>
                    <ul class="side-nav">
                        <li><a href="#">Link 1</a></li>
                        <li class="current_page_item"><a href="#">Current or Active Page</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="side-nav">
  <li><a href="#">Link 1</a></li>
  <li><a href="#">Link 2</a></li>
  <li><a href="#">Link 3</a></li>
  <li><a href="#">Link 4</a></li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <hr>
            <a name="hds"></a>
            <h2 data-magellan-destination="hds">Headers</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Rendered</h3>
                    <h1>h1. This is a very large header.</h1>
                    <h2>h2. This is a large header.</h2>
                    <h3>h3. This is a medium header.</h3>
                    <h4>h4. This is a moderate header.</h4>
                    <h5>h5. This is a small header.</h5>
                    <h6>h6. This is a tiny header.</h6>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<h1>h1. This is a very large header.</h1>
<h2>h2. This is a large header.</h2>
<h3>h3. This is a medium header.</h3>
<h4>h4. This is a moderate header.</h4>
<h5>h5. This is a small header.</h5>
<h6>h6. This is a tiny header.</h6>
                         ]]>                </script>
                </div>
            </div>
                
            <h2>Subheaders</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Rendered</h3>
                    <h1 class="subheader">h1.subheader</h1>
                    <h2 class="subheader">h2.subheader</h2>
                    <h3 class="subheader">h3.subheader</h3>
                    <h4 class="subheader">h4.subheader</h4>
                    <h5 class="subheader">h5.subheader</h5>
                    <h6 class="subheader">h6.subheader</h6>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<h1 class="subheader">h1.subheader</h1>
<h2 class="subheader">h2.subheader</h2>
<h3 class="subheader">h3.subheader</h3>
<h4 class="subheader">h4.subheader</h4>
<h5 class="subheader">h5.subheader</h5>
<h6 class="subheader">h6.subheader</h6>
                         ]]>                </script>
                </div>
            </div>
                
            <h2>Small header segments</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Rendered</h3>
                    <h1>h1. <small>Small segment header.</small></h1>
                    <h2>h2. <small>Small segment header.</small></h2>
                    <h3>h3. <small>Small segment header.</small></h3>
                    <h4>h4. <small>Small segment header.</small></h4>
                    <h5>h5. <small>Small segment header.</small></h5>
                    <h6>h6. <small>Small segment header.</small></h6>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            
                                <![CDATA[
<h1>h1. <small>Small segment header.</small></h1>
<h2>h2. <small>Small segment header.</small></h2>
<h3>h3. <small>Small segment header.</small></h3>
<h4>h4. <small>Small segment header.</small></h4>
<h5>h5. <small>Small segment header.</small></h5>
<h6>h6. <small>Small segment header.</small></h6>
                         ]]>                
                    </script>
                </div>
            </div>
            <hr>
            <h2>Text Align Classes</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Basic</h3>
                    <p class="text-left"><strong>Left Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
                    <p class="text-right"><strong>Right Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
                    <p class="text-center"><strong>Center Aligned.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
                    <p class="text-justify"><strong>Justified.</strong> Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire.</p>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<p class="text-left"><!-- text goes here --></p>
<p class="text-right"><!-- text goes here --></p>
<p class="text-center"><!-- text goes here --></p>
<p class="text-justify"><!-- text goes here --></p>
                         ]]>                </script>
                </div>
            </div>
            <hr>
            <h2>Lists</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Basic</h3>
                    <ul class="disc">
                        <li>List item with a much longer description or more content.</li>
                        <li>List item</li>
                        <li>List item
                            <ul>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                            </ul>
                        </li>
                        <li>List item</li>
                        <li>List item</li>
                        <li>List item</li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="disc">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Circle</h3>
                    <ul class="circle">
                        <li>List item with a much longer description or more content.</li>
                        <li>List item</li>
                        <li>List item
                            <ul>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                            </ul>
                        </li>
                        <li>List item</li>
                        <li>List item</li>
                        <li>List item</li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="circle">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Square</h3>
                    <ul class="square">
                        <li>List item with a much longer description or more content.</li>
                        <li>List item</li>
                        <li>List item
                            <ul>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                            </ul>
                        </li>
                        <li>List item</li>
                        <li>List item</li>
                        <li>List item</li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="square">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <h3>No Bullet</h3>
                    <ul class="no-bullet">
                        <li>List item with a much longer description or more content.</li>
                        <li>List item</li>
                        <li>List item
                            <ul>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                            </ul>
                        </li>
                        <li>List item</li>
                        <li>List item</li>
                        <li>List item</li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="no-bullet">
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ul>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ul>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Ordered/Numbered List</h3>
                    <ol>
                        <li>List item with a much longer description or more content.</li>
                        <li>List item</li>
                        <li>List item
                            <ol>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                                <li>Nested List Item</li>
                            </ol>
                        </li>
                        <li>List item</li>
                        <li>List item</li>
                        <li>List item</li>
                    </ol>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ol>
<li>List item with a much longer description or more content.</li>
<li>List item</li>
<li>List item
<ol>
<li>Nested List Item</li>
<li>Nested List Item</li>
<li>Nested List Item</li>
</ol>
</li>
<li>List item</li>
<li>List item</li>
<li>List item</li>
</ol>
                         ]]>                </script>
                </div>
            </div>
            <hr>
            <h2>Blockquotes</h2>
            <div class="row">
                <div class="large-6 columns">
                    <blockquote>Those people who think they know everything are a great annoyance to those of us who do.<cite>Isaac Asimov</cite></blockquote>			
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<blockquote>Those people who think they know everything are a great annoyance to those of us who do.<cite>Isaac Asimov</cite></blockquote>
                         ]]>                </script>
                </div>
            </div>
            <hr>
            <a name="btns"></a>
            <h1 class="new-section" data-magellan-destination="btns">Buttons</h1>
            <div class="wide-container clearfix">
                <h2 class="section-sub">Invisible Button</h2>
                <div class="row">
                <div class="large-6 columns">
                    <h3>Invisible Button - Blue Edition</h3>
                    <a href="#" class="button invis-btn blue">Button</a>
                </div>
                <div class="large-6 columns">
                    <h3>The HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" class="button invis-btn blue">Button</a>
                         ]]>                </script>
                </div>
                </div>
                <div class="row">
                <div class="large-6 columns" style="background: #000;">
                    <h3>Invisible Button - White Edition</h3>
                    <a href="#" class="button invis-btn white">Button</a>
                </div>
                <div class="large-6 columns">
                    <h3>The HTML</h3>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" class="button invis-btn white">Button</a>
                         ]]>                </script>
                </div>
                </div>
                <h2 class="section-sub">Default Buttons</h2>
                <div class="row">
                    <h3>Default Button</h3>
                    <div class="large-6 columns">
                        <a href="#" class="button">Button</a>
                    </div>
                    <div class="large-6 columns">
                        <h3>HTML</h3>	
                        <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
                <a href="#" class="button">Button</a>
                             ]]>                </script>
                    </div>
                </div>

                
            <div class="row">
                <div class="large-6 columns">
                    <h3>Sizes</h3>
                    <a href="#" class="button tiny">Tiny Button</a><br />
                    <a href="#" class="button small">Small Button</a><br />
                    <a href="#" class="button large">Large Button</a><br />
                    <a href="#" class="button expand">Expand Button</a>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" class="button tiny">Tiny Button</a>
<a href="#" class="button small">Small Button</a>
<a href="#" class="button large">Large Button</a>
<a href="#" class="button expand">Expand Button</a>
                         ]]>                </script>
                </div>
            </div>
                
            <div class="row">
                <div class="large-6 columns">
                    <h3>Radius</h3>
                    <a href="#" class="button tiny radius">Tiny Radius</a><br />
                    <a href="#" class="button small radius">Small Radius</a><br />
                    <a href="#" class="button large radius">Large Radius</a>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" class="button tiny radius">Tiny Radius</a>
<a href="#" class="button small radius">Small Radius</a>
<a href="#" class="button large radius">Large Radius</a>
                         ]]>                </script>
                </div>
            </div>
                
            <div class="row">
                <div class="large-6 columns">
                    <h3>Round</h3>
                    <a href="#" class="button tiny round">Tiny Round</a><br />
                    <a href="#" class="button small round">Small Round</a><br />
                    <a href="#" class="button large round">Large Round</a>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" class="button tiny round">Tiny Round</a>
<a href="#" class="button small round">Small Round</a>
<a href="#" class="button large round">Large Round</a>
                         ]]>                </script>
                </div>
            </div>	
                
            <div class="row">
                <div class="large-6 columns">
                    <h3>Floats</h3>
                    <a href="#" class="button left">Left Float</a>
                    <a href="#" class="button right">Right Float</a>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" class="button left">Left Float</a>
<a href="#" class="button right">Right Float</a>
                         ]]>                </script>
                </div>
            </div>
                
            <div class="row">
                <div class="large-6 columns">
                    <h3>Centered</h3>
                    <div class="text-center">
                        <a href="#" class="button">Centered</a>
                    </div>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="text-center">
	<a href="#" class="button">Centered</a>
</div>
                         ]]>                </script>
                </div>
            </div>
                
                
            <h2>Button Groups</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Default</h3>
                    <ul class="button-group">
                        <li><a href="#" class="button">Button 1</a></li>
                        <li><a href="#" class="button">Button 2</a></li>
                        <li><a href="#" class="button">Button 3</a></li>
                    </ul>
                    <ul class="button-group radius">
                        <li><a href="#" class="button">Button 1</a></li>
                        <li><a href="#" class="button">Button 2</a></li>
                        <li><a href="#" class="button">Button 3</a></li>
                    </ul>
                    <ul class="button-group round">
                        <li><a href="#" class="button">Button 1</a></li>
                        <li><a href="#" class="button">Button 2</a></li>
                        <li><a href="#" class="button">Button 3</a></li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="button-group">
  <li><a href="#" class="button">Button 1</a></li>
  <li><a href="#" class="button">Button 2</a></li>
  <li><a href="#" class="button">Button 3</a></li>
</ul>
<ul class="button-group radius">
  <li><a href="#" class="button">Button 1</a></li>
  <li><a href="#" class="button">Button 2</a></li>
  <li><a href="#" class="button">Button 3</a></li>
</ul>
<ul class="button-group round">
  <li><a href="#" class="button">Button 1</a></li>
  <li><a href="#" class="button">Button 2</a></li>
  <li><a href="#" class="button">Button 3</a></li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <hr>
            <h2>Visibility</h2>
            <p>
                Visibility classes let you show or hide elements based on screen size. You can use visibility classes to control which elements users see depending on their browsing environment.
            </p>
            <h3>Show by Screen Size</h3>
            <p>
                In this example, we use the show visibility classes to show certain strings of text based on the device on which users view a page. If their browser meets the class's conditions, the element will be shown. If not, it will be hidden.
            </p>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Default</h3>
                    <p class="panel">
                        <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
                        <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
                        <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
                        <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
                        <strong class="show-for-large-only">This text is shown only on a large screen.</strong>			  
                    </p>				
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<p>
  <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
  <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
  <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
  <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
  <strong class="show-for-large-only">This text is shown only on a large screen.</strong>
</p>
                         ]]>                </script>
                </div>
            </div>
            <br>
            <h3>Hide by Screen Size</h3>
            <p>
                This example shows the opposite: It uses the hide visibility classes to state which elements should disappear based on your device's screen size or orientation. Users will see elements on every browser except those that meet these conditions.
            </p>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Default</h3>
                    <p class="panel">
                        <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
                        <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
                        <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
                        <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
                        <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
                    </p>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<p>
  <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
  <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
  <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
</p>		 ]]>                </script>
                </div>
            </div>
            <hr>
            <a name="structure"></a>
            <h2 data-magellan-destination="structure">Grid System</h2>	
            <p>
                Start by adding an element with a class of row. This will create a horizontal block to contain vertical columns, 12 total. Then add divs with a column class within that row. You can use column or columns - the only difference is grammar. Specify the widths of each column with the small-#, medium-#, and large-# classes.
            </p>
            <div class="row">
                <div class="large-12 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <div class="large-3 columns text-center" style="background-color:#c6c6c6">3 Columns</div>
                    <div class="large-6 columns text-center" style="background-color:#eeeeee">6 Columns</div>
                    <div class="large-3 columns text-center" style="background-color:#c6c6c6">3 Columns</div>				
                </div>
                <div class="large-12 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="row">  
  <div class="large-3 columns">3 Columns</div>
  <div class="large-6 columns">6 Columns</div>
  <div class="large-3 columns">3 Columns</div>
</div>			
                         ]]>                </script>
                </div>		
            </div>
                
            <h3>Targetting display sizes</h3>
            <p>
                You can specify different column widths that target three different sizes: small (mobile), medium (tablet) and large (desktop). The classes can be combined such that for each display size, a different column width takes effect.   
            </p>		
            <div class="row">
                <div class="large-12 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <div class="small-2 large-4 columns text-center" style="background-color:#c6c6c6">Large 4, Small 2</div>
                    <div class="small-4 large-4 columns text-center" style="background-color:#eeeeee">Large 4, Small 4</div>
                    <div class="small-6 large-4 columns text-center" style="background-color:#c6c6c6">Large 4, Small 6</div>
                </div>
                <div class="large-12 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="row">
  <div class="small-2 large-4 columns">Large 4, Small 2</div>
  <div class="small-4 large-4 columns">Large 4, Small 4</div>
  <div class="small-6 large-4 columns">Large 4, Small 6</div>
</div>		
                         ]]>                </script>
                </div>		
            </div>		
                
            <h3>Centered Columns</h3>
            <p>
                Center your columns by adding a class of small-centered to your column. Large will inherit small centering by default, but you can also center solely on large by applying a large-centered class. 
            </p>		
            <div class="row">
                <div class="large-12 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <div class="small-3 small-centered columns text-center" style="background-color:#c6c6c6">3 centered</div>
                </div>
                <div class="large-12 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="row">
  <div class="small-3 small-centered columns">3 centered</div>
</div>
                         ]]>                </script>
                </div>		
            </div>	
                
            <h3>Offsets</h3>
            <p>
                Move blocks up to 11 columns to the right by using classes like .large-offset-1 and .small-offset-3.
            </p>		
            <div class="row">
                <div class="large-12 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <div class="large-1 columns text-center" style="background-color:#c6c6c6">1</div>
                    <div class="large-9 large-offset-2 columns text-center" style="background-color:#eeeeee">9, offset 2</div>
                </div>
                <div class="large-12 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="row">
  <div class="large-1 columns">1</div>
  <div class="large-9 large-offset-2 columns">9, offset 2</div>
</div>
                         ]]>                </script>
                </div>		
            </div>	
            <hr>
            <h2>Block Grid</h2>
            <p>
                Block grids give you a way to evenly split contents of a list within the grid. If you wanted to create a row of five images or paragraphs that need to stay evenly spaced no matter the screen size, the block grid is for you.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <ul class="small-block-grid-3">
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="small-block-grid-3">
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
</ul>
                         ]]>                </script>
                </div>		
            </div>
            <p>
                Use additional classes to specify a different number of items in a row for each screen size.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-6">
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                        <li><img class="th" src="http://placehold.it/1200x800"></li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-6">
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
  <li><img class="th" src="http://placehold.it/1200x800"></li>
</ul>
                         ]]>                </script>
                </div>		
            </div>
            <hr>
            <a name="content"></a>
            <h2 data-magellan-destination="content">Dropdown</h2>
            <p>
                a universal dropdown plugin that will attach dropdowns or popovers to whatever element you need.
            </p>
            <h3>Basic</h3>
            <p>
                You can create a dropdown using minimal markup.
            </p>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Default</h3>
                    <a href="#" data-dropdown="drop1">Has Dropdown</a>
                    <ul id="drop1" class="f-dropdown" data-dropdown-content>
                        <li><a href="#">This is a link</a></li>
                        <li><a href="#">This is another</a></li>
                        <li><a href="#">Yet another</a></li>
                    </ul>
                    <a href="#" data-dropdown="drop2">Has Content Dropdown</a>
                    <div id="drop2" data-dropdown-content class="f-dropdown content">
                        <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
                    </div>			
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" data-dropdown="drop1">Has Dropdown</a>
<ul id="drop1" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
<a href="#" data-dropdown="drop2">Has Content Dropdown</a>
<div id="drop2" data-dropdown-content class="f-dropdown content">
  <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
</div>
                         ]]>                </script>
                </div>
            </div>
            <h3>Advanced</h3>
            <p>
                Additional classes can be added to your dropdown to change its appearance.
            </p>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Default</h3>
                    <a href="#" class="button" data-dropdown="drop">Link Dropdown &raquo;</a>
                    <ul id="drop" class="small content f-dropdown" data-dropdown-content>
                        <li><a href="#">This is a link</a></li>
                        <li><a href="#">This is another</a></li>
                        <li><a href="#">Yet another</a></li>
                    </ul>		
                    <a href="#" data-dropdown="dropb" class="button dropdown">Dropdown Button</a><br>
                    <ul id="dropb" data-dropdown-content class="f-dropdown">
                        <li><a href="#">This is a link</a></li>
                        <li><a href="#">This is another</a></li>
                        <li><a href="#">Yet another</a></li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" class="button" data-dropdown="drop">Link Dropdown &raquo;</a>
<ul id="drop" class="small content f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>	
    
<a href="#" data-dropdown="dropb" class="button dropdown">Dropdown Button</a><br>
<ul id="dropb" data-dropdown-content class="f-dropdown">
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <h3>Hoverable Dropdown Option</h3>
            <p>
                If you'd rather have your dropdown be accessible by hover, you can add a data-option to the target element:
            </p>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Default</h3>
                    <a href="#" data-dropdown="hover1" data-options="is_hover:true">Has Hover Dropdown</a>
                    <ul id="hover1" class="f-dropdown" data-dropdown-content>
                        <li><a href="#">This is a link</a></li>
                        <li><a href="#">This is another</a></li>
                        <li><a href="#">Yet another</a></li>
                    </ul>			
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" data-dropdown="hover1" data-options="is_hover:true">Has Hover Dropdown</a>
    
<ul id="hover1" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <hr>
            <h2>Progress Bars</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Default</h3>
                    <div class="progress">
                        <span class="meter"></span>
                    </div>
                    <div class="progress">
                        <span class="meter" style="width: 80%"></span>
                    </div>
                    <div class="progress radius">
                        <span class="meter" style="width: 50%"></span>
                    </div>
                    <div class="progress round">
                        <span class="meter" style="width: 75%"></span>
                    </div>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="progress">
  <span class="meter"></span>
</div>
<div class="progress">
  <span class="meter" style="width: 80%"></span>
</div>
<div class="progress radius">
  <span class="meter" style="width: 50%"></span>
</div>
<div class="progress round">
  <span class="meter" style="width: 75%"></span>
</div>
                         ]]>                </script>
                </div>
            </div>
            <hr>
            <h2>Accordion</h2>
            <p>
                You can create an accordion using minimal markup like so:
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <dl class="accordion" data-accordion>
                        <dd>
                            <a href="#panel1">Accordion 1</a>
                            <div id="panel1" class="content active">
                                Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </dd>
                        <dd>
                            <a href="#panel2">Accordion 2</a>
                            <div id="panel2" class="content">
                                Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </dd>
                        <dd>
                            <a href="#panel3">Accordion 3</a>
                            <div id="panel3" class="content">
                                Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </dd>
                    </dl>	 
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<dl class="accordion" data-accordion>
  <dd>
	<a href="#panel1">Accordion 1</a>
    <div id="panel1" class="content active">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel2">Accordion 2</a>
    <div id="panel2" class="content">
      Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel3">Accordion 3</a>
    <div id="panel3" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
</dl>					
                         ]]>                </script>
                </div>		
            </div>
            <hr>
            <h2>Tabs</h2>
            <p>
                You can create a group of horizontal tabs using minimal markup.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <dl class="tabs" data-tab>
                        <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
                        <dd><a href="#panel2-2">Tab 2</a></dd>
                        <dd><a href="#panel2-3">Tab 3</a></dd>
                        <dd><a href="#panel2-4">Tab 4</a></dd>
                    </dl>
                    <div class="tabs-content">
                        <div class="content active" id="panel2-1">
                            <p>First panel content goes here...</p>
                        </div>
                        <div class="content" id="panel2-2">
                            <p>Second panel content goes here...</p>
                        </div>
                        <div class="content" id="panel2-3">
                            <p>Third panel content goes here...</p>
                        </div>
                        <div class="content" id="panel2-4">
                            <p>Fourth panel content goes here...</p>
                        </div>
                    </div>				 
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<dl class="tabs" data-tab>
  <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
  <dd><a href="#panel2-2">Tab 2</a></dd>
  <dd><a href="#panel2-3">Tab 3</a></dd>
  <dd><a href="#panel2-4">Tab 4</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="panel2-1">
    <p>First panel content goes here...</p>
  </div>
  <div class="content" id="panel2-2">
    <p>Second panel content goes here...</p>
  </div>
  <div class="content" id="panel2-3">
    <p>Third panel content goes here...</p>
  </div>
  <div class="content" id="panel2-4">
    <p>Fourth panel content goes here...</p>
  </div>
</div>						
                         ]]>                </script>
                </div>		
            </div>		
                
            <h3>Vertical Tabs</h3>
            <div class="row">
                <div class="large-12 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <dl class="tabs vertical" data-tab>
                        <dd class="active"><a href="#panel1a">Tab 1</a></dd>
                        <dd><a href="#panel2a">Tab 2</a></dd>
                        <dd><a href="#panel3a">Tab 3</a></dd>
                        <dd><a href="#panel4a">Tab 4</a></dd>
                    </dl>
                    <div class="tabs-content vertical">
                        <div class="content active" id="panel1a">
                            <p>Panel 1 content goes here.</p>
                        </div>
                        <div class="content" id="panel2a">
                            <p>Panel 2 content goes here.</p>
                        </div>
                        <div class="content" id="panel3a">
                            <p>Panel 3 content goes here.</p>
                        </div>
                        <div class="content" id="panel4a">
                            <p>Panel 4 content goes here.</p>
                        </div>
                    </div>
                </div>
                <div class="large-12 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<dl class="tabs vertical" data-tab>
  <dd class="active"><a href="#panel1a">Tab 1</a></dd>
  <dd><a href="#panel2a">Tab 2</a></dd>
  <dd><a href="#panel3a">Tab 3</a></dd>
  <dd><a href="#panel4a">Tab 4</a></dd>
</dl>
<div class="tabs-content vertical">
  <div class="content active" id="panel1a">
    <p>Panel 1 content goes here.</p>
  </div>
  <div class="content" id="panel2a">
    <p>Panel 2 content goes here.</p>
  </div>
  <div class="content" id="panel3a">
    <p>Panel 3 content goes here.</p>
  </div>
  <div class="content" id="panel4a">
    <p>Panel 4 content goes here.</p>
  </div>
</div>					
                         ]]>                </script>
                </div>		
            </div>
            <hr>	
            <a name="media"></a>
            <h1 class="new-section"data-magellan-destination="media">Sliders</h1>
            <p>
                For our image sliders, we are using <a href="http://kenwheeler.github.io/slick/" target="_blank">Slick</a>, and the Zurb Foundation Orbit Slider extension. 
            <ul>
                <li>The <strong>Slick Slider</strong> is responsive, and with various options that can be used in the .</li>
                <li>The <strong>Orbit Slider</strong> is responsive, and has many options to make slider implementation easy.</li>
                </ul>
            <p> Below is an example which shows the slider that appears on the Home Page. You will see that as you shrink and grow your browser window, the slider will responsive react to the browser size. 
            </p>
            <div class="wide-container clearfix">
                <h2 class="section-sub">Orbit Slider How-To</h2>
                <p>Orbit Slider is not currently activate for Ocean Breeze, but can be easily added by appending <code>&lt;script type="text/javascript" src="&lt;?php echo get_template_directory_uri(); ?&gt;/library/js/foundation.orbit.js"&gt;&lt;/script&gt;</code> to the file <strong>footer.php</strong> below the "foundation.min.js" file. </p>
            <div class="medium-6 columns">
                <h3>The Example:</h3>
                <ul class="example-orbit" data-orbit>
                    <li>
                        <img src="http://placehold.it/1000x300/A92B48/fff" alt="slide 1" />
                        <div class="orbit-caption">
                            Caption One.
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/1000x300/EE964D/fff" alt="slide 2" />
                        <div class="orbit-caption">
                            Caption Two.
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/1000x300/FDC43D/fff" alt="slide 3" />
                        <div class="orbit-caption">
                            Caption Three.
                        </div>
                    </li>
                </ul>
            </div>
                <div class="medium-6 columns">
                    <h3>The HTML:</h3>
                    <script type="syntaxhighlighter" class="brush: php">
                        <![CDATA[
<ul class="example-orbit" data-orbit>
    <li>
        <img src="http://placehold.it/1000x300/A92B48/fff" alt="slide 1" />
        <div class="orbit-caption">
            Caption One.
        </div>
    </li>
    <li>
        <img src="http://placehold.it/1000x300/EE964D/fff" alt="slide 2" />
        <div class="orbit-caption">
            Caption Two.
        </div>
    </li>
    <li>
        <img src="http://placehold.it/1000x300/FDC43D/fff" alt="slide 3" />
        <div class="orbit-caption">
            Caption Three.
        </div>
    </li>
</ul>
                    ]]>
                    </script>
                </div>
            </div>
            <div class="wide-container clearfix">
            <h2 class="section-sub">Content Slider How-To</h2>
            <p>Can also be used with just content and no images.</p>
                <div class="large-6 columns content-slider-demo" style="line-height:2rem;">
                    <h3>The Example:</h3>
                    <ul data-orbit style="padding:50px;">
                        <li data-orbit-slide="headline-1">
                            <div>
                                <h2>Headline 1</h2>
                                <h3>Subheadline</h3>
                            </div>
                        </li>
                        <li data-orbit-slide="headline-2">
                            <div>
                                <h2>Headline 2</h2>
                                <h3>Subheadline</h3>
                            </div>
                        </li>
                        <li data-orbit-slide="headline-3">
                            <div>
                                <h2>Headline 3</h2>
                                <h3>Subheadline</h3>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>The HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul data-orbit>
  <li data-orbit-slide="headline-1">
    <div>
      <h2>Headline 1</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-2">
    <div>
      <h2>Headline 2</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-3">
    <div>
      <h2>Headline 3</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
</ul>
                         ]]>                </script>
                </div>		
            </div>
            <div class="wide-container clearfix">
                <h2 class="section-sub">Slick Slider How-To</h2>
                <div class="large-6 columns slick-slider-demo">
                    <h3>The Example:</h3>
                        <div class="slick-slider">
                            <div>
                                <h3>Slide 1</h3>
                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                            </div>
                            <div>
                                <h3>Slide 2</h3>
                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                            </div>
                            <div>
                                <h3>Slide 3</h3>
                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                            </div>
                            <div>
                                <h3>Slide 4</h3>
                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                            </div>
                            <div>
                                <h3>Slide 5</h3>
                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                            </div>
                            <div>
                                <h3>Slide 6</h3>
                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                            </div>
                        </div>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.slick-slider').slick({
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            });
                        });
                    </script>
                </div>
                <div class="large-6 columns">
                    <h3>The HTML:</h3>
                    <p>Below is a basic example of how to use </p>
                    <h5>Usage Guide:</h5>
                    <p>You will need to wrap your slides with a &lt;div&gt; and class that you use to fire the slider. The class should match the unique class that you will use to initialize the slider.</p>
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="slick-slider">
    <div>
        <h3>Slide 1</h3>
        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
    </div>
    <div>
        <h3>Slide 2</h3>
        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
    </div>
    <div>
        <h3>Slide 3</h3>
        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
    </div>
    <div>
        <h3>Slide 4</h3>
        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
    </div>
    <div>
        <h3>Slide 5</h3>
        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
    </div>
    <div>
        <h3>Slide 6</h3>
        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
    </div>
</div>
                         ]]>                
     </script>
                    <h5>The JS needed to initialize slick slider.</h5>
                    <p>You will need to add this script below the HTML code for your slick slider.You should  change the '.slick-slider' class in the JS below to a unique class. That class that you use here should match the class used in to wrap you HTML.</p>
                    <pre type="syntaxhighlighter" class="brush: js">
&lt;script type="text/javascript"&gt;
    $(document).ready(function(){
        $('.slick-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
&lt;/script&gt;
                    </pre>
                </div>		
            </div>
            <hr>
            <h2>Flex Video</h2>
            <p>
                Flex Video lets browsers automatically scale video objects in your webpages. If you're embedding a video from YouTube, Vimeo, or another site that uses iframe, embed or object elements, you can wrap your video in div.flex-video to create an intrinsic ratio that will properly scale your video on any device.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <div class="flex-video">
                        <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
                    </div>		
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="flex-video">
	<iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
</div>		
                         ]]>                </script>
                </div>		
            </div>
            <hr>
            <h2>Clearing Lightbox</h2>
            <p>
                Gather some images, decide on their order, and put them into an ul with a .clearing-thumbs class.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <ul class="small-block-grid-3 clearing-thumbs" data-clearing>
                        <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
                        <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
                        <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
                    </ul>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="small-block-grid-3 clearing-thumbs" data-clearing>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
  <li><a class="th" href="http://placehold.it/1200x800"><img src="http://placehold.it/1200x800"></a></li>
</ul>		
                         ]]>                </script>
                </div>		
            </div>
                
            <hr>
            <a name="calls"></a>
            <h2 data-magellan-destination="calls">Reveal Modal</h2>
            <p>
                You can create a reveal modal using minimal markup. To launch a modal, just add a data-reveal-id to the object which you want to fire the modal when clicked. The data-reveal-id needs to match the id of your reveal.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <a href="#" data-reveal-id="myModal" data-reveal>Click Me For A Modal</a>
                    <div id="myModal" class="reveal-modal" data-reveal>
                        <h2>Awesome. I have it.</h2>
                        <p class="lead">Your couch.  It is mine.</p>
                        <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
                        <a class="close-reveal-modal">&#215;</a>
                    </div>		 
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" data-reveal-id="myModal" data-reveal>Click Me For A Modal</a>
<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>			
                         ]]>                </script>
                </div>		
            </div>
            <p>
                A button that reveals a modal and links to a second modal example.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <a href="#" data-reveal-id="firstModal" class="radius button">Example Modal…</a>
                    <div id="firstModal" class="reveal-modal" data-reveal>
                        <h2>This is a modal.</h2>
                        <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
                        <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
                        <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
                        <a class="close-reveal-modal">×</a>
                    </div>
                    <div id="secondModal" class="reveal-modal" data-reveal>
                        <h2>This is a second modal.</h2>
                        <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
                        <div class="flex-video" style="display: block;">
                            <iframe width="420" height="315" src="http://www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen="" data-src="http://www.youtube.com/embed/aiBt44rrslw"></iframe>
                        </div>
                        <a class="close-reveal-modal">×</a>
                    </div>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" data-reveal-id="firstModal" class="radius button">Example Modal…</a>
<div id="firstModal" class="reveal-modal" data-reveal>
  <h2>This is a modal.</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
  <a class="close-reveal-modal">×</a>
</div>
<div id="secondModal" class="reveal-modal" data-reveal>
  <h2>This is a second modal.</h2>
  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
  <div class="flex-video" style="display: block;">
    <iframe width="420" height="315" src="http://www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen="" data-src="http://www.youtube.com/embed/aiBt44rrslw"></iframe>
  </div>
  <a class="close-reveal-modal">×</a>
</div>
                         ]]>                </script>
                </div>		
            </div>
            <p>
                Add class tiny, small, medium, large or xlarge to size the modal box.
            </p>
            <div class="row">
                <div class="large-6 columns" style="line-height:2rem;">
                    <h3>Rendered</h3>
                    <a class="radius button" href="#" data-reveal-id="myModal2" data-reveal>Click Me For A Tiny Modal</a>
                    <div id="myModal2" class="reveal-modal tiny" data-reveal>
                        <h2>Awesome. I have it.</h2>
                        <p class="lead">Your couch.  It is mine.</p>
                        <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
                        <a class="close-reveal-modal">&#215;</a>
                    </div>		 
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<a href="#" data-reveal-id="myModal2" data-reveal>Click Me For A Modal</a>
<div id="myModal2" class="reveal-modal tiny" data-reveal>
  <h2>Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  <a class="close-reveal-modal">&#215;</a>
</div>			
                         ]]>                </script>
                </div>		
            </div>
            <hr>
            <h2>Panels</h2>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Regular</h3>
                    <div class="panel">
                        <h5>This is a regular panel.</h5>
                        <p>It has an easy to override visual style, and is appropriately subdued.</p>
                    </div>
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="panel">
  <h5>This is a regular panel.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
</div>	
                         ]]>                </script>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <h3>Callout</h3>
                    <div class="panel callout radius">
                        <h5>This is a callout panel.</h5>
                        <p>It's a little ostentatious, but useful for important content.</p>
                    </div>				
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<div class="panel callout radius">
  <h5>This is a callout panel.</h5>
  <p>It's a little ostentatious, but useful for important content.</p>
</div>		
                         ]]>                </script>
                </div>
            </div>
            <div class="row pad">
                <div class="large-6 columns">
                    <h3>V-card</h3>
                    <ul class="vcard">
                        <li class="fn">Gaius Baltar</li>
                        <li class="street-address">123 Colonial Ave.</li>
                        <li class="locality">Caprica City</li>
                        <li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
                        <li class="email"><a href="#">g.baltar@cmail.com</a></li>
                    </ul>		
                </div>
                <div class="large-6 columns">
                    <h3>HTML</h3>	
                    <script type="syntaxhighlighter" class="brush: php">                            <![CDATA[
<ul class="vcard">
  <li class="fn">Gaius Baltar</li>
  <li class="street-address">123 Colonial Ave.</li>
  <li class="locality">Caprica City</li>
  <li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
  <li class="email"><a href="#">g.baltar@cmail.com</a></li>
</ul>
                         ]]>                </script>
                </div>
            </div>
            <hr>                
        </div><!-- end left-content_block -->
        <div class="wide-container pad clearfix">
            <h1 class="new-section">Content Blocks</h1>
            <div class="row">
                <h2 class="section-sub">Full-Width Background Section</h2>
            <div class="medium-12 columns">
                <h4>Example:</h4>
                <div class="small-12 columns text-center no-space pad full-width-background" style="background-image: url('http://localhost:8888/obrz/wp-content/uploads/2015/01/wide-pier2.jpg'); background-position: center center;">
                    <div class="valign-middle-padding">
                        <h2 class="section darkgray"><small>Facilities &amp; Amenities</small></h2>
                        <button><a href="#">Take The Tour</a></button>
                    </div>
                </div>
            </div>
            <div class="medium-12 columns">
                <h4>HTML:</h4>
                <script type="syntaxhighlighter" class="brush: php">
                            <![CDATA[
<div class="small-12 columns text-center no-space pad full-width-background" style="background-image: url('http://localhost:8888/obrz/wp-content/uploads/2015/01/wide-pier2.jpg'); background-position: center center;">
    <div class="valign-middle-padding">
        <h2 class="section darkgray"><small>Facilities &amp; Amenities</small></h2>
        <button><a href="#">Take The Tour</a></button>
    </div>
</div>
    ]]>
                </script>
            </div>
        </div>
            <div class="row">
                <h2 class="section-sub">Full Width Section 1</h2>
            <div class="medium-12 columns">
                <h4>Example:</h4>
                <div class="wide-container clearfix pad">
                    <div class="medium-12 columns small-centered no-space">
                        <div class="clearfix">
                            <div class="full-width-section-1">
                                <div class="large-3 columns full-width-section-1-image" style="background-image: url('../wp-content/uploads/2014/12/home-main-img.png');"></div>
                                <div class="large-8 large-offset-1 columns full-width-section-1-text ">
                                    <h4>Lorem Ipsum Galactus</h4>
                                    <p>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="medium-12 columns">
                <h4>HTML:</h4>
                <script type="syntaxhighlighter" class="brush: php">
                            <![CDATA[
<div class="clearfix">
    <div class="full-width-section-1">
        <div class="large-3 columns full-width-section-1-image" style="background-image: url('../wp-content/uploads/2014/12/home-main-img.png');"></div>
        <div class="large-8 large-offset-1 columns full-width-section-1-text ">
            <h4>Lorem Ipsum Galactus</h4>
            <p>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui.</p>
        </div>
    </div>
</div>
    ]]>
                </script>
            </div>
        </div>
            <div class="row">
                <h2 class="section-sub">Heading Rich Block</h2>
            <div class="medium-6 columns">
                <h4>Example:</h4>
                <div class="clearfix pad">
                    <div class="medium-12 columns small-centered">
                        <div class="heading-rich-block row">
                            <div class="heading-rich-block-top clearfix">
                                <div class="large-7 columns heading-rich-block-text">
                                    <h3 class="section darkgray"><small>Lorem Ipsum Galactus</small></h3>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                </div>
                                <div class="large-5 columns heading-rich-block-links">
                                    <h5 class="text-center">Lorem Ipsum Galactus</h5>
                                    <ul class="blueorange">
                                        <li><a href="#">Link 1</a></li>
                                        <li><a href="#">Link 1</a></li>
                                        <li><a href="#">Link 1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="heading-rich-block-cta clearfix">
                                <div class="small-12 columns">Questions? We're here to help 888-123-4567</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="medium-6 columns">
                <h4>HTML:</h4>
                <script type="syntaxhighlighter" class="brush: php">
                            <![CDATA[
<div class="clearfix pad">
    <div class="medium-12 columns small-centered">
        <div class="heading-rich-block row">
            <div class="heading-rich-block-top clearfix">
                <div class="large-7 columns heading-rich-block-text">
                    <h3 class="section darkgray"><small>Lorem Ipsum Galactus</small></h3>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                </div>
                <div class="large-5 columns heading-rich-block-links">
                    <h5 class="text-center">Lorem Ipsum Galactus</h5>
                    <ul class="blueorange">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 1</a></li>
                    </ul>
                </div>
            </div>
            <div class="heading-rich-block-cta clearfix">
                <div class="small-12 columns">Questions? We're here to help 888-123-4567</div>
            </div>
        </div>
    </div>
</div>
    ]]>
                </script>
            </div>
        </div>
            <div class="row">
                <h2 class="section-sub">Page Block 1</h2>
            <p>This block is currently used on Single Facility pages.</p>
            <div class="medium-6 columns no-space">
                <h4>Example:</h4>
                <ul class="page-block">
                    <li class="page-block-1">
                        <div class="page-block-1-content">
                            <h5 class="text-center">Lorem Ipsum Galactus</h5>
                            <div class="page-block-text">
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="medium-6 columns">
                <h4>HTML:</h4>
                <script type="syntaxhighlighter" class="brush: php">
                            <![CDATA[
<ul class="page-block">
    <li class="page-block-1">
        <div class="page-block-1-content">
            <h5 class="text-center">Lorem Ipsum Galactus</h5>
            <div class="page-block-text">
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
        </div>
    </li>
</ul>
                ]]>
                </script>
            </div>
        </div>
            <div class="row pad">
                <h2 class="section-sub">Page Block 2</h2>
            <p>This block is currently used on Single Facility pages.</p>
            <div class="medium-6 columns no-space">
                <h4>Example:</h4>
                <ul class="page-block">
                    <li class="page-block-2">
                        <div class="page-block-2-content text-center">
                            <div class="page-block-2-top" style="background: url('../wp-content/uploads/2014/12/home-main-img.png');">
                                <button class="text-center">Lorem Ipsum Galactus</button>
                                <div class="page-block-2-overlay"></div>
                            </div>
                            <div class="page-block-text text-left">
                                <div>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="medium-6 columns">
                <h4>HTML:</h4>
                <script type="syntaxhighlighter" class="brush: php">
                            <![CDATA[
<ul class="page-block">
    <li class="page-block-2">
        <div class="page-block-2-content text-center">
            <div class="page-block-2-top" style="background: url('../wp-content/uploads/2014/12/home-main-img.png');">
                <button class="text-center">Lorem Ipsum Galactus</button>
                <div class="page-block-2-overlay"></div>
            </div>
            <div class="page-block-text text-left">
                <div>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </div>
            </div>
        </div>
    </li>
</ul>
                                            ]]>
                </script>
            </div>
        </div>
        </div>
<?php endwhile; endif; ?>
    </div><!-- end content -->
</div><!-- end wrapper div -->
<!-- end inside div -->
    
<?php get_footer('formatting'); ?>