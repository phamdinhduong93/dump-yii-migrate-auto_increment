<?php
/**
 * @Author: Hzhihua
 * @Date: 17-9-7 12:18
 * @Email cnzhihua@gmail.com
 *
 * This view is used by console/controllers/MigrateController.php
 * The following variables are available in this view:
 */
/* @var $className string the new migration class name */
/* @var $safeUp string the content of safeUp function */
/* @var $safeDown string the content of safeDown function */
echo "<?php\n";
?>

use hzhihua\dump\Migration;

/**
 * Class <?= $className . PHP_EOL?>
 * @property yii\db\Transaction $_transaction
 * @Author Hzhihua <cnzhihua@gmail.com>
 */
class <?= $className ?> extends Migration
{

	/**
     * @inheritdoc
     */
    public function safeUp()
    {
        <?= $safeUp ?>
    }

	/**
     * @inheritdoc
     */
    public function safeDown()
    {
        <?= $safeDown ?>
    }
}
