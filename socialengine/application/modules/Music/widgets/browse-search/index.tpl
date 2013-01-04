<?php
/**
 * SocialEngine
 *
 * @category   Application_Extensions
 * @package    Music
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.net/license/
 * @version    $Id: index.tpl 9382 2011-10-14 00:41:45Z john $
 * @author     John Boehr <john@socialengine.com>
 */
?>

<script type="text/javascript">
  //<![CDATA[
    en4.core.runonce.add(function() {
      $$('#sort, #show').addEvent('change', function(){
        $(this).getParent('form').submit();
      });
    });
  //]]>
</script>

<?php if( $this->form ): ?>
  <?php echo $this->form->render($this) ?>
<?php endif ?>
