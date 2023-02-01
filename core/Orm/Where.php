<?php

namespace Core\Orm;

class Where 
//(first_name = 'Vasi' AND 'second_name='Pupkin' AND people_color = 'blue') OR (first_name = 'Petay' AND 'second_name='Sidorov' AND people_color = 'blue')
//[or, [''fname','=','Vasil' ]] [or, "fname = 'Vasil'"]

{
	public array $arr=[]; 
	
	public function __construct ($arrFrom)
	{
		$this->arr = $arrFrom;
	}
	
	public function where (): string
	{
		$strWhere = '';
		foreach ($this->arr as $key=>$value)
		{
			if (is_array ($value))
			{
				$strWhere .= '(' ;
				//var_dump ($value);
				foreach ($value as $k=>$arrValueOr)
				{
					if ($arrValueOr == 'or')
					{
						$OR = ' OR ';
						//var_dump ($arrValueOr);
					}
					else
					{
						$AND = ' AND ';
						if (array_key_last($value)===$k)
						{
							$strWhere .= "$arrValueOr";
						}
						else $strWhere .= "$arrValueOr" . "$AND";
					}
				}
				if ($OR == ' OR ')
				{
					$strWhere .= ')' . "$OR";
					$OR = '';
					//var_dump ($strWhere);
				}
				else $strWhere .= ')';
			}
			else
			{
				$AND = ' AND ';
				if (array_key_last($this->arr)===$key)
				{
					$strWhere .= "$value" ;
				}	
				else $strWhere .= "$value" . "$AND";
			}
		}
		
		return $strWhere;
	}
	
		
}
?>