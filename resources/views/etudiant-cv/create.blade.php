@extends('template')

@section('contenu')

						<div class="CV"> <!-- Start content -->	
							<div id="main">
								<div id="cv">
			
	<div class="controls">
		<span id="notice" class="notice"> </span>
		<a href="https://cvmkr.com/Pages/help" target="_blank" class="button" id="bt-help"><span class="ui-icon ui-icon-info"></span> Help</a>
		<a href="#" class="button" id="bt-preview"><span class="ui-icon ui-icon-search"></span> Quick preview</a>
		<a href="#" class="button" id="bt-save"><span class="ui-icon ui-icon-disk"></span> Save</a>
		
					<a href="#" class="button" id="bt-download"><span class="ui-icon ui-icon-check"></span> Download</a>
			</div>
	<div class="clear"> </div>


	<div class="options">	
		<ul id="cvsections" class="noul ui-sortable"><li class="item section-basic"><a href="#">Basic information</a></li><li class="item section-work"><a href="#">Work experience</a></li><li class="item section-qualifications"><a href="#">Qualifications</a></li><li class="item section-education"><a href="#">Education</a></li><li class="item section-interests selected"><a href="#">Interests</a></li><li class="item section-references"><a href="#">References</a></li></ul>
		<p>
			<a href="#" class="button" id="bt-add-section"><span class="ui-icon ui-icon-plusthick"></span> Add a new section</a>
		</p>
		<p class="msg">* Click and drag section names in the above list to reorder sections in your CV.</p>
		<p class="msg">* If you leave the fields in a section empty, the section will not appear in your CV.</p>
	</div>

	<form name="cv" method="post" action="" id="cvform" class="edit" enctype="multipart/form-data" target="postframe">
		<div id="section-basic" class="section ">
			<h2 class="title"> <span class="name">Basic information</span></h2>
			<div class="sets">
				<div class="set">
					<input type="hidden" class="action" name="action" value="cv">
					<input type="hidden" class="style" name="style" value="executive">
					<input type="hidden" class="type" name="type" value="pdf">
					<input type="hidden" class="page_size" name="page_size" value="pdf">
					<input type="hidden" class="section_name" name="sections[basic][section_name]" value="Basic information">
					
					<p class="field field_">
						<label for="cne">Votre Code national</label>
						<input maxlength="20" type="text" name="sections[basic][data][cne]" id="cne" class="text" placeholder='cne' />
					</p>
					<p class="field field_">
						<label for="email">adresse E-mail</label>
						<input maxlength="100" type="text" name="sections[basic][email]" id="email" class="text" placeholder='e-mail' />
					</p>
					<p class="field field_">
						<label>Nom de famille</label>
						<input maxlength="50" type="text" name="sections[basic][nom]" class="text" placeholder="nom" />
					</p>

					<p class="field field_">
						<label>Prénom</label>
						<input maxlength="50" type="text" name="sections[basic][prenom]" class="text" placeholder="prénom" />
					</p>
					<p class="field field_">
						<label>Numéro de téléphone</label>
						<input maxlength="100" type="text" name="sections[basic][data][phone]" class="text" value="" />
						<span class="info">If you have more than one number, separate with commas</span>
					</p>
					
					<p class="field field_">
						<label>Addresse</label>
						<input maxlength="100" type="text" name="sections[basic][data][address" class="text" value="" />
					</p>
					
					<p class="field field_photo">
						<label for="photo">Photo</label>
						<input type="file" id="photo" name="photo" class="text" value="">
						<span class="info">gif, jpg, png, jpeg<br>320 x 400 px</span>
					</p>
					<p class="field field_bt-photo">
						<input type="button" id="bt-photo" name="bt-photo" class="button" value="Upload">
					</p>

					<p class="field field_bt-photo-remove">
						<input type="button" id="bt-photo-remove" name="bt-photo-remove" class="button" value="Remove">
					</p>
				</div>
			</div>
		</div>

		<div id="section-work" class="section addable renamable ui-sortable">
			<h2 class="title"><span class="name">Work experience</span>
				<a href="#" class="ui-icon ui-icon-pencil rename" title="Rename section">Rename section</a>
				<a href="#" class="ui-icon ui-icon-carat-2-n-s collapse" title="Collapse entries for easy sorting">Expand / Colapse</a>
			</h2>
			<div class="sets"></div>
			<a href="#" class="button bt_cloneset"><span class="ui-icon ui-icon-plusthick"></span> Add entry</a>
		</div>
		<div id="section-qualifications" class="section renamable">
			<input type="hidden" class="section_name" name="section_name" value="Qualifications">
			<h2 class="title">
				<span class="name">Qualifications</span>
				<a href="#" class="ui-icon ui-icon-pencil rename" title="Rename section">Rename section</a>
			</h2>
			<div class="sets">
				<div class="set">
					<p class="field field_">
					<label>Qualifications</label>
					<div class="cleditorMain" style="width: 658px; height: 250px;">
						<div class="cleditorToolbar" style="height: 27px;">
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Bold" disabled="disabled"></div><div class="cleditorButton cleditorDisabled" title="Italic" disabled="disabled" style="background-position: -24px 50%;">
									
								</div>
								<div class="cleditorButton cleditorDisabled" title="Underline" disabled="disabled" style="background-position: -48px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Bullets" disabled="disabled" style="background-position: -288px 50%;"></div>
								<div class="cleditorButton cleditorDisabled" title="Numbering" disabled="disabled" style="background-position: -312px 50%;"></div>
								<div class="cleditorDivider"> </div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Indent" disabled="disabled" style="background-position: -360px 50%;"></div>
								<div class="cleditorButton cleditorDisabled" title="Outdent" disabled="disabled" style="background-position: -336px 50%;"></div>
								<div class="cleditorDivider"> </div>
							</div>
							
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Insert page-break" disabled="disabled" style="background-position: -648px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Undo" disabled="disabled" style="background-position: -480px 50%;"></div>
								<div class="cleditorButton cleditorDisabled" title="Redo" disabled="disabled" style="background-position: -504px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Remove Formatting" disabled="disabled" style="background-position: -264px 50%;"></div>
							</div>
						</div>

						<textarea name="sections[qualifications][data][info][]" class="textarea" style="display: none; width: 658px; height: 223px;"></textarea>
							<iframe frameborder="0" src="javascript:true;" style="width: 658px; height: 223px;"></iframe>
					</div>
					<span class="info">Certifications, accreditions etc. that you have received</span></p><hr>
				</div>
			</div>
		</div>


		<div id="section-education" class="section addable renamable ui-sortable">
			<h2 class="title">
				<span class="name">Education</span>
				<a href="#" class="ui-icon ui-icon-pencil rename" title="Rename section">Rename section</a><a href="#" class="ui-icon ui-icon-carat-2-n-s collapse" title="Collapse entries for easy sorting">Expand / Colapse</a>
			</h2>
			<div class="sets"></div>
			<a href="#" class="button bt_cloneset">
				<span class="ui-icon ui-icon-plusthick"></span> Add entry
			</a>
		</div>

		<div id="section-interests" class="section renamable" style="display: block;">
			<input type="hidden" class="section_name" name="sections[interests][section_name]" value="Interests">
			<h2 class="title">
				<span class="name">Interests</span>
				<a href="#" class="ui-icon ui-icon-pencil rename" title="Rename section">Rename section</a>
			</h2>
			<div class="sets"><div class="set">
				<p class="field field_">
					<label>Interests</label>
					<div class="cleditorMain" style="width: 658px; height: 250px;">
						<div class="cleditorToolbar" style="height: 27px;">
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Bold" disabled="disabled"></div>
								<div class="cleditorButton cleditorDisabled" title="Italic" disabled="disabled" style="background-position: -24px 50%;"></div>
								<div class="cleditorButton cleditorDisabled" title="Underline" disabled="disabled" style="background-position: -48px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Bullets" disabled="disabled" style="background-position: -288px 50%;"></div>
								<div class="cleditorButton cleditorDisabled" title="Numbering" disabled="disabled" style="background-position: -312px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Indent" disabled="disabled" style="background-position: -360px 50%;"></div>
								<div class="cleditorButton cleditorDisabled" title="Outdent" disabled="disabled" style="background-position: -336px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Insert page-break" disabled="disabled" style="background-position: -648px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Undo" disabled="disabled" style="background-position: -480px 50%;"></div>
								<div class="cleditorButton cleditorDisabled" title="Redo" disabled="disabled" style="background-position: -504px 50%;"></div>
								<div class="cleditorDivider"></div>
							</div>
							<div class="cleditorGroup">
								<div class="cleditorButton cleditorDisabled" title="Remove Formatting" disabled="disabled" style="background-position: -264px 50%;"></div>
							</div>
						</div>
						<textarea name="sections[interests][data][info][]" class="textarea" style="display: none; width: 658px; height: 223px;"></textarea>
						<iframe frameborder="0" src="javascript:true;" style="width: 658px; height: 223px;"></iframe>
					</div>
				</p>
			</div>
		</div>
	</div>

	<div id="section-references" class="section renamable"><input type="hidden" class="section_name" name="sections[references][section_name]" value="References"><h2 class="title"><span class="name">References</span><a href="#" class="ui-icon ui-icon-pencil rename" title="Rename section">Rename section</a></h2><div class="sets"><div class="set">
					<p class="field field_"><label>References</label><div class="cleditorMain" style="width: 658px; height: 250px;"><div class="cleditorToolbar" style="height: 27px;"><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Bold" disabled="disabled"></div><div class="cleditorButton cleditorDisabled" title="Italic" disabled="disabled" style="background-position: -24px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Underline" disabled="disabled" style="background-position: -48px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Bullets" disabled="disabled" style="background-position: -288px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Numbering" disabled="disabled" style="background-position: -312px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Indent" disabled="disabled" style="background-position: -360px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Outdent" disabled="disabled" style="background-position: -336px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Insert page-break" disabled="disabled" style="background-position: -648px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Undo" disabled="disabled" style="background-position: -480px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Redo" disabled="disabled" style="background-position: -504px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Remove Formatting" disabled="disabled" style="background-position: -264px 50%;"></div></div></div><textarea name="sections[references][data][info][]" class="textarea" style="display: none; width: 658px; height: 223px;">References available upon request.</textarea><iframe frameborder="0" src="javascript:true;" style="width: 658px; height: 223px;"></iframe></div>
					</p></div></div></div></form>
						<div class="clear"> </div>
					</div>

