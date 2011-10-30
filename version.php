<?PHP 

/**
 * Version information for mod/scheduler
 * 
 * @package    mod
 * @subpackage scheduler
 * @copyright  2011 Henning Bostelmann and others (see README.txt)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * This is the development branch (master) of the scheduler module.
 */

$module->version  = 2011103000;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2011033000;  // Requires Moodle 2.0
$module->cron     = 60;          // Period for cron to check this module (secs)

?>