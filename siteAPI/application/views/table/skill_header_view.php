<? $skills = $this->Resume_model->get_skills(); ?>
<div id="skills_edit" class="span12">
<div class="span5">
<?	echo form_open("resume/modify");
	$attributes = array(
				"name" => "name",
				"placeholder" => "Skill List Name",
				"value" => $item->name,
				"class" => "span12",
    			 "rel" => "tooltip",
    			 "data-title" => "Press Enter to update",
    			 "required" => "",
				);
	echo form_input($attributes); 
	echo form_close();


	echo form_open('resume/add_skill');
	$attributes = array(
		    	"name" => "skill",
    			"placeholder" => "New skill",
    			"class" => "span12",
    			 "rel" => "tooltip",
    			 "data-title" => "Enter a skill",
    			 "required"=> "",
				);
	echo form_input($attributes);
	echo form_close();
	echo "<hr />";
	if(sizeof($skills) > 0 ) {
		foreach($skills as $skill) {
			$attributes = array(
				"value" => $skill->course,
				"class" => "btn",
				"style" => "margin:5px; padding-right:25px; cursor:default"
			);
			echo form_submit($attributes);
			echo anchor('resume/deleteitem/course/' . $course->id ,'<i class="icon-remove" style="margin-left:-25px;"></i>');
		}
	} else 
		echo "<p>You have no skills recorded!</p>"; ?>
</div>


</div>