<iframe id="postframe" name="postframe" src=""></iframe>



<script type="text/javascript">
	var CV_INIT = true, CV_ID = "", CV_DATA = null, CV_USER = '', CV_SECTIONS = {"basic":{"addable":false,"renamable":false,"name":"Basic information"},"work":{"addable":true,"renamable":true,"name":"Work experience"},"qualifications":{"addable":false,"renamable":true,"name":"Qualifications"},"education":{"addable":true,"renamable":true,"name":"Education"},"interests":{"addable":false,"renamable":true,"name":"Interests"},"references":{"addable":false,"renamable":true,"name":"References"}},
		CV_ORDER = ["basic","work","qualifications","education","interests","references"], CV_MAX_ADDABLES = 30,
		CV_MAX_SECTIONS = 20, CV_PHOTO_FILES = ["gif","jpg","png","jpeg"], CV_PHOTO_SIZE = 900;
</script>

<noscript>&lt;h2&gt;You need to have javascript enabled in your browser to use this feature.&lt;/h2&gt;To know how, &lt;a href="https://www.google.com/adsense/support/bin/answer.py?hl=en&amp;answer=12654"&gt;click here&lt;/a&gt;.</noscript>

	

<div class="clear"> </div>
<div id="download-prompt" class="invisible">
	<div class="prompt-optionset">
		<div id="choose-style" class="optionset">
			Style<div class="clear"> </div>
							<p class="executive">
					<label for="style-executive">Executive</label>
					<input checked="" id="style-executive" type="radio" name="style" class="style" value="executive">
				</p>
							<p class="elegant">
					<label for="style-elegant">Elegant</label>
					<input id="style-elegant" type="radio" name="style" class="style" value="elegant">
				</p>
							<p class="bold">
					<label for="style-bold">Bold</label>
					<input id="style-bold" type="radio" name="style" class="style" value="bold">
				</p>
							<p class="literateur">
					<label for="style-literateur">Literateur</label>
					<input id="style-literateur" type="radio" name="style" class="style" value="literateur">
				</p>
							<p class="finesse">
					<label for="style-finesse">Finesse</label>
					<input id="style-finesse" type="radio" name="style" class="style" value="finesse">
				</p>
							<p class="metro">
					<label for="style-metro">Metro</label>
					<input id="style-metro" type="radio" name="style" class="style" value="metro">
				</p>
						<div class="clear"> </div>
		</div>
		
		<div id="choose-type" class="optionset">
			Type<br>
			<select name="type" class="type">
								<option value="pdf">PDF</option>
								<option value="html">HTML</option>
								<option value="txt">TXT</option>
							</select>
			<div class="clear"> </div>
		</div>
		
		<div id="choose-size" class="optionset">
			Page size<br>
			<select name="page_size" class="page_size">
								<option value="A4">A4</option>
								<option value="letter">US Letter</option>
							</select>
			<div class="clear"> </div>
		</div>
		
		<div id="share-options" class="invisible optionset">
			URL to share (<a href="" class="url" target="_blank">view</a>)<br>
			<input type="text" id="share-link" value="">

			<div class="publish">
				<label>Unpublish<input type="radio" class="visibility" name="publish" value="unpublish" checked=""></label>
				<label>Publish<input type="radio" class="visibility" name="publish" value="publish"></label>
			</div>

			<div class="addthis_toolbox addthis_default_style">
			</div>
		</div>
	</div>
</div>	</div>

                    </div>
                

<script type="text/javascript"></script>
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
@stop