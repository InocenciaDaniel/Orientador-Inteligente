<?php

	function encontrar_carreira ($Nom, $Q01, $Q02, $Q03, $Q04, $Q05, $Q06, $Q07, $Q08, $Q09, $Q10, $Q11, $Q12, $Q13, 
		$Q14, $Q15, $Q16, $Q17, $Q18, $Q19, $Q20, $Q21, $Q22, $Q23, $Q24, $Q25, $Q26, $Q27, $Q28, $Q29, $Q30, $Q31, $Q32, $Q33, $Q34, $Q35, $Q36, $Q37, $Q38, $Q39, $Q40, $Q41, $Q42, $Q43, $Q44, $Q45, $Q46, $Q47, $Q48, $Q49, $Q50, $Q51, $Q52, $Q53, $Q54, $Q55, $Q56, $Q57, $Q58, $Q59, $Q60, $Q61, $Q62, $Q63, $Q64, $Q65, $Q66, $Q67, $Q68, $Q69, $Q70, $Q71, $Q72, $Q73, $Q74, $Q75, $Q76, $Q77, $Q78, $Q79, $Q80)
	{

		$output = `swipl -s orientador.pl -g "carreira('$Nom', $Q01, $Q02, $Q03, $Q04, $Q05, $Q06, $Q07, $Q08, $Q09, $Q10, $Q11, $Q12, $Q13, $Q14, $Q15, $Q16, $Q17, $Q18, $Q19, $Q20, $Q21, $Q22, $Q23, $Q24, $Q25, $Q26, $Q27, $Q28, $Q29, $Q30, $Q31, $Q32, $Q33, $Q34, $Q35, $Q36, $Q37, $Q38, $Q39, $Q40, $Q41, $Q42, $Q43, $Q44, $Q45, $Q46, $Q47, $Q48, $Q49, $Q50, $Q51, $Q52, $Q53, $Q54, $Q55, $Q56, $Q57, $Q58, $Q59, $Q60, $Q61, $Q62, $Q63, $Q64, $Q65, $Q66, $Q67, $Q68, $Q69, $Q70, $Q71, $Q72, $Q73, $Q74, $Q75, $Q76, $Q77, $Q78, $Q79, $Q80)." -t halt.`;

		return ($output);
	}
?>