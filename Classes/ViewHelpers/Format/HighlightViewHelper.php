<?php
/**
 * Description of the class 'HighlightViewHelper.php'
 *
 * @author Dennis Römmich <dennis@roemmich.eu>
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_SzIndexedSearch_ViewHelpers_Format_HighlightViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @return string The result with highlighted String
	 */
	public function render() {
		$searchStringArr = t3lib_div::_GP('tx_szindexedsearch_pi1');
		$searchString = urldecode($searchStringArr['searchString']);

		$return = htmlspecialchars_decode($this->renderChildren());
		$occurrences = substr_count(strtolower($return), strtolower($searchString));

		$match = array();

		for ($i = 0; $i < $occurrences; $i++) {
			$match[$i] = stripos($return, $searchString, $i);
			$match[$i] = substr($return, $match[$i], strlen($searchString));
			$return = str_replace($match[$i], '[#]'.$match[$i].'[@]', $return);
		}

		$return = str_replace('[#]', '<strong>', $return);
		$return = str_replace('[@]', '</strong>', $return);


		return $return;
	}

}

?>