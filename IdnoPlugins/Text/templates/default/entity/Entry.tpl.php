<h2><a href="<?=$vars['object']->getURL()?>"><?=$vars['object']->getTitle()?></a></h2>
<p><?php echo nl2br($vars['object']->body); //TODO: a better rendering algorithm ?></p>