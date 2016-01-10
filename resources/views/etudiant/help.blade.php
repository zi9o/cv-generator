@extends('template')

@section('contenu')

	<div id="main">
		<div id="help" class="page" >
	<h1>Quick help</h1>

	<div class="index">
		<ol>
			<li><a href="#section-create">Creating and managing CVs</a></li>
			<li><a href="#section-sections">Adding and ordering CV sections</a></li>
			<li><a href="#section-rename">Renaming sections</a></li>
			<li><a href="#section-special">Adding entries in special sections</a></li>
			<li><a href="#section-reorder">Re-ordering entries in special sections</a></li>
			<li><a href="#section-pagebreak">Forcing page-breaks</a></li>
			<li><a href="#section-save">Save, preview, and download</a></li>
			<li><a href="#section-share">Publishing and sharing your CV online</a></li>
		<ol>
	</div>
	<div class="section">
		There are e-learning modules available that advise you on effective resume writing.
		You can access them <a href="elearning">here</a>
	</div>
	<div class="section" id="section-create">
		<h3>Creating and managing CVs</h3>
		<img class="r shot" src="https://cvmkr.com/images/help/create_list.png" alt="Creating a new CV" />
		<p>
			Once you have logged in to your account, you will be presented with a home screen. Click on the <em>Create a new CV</em>. 
			A dialog box will show asking for a name. Give your CV a name, for example, &ldquo;My academic resume&rdquo;, and you 
			will be presented with the CV creation wizard where you will provide all your details.
		</p>
		<p>
			The same home screen lists all you the CVs you have created. You can edit a CV by clicking on its name.
		</p>
		<img class="l shot" src="https://cvmkr.com/images/help/manage.png" alt="Managing your CVs" />

		<div class="clear"> </div>
	</div>

	<div class="section" id="section-sections">
		<h3>Adding and ordering CV sections</h3>
		<img class="l shot" src="https://cvmkr.com/images/help/sections.png" alt="Sections" />
		<p>
			A CV consists of several sections, <em>Work experience</em>, <em>Education</em>, <em>References</em> and so forth. 
			You can change the order of how these appear in your CV by clicking on a section name, and dragging it vertically 
			and dropping it in the desired place. You can reorder all sections except for <em>Basic information</em>
		</p>
		<p>
			You can add custom sections to your, for example, &ldquo;Personal projects&rdquo; or &ldquo;Awards and achievements&rdquo;
			CV by clicking the <em>Add a new section</em> button.
		</p>
		<div class="clear"> </div>
	</div>

	<div class="section" id="section-rename">
		<h3>Renaming sections</h3>
		<p>You can rename any of the sections in your CV by clicking the tiny pencil icon to the right of the section name.</p>
		<img class="s shot" src="https://cvmkr.com/images/help/rename_collapse.png" alt="Renaming sections" />
		<div class="clear"> </div>
	</div>

	<div class="section" id="section-special">
		<h3>Adding entries in special sections</h3>
		<img class="l shot" src="https://cvmkr.com/images/help/add_entry.png" alt="Sections" />
		<p><em>Work experience</em> and <em>Education</em> are special sections to which you can add multiple entries, that is, 
		details of your past jobs and schooling. To add a new entry, click the 'Add entry' button.</p>

		<p>You can delete an entry by clicking the <em>Delete</em> button underneath it.</p>

		<div class="clear"> </div>
	</div>

	<div class="section" id="section-reorder">
		<h3>Re-ordering entries in special sections</h3>
		<img class="r shot" src="https://cvmkr.com/images/help/collapse_button.png" alt="Collapse button" />
		<p>You can re-order the entries you add in <em>Work experience</em> and <em>Education</em> by simply clicking on them and dragging.
			However, when you have many entries, it becomes difficult to drag them vertically across the page.</p>

		<p>You can collapse the entries for easy re-ordering by clicking in the collapse icon to the right of the section title along with the rename icon.</p>

		<p>Once the entries are collapsed, you can reorder them easily by clicking and dragging. Clicking on the collapse icon again will expand
			the entries to their normal state.</p>
		<img class="s shot" src="https://cvmkr.com/images/help/collapse_order.png" alt="Collapse and reoder" />
		<div class="clear"> </div>
	</div>

	<div class="section" id="section-pagebreak">
		<h3>Forcing page-breaks</h3>
		<img class="r shot" src="https://cvmkr.com/images/help/pagebreak_button.png" alt="Page-break button" />
		<p>It's impossible to automatically deduce where a pagebreak is aesthetic, and for that reason,
			sometimes, you get pagebreaks in undesired places.</p>
		<p>In such cases, or for whatever reason, to force a page break in the output PDF, use the 
			page-break button in the editor toolbar. This inserts the [page-break] tag, that becomes a hard
			page-break in the PDF you download.</p>
		<div class="clear"> </div>
	</div>

	<div class="section" id="section-save">
		<h3>Save, preview, and download</h3>
		<img class="r shot" src="https://cvmkr.com/images/help/controls.png" alt="Controls" />
		
		<p>The <em>Save</em> button saves the CV you are editing to your account</p>
		
		<p><em>Preview</em> lets you preview your CV in a template of your choice in the browser without having to download it. 
			Quite useful to check progression as your work on your CV.</p>

		<p><em>Download</em> lets you download a copy of your CV (PDF or HTML) to your computer in a style of your choice.</p>
		<div class="clear"> </div>
	</div>

	<div class="section" id="section-share">
		<h3>Publishing and sharing your CV online</h3>
		<img class="l shot" src="https://cvmkr.com/images/help/share_button.png" alt="Share button" />
		CV Maker can host online copies of your CVs so that you can publish and share them. Clicking on the 
		<em>Share</em> button beside your CV in the home screen will bring up the sharing options.

		<div class="clear"> </div>
		<img class="r shot" src="https://cvmkr.com/images/help/share.png" alt="Share CV" />
		<p>The sharing options dialog shows the public URL of your CV which you can copy and share with anyone. 
			You can also share your CV on Facebook, Twitter, and other social network sites by clicking on the appropriate buttons.</p>

		<p>The sharing options dialog also presents you to the different style choices available. Choose the style you wish to publish 
			your CV in, and press <em>OK</em> to save your preference.</p>
		
		<div class="clear"> </div>
	</div>

	<div class="clear"> </div>
</div>	</div><!-- main //-->
	<div class="push"> </div>
</div><!-- wrap //-->

<div id="footer-container">
	<div id="footer">
		<div class="content friendly">
			
			<div class="share">

			</div>
		</div>

		<div class="clear"> </div>

		<div class="bar">
			<div class="content">
				<p class="copyright">
					CV Maker © 2010 - 2013. Tous droits réservés					<span class="ssl"></span>
				</p>
				<ul class="nav noul">
					<li><a href="https://cvmkr.com/fr/Pages/privacy">Conditions générales & politique de confidentialité</a></li>
					<li><a href="https://cvmkr.com/fr/Contact/">Contact</a></li>
				</ul>
				<div class="">
					
				</div>
				<div class="clear"> </div>
			</div>
		</div>

	</div><!-- footer //-->

	<script>var CV_ROOT = "https://cvmkr.com/";</script>

	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-5537752-3']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</div></div></div></div></div>
</var>
@stop