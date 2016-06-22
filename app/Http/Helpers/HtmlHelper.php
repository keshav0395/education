<?php
	
	
	function text($title, $name, $errors, $value){

		$text = '<div class="form-group'. ($errors->has($name) ? " has-error" : "") .'">';
		$text .= 	'<label for="'.$name.'">'.$title.'</label>';
		$text .= 	'<input type="text" placeholder="'.$title.'" id="'.$name.'" class="form-control" name="'.$name.'" value="'.$value.'">';
		if($errors->has($name)){
			$text .= 	'<span class="help-block">';
			$text .= 		'<strong>'.$errors->first($name).'</strong>';
			$text .= 	'</span>';
		}

		$text .= '</div>';
		return $text;

	}
	
	function textarea($title, $name, $errors, $value){

		$text = '<div class="form-group'. ($errors->has($name) ? " has-error" : "") .'">';
		$text .= 	'<label for="'.$name.'">'.$title.'</label>';
		$text .= 	'<textarea class="form-control" name="'.$name.'" placeholder="'.$title.'" id="'.$name.'">'.$value.'</textarea>';
		if($errors->has($name)){
			$text .= 	'<span class="help-block">';
			$text .= 		'<strong>'.$errors->first($name).'</strong>';
			$text .= 	'</span>';
		}

		$text .= '</div>';
		return $text;

	}

	function submit($alias = 'Submit'){
		return '<button class="btn btn-primary" type="submit">'.$alias.'</button>';
	}


?>