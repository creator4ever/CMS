<?php namespace GrahamCampbell\BootstrapCMS\Services\Validation;
use Illuminate\Validation\Validator as IlluminateValidator;

class CustomValidator extends IlluminateValidator{
	/**
	 * Replace all error message place-holders with actual values.
	 *
	 * @param  string  $message
	 * @param  string  $attribute
	 * @param  string  $rule
	 * @param  array   $parameters
	 * @return string
	 */
	protected function doReplacements($message, $attribute, $rule, $parameters)
	{
		$message = parent::doReplacements($message, $attribute, $rule, $parameters);
		$message = $this->replacePostPosition($message);

		return $message;
	}

	/**
	 * Replace all place-holders for the greater than rule.
	 *
	 * @param  string  $message
	 * @param  string  $attribute
	 * @param  string  $rule
	 * @param  array   $parameters
	 * @return string
	 */
	protected function replaceGreaterThan($message, $attribute, $rule, $parameters)
	{
		return str_replace(':other', $this->getAttribute($parameters[0]), $message);
	}

	/**
	 * Validate the greater than other attribute.
	 *
	 * @param  string  $attribute
	 * @param  mixed   $value
	 * @param  array   $parameters
	 * @return bool
	 */
	protected function validateGreaterThan($attribute, $value, $parameters)
	{
		$this->requireParameterCount(1, $parameters, 'other');
		$other = array_get($this->data, $parameters[0]);
		$value = str_replace("-", "", $value);
		$other = str_replace("-", "", $other);

		return intval($value) > intval($other);
	}

	/**
	 * Replace Korean attribute postPosition.
	 * @return void
	 */
	public function replacePostPosition($message) {
		if($this->translator->getLocale() != "ko" && $this->translator->getLocale() != "kr") return $message;

		$messages = preg_split("/(\([가-힣]\|[가-힣]\)\s)/uU", $message, -1, PREG_SPLIT_DELIM_CAPTURE);
		if(!count($messages)) return $message;
	
		for($i=0;$i<count($messages);$i++){
			if(preg_match("/(\([가-힣]\|[가-힣]\)\s)/u", $messages[$i]) && $i > 0){
				$messages[$i] = str_replace("(", "", $messages[$i]);
				$messages[$i] = str_replace(")", "", $messages[$i]);
				$postPositions = explode("|", $messages[$i]);
				$messages[$i-1] = $this->select_marker($messages[$i-1], $postPositions[0], $postPositions[1]);
				$messages[$i] = " ";
			}
		}

		return implode($messages);
	}

	protected function have_jongsung ($chr){
		static $no_jongsung = "가갸거겨고교구규그기개걔게계과괘궈궤괴귀긔까꺄꺼껴꼬꾜꾸뀨끄끼깨꺠께꼐꽈꽤꿔꿰꾀뀌끠나냐너녀노뇨누뉴느니내냬네녜놔놰눠눼뇌뉘늬다댜더뎌도됴두듀드디대댸데뎨돠돼둬뒈되뒤듸따땨떠뗘또뚀뚜뜌뜨띠때떄떼뗴똬뙈뚸뛔뙤뛰띄라랴러려로료루류르리래럐레례롸뢔뤄뤠뢰뤼릐마먀머며모묘무뮤므미매먜메몌뫄뫠뭐뭬뫼뮈믜바뱌버벼보뵤부뷰브비배뱨베볘봐봬붜붸뵈뷔븨빠뺘뻐뼈뽀뾰뿌쀼쁘삐빼뺴뻬뼤뽜뽸뿨쀄뾔쀠쁴사샤서셔소쇼수슈스시새섀세셰솨쇄숴쉐쇠쉬싀싸쌰써쎠쏘쑈쑤쓔쓰씨쌔썌쎄쎼쏴쐐쒀쒜쐬쒸씌아야어여오요우유으이애얘에예와왜워웨외위의자쟈저져조죠주쥬즈지재쟤제졔좌좨줘줴죄쥐즤짜쨔쩌쪄쪼쬬쭈쮸쯔찌째쨰쩨쪠쫘쫴쭤쮀쬐쮜쯰차챠처쳐초쵸추츄츠치채챼체쳬촤쵀춰췌최취츼카캬커켜코쿄쿠큐크키캐컈케켸콰쾌쿼퀘쾨퀴킈타탸터텨토툐투튜트티태턔테톄톼퇘퉈퉤퇴튀틔파퍄퍼펴포표푸퓨프피패퍠페폐퐈퐤풔풰푀퓌픠하햐허혀호효후휴흐히해햬헤혜화홰훠훼회휘희2459ABCDEFGHIJKOPQSTUVWXYZabcdefghijkopqstuvwxyz";
		return mb_strpos($no_jongsung, $chr) === false ? true : false;
	}

	protected function select_marker ($s, $have_jongsung, $no_jongsung) {
		$last_chr = mb_substr($s, -1, 1);
		if($last_chr == ")"){
			$last_chr = mb_substr($s, -2, 1);
			
		}

		return $this->have_jongsung($last_chr) ?
		$s.$have_jongsung :
		$s.$no_jongsung;
	}


}

