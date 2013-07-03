<?php
/**
 * The create view file of block category of XiRangEPS.
 *
 * @copyright   Copyright 2013-2013 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.xirang.biz
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
  <form method='post' class="form-inline"  id="ajaxForm"> 
  <table class='table table-bordered table-form'>
    <caption><?php echo $lang->article->add;?></caption>
    <tr>
      <th><?php echo $lang->article->category;?></th>
      <td><?php echo html::select("categories[]", $tree, $category ? $category->id : 0, 'class=select-3');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->article->author;?></th>
      <td><?php echo html::input('author', $app->user->realname, 'class=text-3');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->article->original;?></th>
      <td>
        <?php
        echo html::select('original', $lang->article->originalList, 1, 'class=select-3');
        echo $lang->article->copySite . html::input('copySite', '', 'class=text-2');
        echo $lang->article->copyURL  . html::input('copyURL', '', 'class=text-3');
        ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $lang->article->title;?></th>
      <td><?php echo html::input('title', '', 'class=text-1');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->article->keywords;?></th>
      <td><?php echo html::input('keywords', '', 'class=text-1');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->article->summary;?></th>
      <td><?php echo html::textarea('summary', '', 'rows="5" class="area-1"');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->article->content;?></th>
      <td><?php echo html::textarea('content', '', 'rows=25 class="area-1"');?></td>
    </tr>
    <tr>
      <td colspan='2' class='a-center'>
        <?php 
        echo html::submitButton();
        ?>
      </td>
    </tr>
  </table>
  </form>
</div>
<?php include '../../common/view/footer.admin.html.php';?>
