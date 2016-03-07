<?php
namespace Sunzinet\SzIndexedSearch\Domain\Model;

/**
 * Description of the phpfile 'User.php'
 *
 * @author Dennis Römmich <dennis@roemmich.eu>
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;

/**
 * Class User
 *
 * @package Sunzinet\SzIndexedSearch\Domain\Model
 */
class User extends FrontendUser
{

    use SearchResult;

}
